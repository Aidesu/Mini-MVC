<?php

class ProductModel {

    public $id;
    public $title;
    public $description;
    public $price;
    public $stock;
    public $image;

    public function __construct($title, $description, $price, $stock, $image = null, $id = null) {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
        $this->image = $image;
        $this->id = $id;
    }
    
}