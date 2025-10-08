<?php

class ProductsDao {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAllProduct() {
        try {
            $query = "SELECT * FROM products";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $dataProducts = $stmt->fetchAll(PDO::FETCH_OBJ);
        $productArray = [];
        foreach ($dataProducts as $product) {
            $productObj = new ProductModel($product->title, $product->description, $product->price, $product->stock, $product->image, $product->id);
            $productArray[] = $productObj;
        }
        return $productArray;
        }catch (PDOException $e) {
            throw new Exception("Erreur sql : ".$e->getMessage());
        }
    }

    public function getProductById($productId) {
        try {
            $query = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([":id" => $productId]);
        $dataProduct = $stmt->fetch(PDO::FETCH_OBJ);
        return $dataProduct;
        }catch (PDOException $e) {
            throw new Exception("Erreur sql : ".$e->getMessage());
        }
    }

    public function deleteProductById($productId) {
        try {
            $query = "DELETE FROM products WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([":id"=> $productId]);

        }catch (PDOException $e) {
            throw new Exception("Erreur sql : ".$e->getMessage());
        }
    }

    public function addProduct($product){
        try {
            $query = "INSERT INTO products (title, description, price, stock, image)
        VALUES (:title, :description, :price, :stock, :image)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([":title" => $product->title, ":description" => $product->description, ":price" => $product->price, "stock" => $product->stock, ":image" => $product->image]);
        }catch (PDOException $e) {
            throw new Exception("Erreur sql : ".$e->getMessage());
        }
    }

    public function updateProduct($product){
        try {
            $query = "UPDATE products SET title = :title, description = :description, price = :price, stock = :stock, image = :image WHERE id = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([":title"=> $product->title, ":description"=> $product->description, ":price"=> $product->price, ":stock"=> $product->stock, ":image"=> $product->image, ":id"=> $product->id]);
        }catch (PDOException $e) {
            throw new Exception("Erreur sql : ".$e->getMessage());
        }
    }
}