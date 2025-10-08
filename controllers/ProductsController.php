<?php

require_once __DIR__ ."/../models/products/productsModel.php";

class ProductsController {

    private $productDao;

    public function __construct($productDao) {
        $this->productDao = $productDao;
    }

    public function displayAllProducts():void  {
        $products = $this->productDao->getAllProduct();
        
        require_once __DIR__ ."/../views/layouts/header.php";
        require_once __DIR__ ."/../views/products/productPDOView.php";
        require_once __DIR__ ."/../views/layouts/footer.php";
    }

    public function showProductById($id):void  {
        $product = $this->productDao->getProductById($id);
        
        require_once __DIR__ ."/../views/layouts/header.php";
        require_once __DIR__ ."/../views/products/productView.php";
        require_once __DIR__ ."/../views/layouts/footer.php";
    }

    public function deleteProductById($id):void   {
        $this->productDao->deleteProductById($id);
        header("Location: http://localhost/mini-mvc/?page=products&action=displayAllProducts");
        $this->displayAllProducts();
        exit;
    }

    public function addProduct() {


        if ($_SERVER["REQUEST_METHOD"] === "POST"){
            $product = new ProductModel($_POST['title'], $_POST['description'], $_POST['price'], $_POST['stock'], $_POST['image']);
            $this->productDao->addProduct($product);
            header("location: /mini-mvc/?page=products&action=displayAllProducts");
            $this->displayAllProducts();
            exit;
        }

        require_once __DIR__ ."/../views/layouts/header.php";
        require_once __DIR__ ."/../views/products/addProduct.php";
        require_once __DIR__ ."/../views/layouts/footer.php";
    }

    public function updateProductById($id) { 
        $product = $this->productDao->getProductById($id);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $newproduct = new ProductModel($_POST['title'], $_POST['description'], $_POST['price'], $_POST['stock'], $_POST['image'], $product->id);
            $this->productDao->updateProduct($newproduct);
            header("location: /mini-mvc/?page=products&action=displayAllProducts");
            $this->displayAllProducts();
            exit;
        }

        require_once __DIR__ ."/../views/layouts/header.php";
        require_once __DIR__."/../views/products/editProductView.php";
        require_once __DIR__ ."/../views/layouts/footer.php";
    }
}