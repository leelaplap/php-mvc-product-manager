<?php


namespace model;


use controller\ProductController;

class ProductDB
{
    public $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }

    public function getAll()
    {
        $stmt = $this->connect->query("SELECT * FROM products");
        $result = $stmt->fetchAll();
        $products = [];
        foreach ($result as $item) {
            $product = new Product($item["product_name"], $item["price"], $item["description"], $item["producer"]);
            $product->id = $item["id"];
            array_push($products, $product);
        }

        return $products;
    }

    public function insert($product)
    {
        $stmt = $this->connect->prepare("INSERT INTO products(product_name,price,description,producer) VALUES(:product_name,:price,:description,:producer)");
        $stmt->bindParam(":product_name", $product->product_name);
        $stmt->bindParam(":price", $product->price);
        $stmt->bindParam(":description", $product->description);
        $stmt->bindParam(":producer", $product->producer);
        $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->connect->query("DELETE FROM products WHERE id=$id");
    }

    public function findProductById($id){
        $stmt = $this->connect->query("SELECT * FROM products WHERE id=$id");
        $result = $stmt->fetch();
        $product = new Product($result["product_name"], $result["price"], $result["description"], $result["producer"]);
        $product->id=$result['id'];
        return $product;
    }

    public function edit($id,$product){
        $stmt =$this->connect->prepare("UPDATE products SET product_name=:product_name,price=:price,description=:description,producer=:producer WHERE id=$id");
        $stmt->bindParam(":product_name",$product->product_name);
        $stmt->bindParam(":price",$product->price);
        $stmt->bindParam(":description",$product->description);
        $stmt->bindParam(":producer",$product->producer);
        $stmt->execute();
    }
}