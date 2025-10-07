<?php

require_once __DIR__ ."/../models/products/productModel.php";

class ProductsController {

    private $productDao;

    public function __construct($productDao) {
        $this->productDao = $productDao;
    }

    public function displayAllProducts() {
        $products = $this->productDao->getAllProducts();

        require_once __DIR__ ."/../views/layouts/header.php";
        require_once __DIR__ ."/../views/productPDOView.php";
        require_once __DIR__ ."/../views/layouts/footer.php";
    }
}