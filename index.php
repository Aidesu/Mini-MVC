<?php

require "./controllers/userController.php";
require "./controllers/productController.php";
require "./controllers/productListController.php";
require "./controllers/productPDOController.php";
require "./data/db.php";

// $db->exec('DELETE FROM products');
// $db->exec("DELETE FROM sqlite_sequence WHERE name='products'");

// foreach ($db->query("SELECT * FROM products") as $row) {
//     echo $row['title'] . " - " . $row['price'] . "<br>";
// }

// $query = $db->query("SELECT * FROM products");
// if ($query === false) {
//     var_dump($db->errorInfo());
//     die('Erreur SQL');
// }
// $products = $query->fetchAll(PDO::FETCH_OBJ);
// echo '<pre>';
// print_r($products[0]->description);
// echo '</pre>';



if (isset($_GET['page']) && $_GET['page'] == 'product') {
    $productController = new ProductController();
    $productController->load("Dildo", "24.99");  
} elseif (isset($_GET['page']) && $_GET['page'] == 'products'){
    // $productListController = new ProductListController();
    // $productListController->loadData();
    // $productListController->loadProductList();
    $productsPDO = new ProductPdoController($db);
    $productsPDO->getAllProducts();
    $productsPDO->viewProducts();
}else {
    $userController = new UserController();
    $userController->nameUser("Carla");
}



