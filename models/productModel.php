<?php

class Product {
    
    private string $title;
    private float $price;
    static private array $products;

    public function __construct($title, $price) {
        $this->title = $title;
        $this->price = $price;

        self::$products[$title] =  $price;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    static public function getList() {
        return self::$products;
    }
}