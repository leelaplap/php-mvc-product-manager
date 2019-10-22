<?php

namespace controller;

use model\Product;
use model\ProductDB;
use model\DBConnect;

class ProductController
{
    public $productDB;

    public function __construct()
    {
        $connect = new DBConnect("mysql:host=localhost;dbname=mvc_products_manager", "dat", "1");
        $this->productDB = new ProductDB($connect->connect());
    }

    public function showList()
    {
        $products = $this->productDB->getAll();
        include "view/list.php";
    }

    public function add()
    {
        include "view/add.php";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $product_name = $_POST['product_name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $producer = $_POST['producer'];

            $product = new Product($product_name, $price, $description, $producer);
            $this->productDB->insert($product);
            header("location:index.php");
        }
    }

    public function delete()
    {
        $id = $_GET["id"];
        $this->productDB->delete($id);
        header("location:index.php");
    }

    public function edit()
    {
        $id = $_GET["id"];
        $product = $this->productDB->findProductById($id);
        include "view/edit.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $product_name = $_POST['product_name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $producer = $_POST['producer'];
            $product = new Product($product_name, $price, $description, $producer);
            $this->productDB->edit($id,$product);
            header("location:index.php");
        }
    }

}