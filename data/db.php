<?php 

try {
    $db = new PDO('sqlite:'.__DIR__.'/data.sqlite');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("CREATE TABLE IF NOT EXISTS products(
    id INTEGER PRIMARY KEY NOT NULL,
    title TEXT NOT NULL,
    description TEXT,
    price REAL NOT NULL,
    stock INTEGER,
    image TEXT
    
)");
    // $db->prepare("INSERT INTO products (title,description,price) VALUES (?,?,?)")
    //     ->execute(['Butt Plug', 'Omg a big butt plug grrr',12.95]);
} catch (PDOException $e){
    die("Erreur de connexion SQL : " . $e->getMessage());
}

    