<?php

require "./controllers/userController.php";
require "./controllers/productController.php";
require "./controllers/productListController.php";




if (isset($_GET['page']) && $_GET['page'] == 'product') {
    $productController = new ProductController();
    $productController->load("Dildo", "24.99");  
} elseif (isset($_GET['page']) && $_GET['page'] == 'products'){
    $productListController = new ProductListController();
    $productListController->loadData();
    $productListController->loadProductList();
}else {
    $userController = new UserController();
    $userController->nameUser("Carla");
}



