<?php

require_once "./db.php";
require_once "./controllers/ProductsController.php";
require_once "./models/products/ProductsDao.php";
require_once "./controllers/UsersController.php";
require_once "./models/users/UsersDao.php";


$pdo = Db::getConnecte();
$usersDao = new UsersDao($pdo);
$productsDao = new ProductsDao($pdo);

$page = $_GET['page'];
$action = $_GET['action'] ?? "users";

switch ($page) {
    case 'users':
        $usersController = new UsersController($usersDao);
        switch ($action) {
            case 'displayAllUser':
                $usersController->displayAllUsers();
                break;
            case 'showProfile':
                $usersController->showUserById($_GET['id']);
                break;
            case 'deleteUser':
                $usersController->deleteUserById($_GET['id']);
                break;
            case 'addUser' :
                $usersController->createUser();
                break;
            case 'editUser':
                $usersController->updateUserById($_GET['id']);
                break;
        }
        break;
    case 'products':
        $productsController = new ProductsController($productsDao);
        switch ($action) {
            case 'displayAllProducts':
                $productsController->displayAllProducts();
                break;
            case 'showProduct':
                $productsController->showProductById($_GET['id']);
                break;
            case 'deleteProduct':
                $productsController->deleteProductById($_GET['id']);
                break;
            case 'addProduct' :
                $productsController->addProduct();
                break;
            case 'editProduct' :
                $productsController->updateProductById($_GET['id']);
        }
        break;
        
}




