<?php

namespace model;

class Product
{
    public $id;
    public $product_name;
    public $price;
    public $description;
    public $producer;

    public function __construct($product_name, $price, $description, $producer)
    {
        $this->product_name = $product_name;
        $this->price = $price;
        $this->description = $description;
        $this->producer = $producer;
    }
}