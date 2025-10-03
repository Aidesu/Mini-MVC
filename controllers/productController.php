<?php

require_once "./models/productModel.php";

class ProductController {

    public function load($title, $price) {
        $product = new Product($title, $price);

        require __DIR__ . "/../views/layouts/header.php";
        require __DIR__.'/../views/productView.php';
        require __DIR__ . "/../views/layouts/footer.php";
    }
}