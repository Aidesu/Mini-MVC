<?php

class ProductDao {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAllProduct() {
        $query = "SELECT * FROM products";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $dataProduct = $stmt->fetch(PDO::FETCH_OBJ);
        $productArray = [];
        foreach ($dataProduct as $product) {
            $productObj = new Product($product->id,$product->title, $product->description, $product->price, $product->stock, $product->image);
            $productArray[] = $productObj;
        }
        return $productArray;
    }
}