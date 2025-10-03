<?php

require_once './models/productModel.php';

class ProductListController {

    public function createProduct($title, $price) {
        $product = new Product($title, $price);
    }

    public function loadProductList() {
        require __DIR__ . "/../views/layouts/header.php";
        require __DIR__ . "/../views/productListView.php";
        require __DIR__ . "/../views/layouts/footer.php";
    }

    public function loadData() {
        $product2 = new Product("Butt Plug", 12.95);
        $product3 = new Product("Big Dragon Dildo", 89.99);
        $product4 = new Product("Classic Vibrator", 39.90);
        $product5 = new Product("Light-Up Anal Plug", 19.99);
        $product6 = new Product("Vibrating Cock Ring", 14.50);
        $product7 = new Product("Remote-Controlled Vibrating Egg", 34.95);
        $product8 = new Product("Realistic Fleshlight", 59.99);
        $product9 = new Product("Leather Handcuffs", 22.00);
        $product10 = new Product("Soft Feather Whip", 18.75);
        $product11 = new Product("Water-Based Lubricant (200ml)", 9.99);
        $product12 = new Product("Warming Massage Oil", 15.95);
        $product13 = new Product("Black Lace Corset", 45.00);
        $product14 = new Product("Kegel Balls", 29.90);
        $product15 = new Product("Satin Blindfold for Erotic Play", 7.50);
        $product16 = new Product("Anal Beads", 17.50);
        $product17 = new Product("Vibrating Bullet", 12.99);
        $product18 = new Product("G-Spot Stimulator", 49.90);
        $product19 = new Product("Silicone Strap-On", 69.95);
        $product20 = new Product("Nipple Clamps", 14.00);
        $product21 = new Product("Massage Candle", 11.50);
        $product22 = new Product("Thigh-High Stockings", 22.90);
        $product23 = new Product("Bondage Rope Set", 33.99);
        $product24 = new Product("Remote-Controlled Panties", 39.90);
        $product1 = new Product("Dildo", 25.99);


    }
}