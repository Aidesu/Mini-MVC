<?php


class ProductPdoController {

    private $db;
    private $productsArray;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllProducts() {
        $query = $this->db->query('SELECT * FROM products');
    if ($query === false){
        var_dump($this->db->errorInfo());
        echo "Erreur SQL";
    }
    $products = $query->fetchAll(PDO::FETCH_OBJ);
    $this->productsArray = $products;
    }

    public function viewProducts() {
        $products = $this->productsArray;

        require __DIR__ . "/../views/layouts/header.php";
        require __DIR__ . '/../views/productPDOView.php';
        require __DIR__ . "/../views/layouts/footer.php";
    }
}