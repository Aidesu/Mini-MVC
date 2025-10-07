<?php

require "./db.php";
require "./controllers/ProductsController.php";
require "./controllers/UserController.php";
require "./models/users/UserDao.php";
require "./models/products/ProductDao.php";



$pdo = Db::getConnecte();
$userDao = new UserDao($pdo);
$productDao = new ProductDao($pdo);

if (isset($_GET['page']) && $_GET['page'] == 'products'){
    $productsPDO = new ProductsController($userDao);
    $productsPDO->displayAllProducts();
}else {
    $userController = new UserController($userDao);
    $userController->displayAllUsers();
}



