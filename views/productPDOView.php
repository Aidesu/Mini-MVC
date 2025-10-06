<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <main>
            <h1>Products PDO List</h1>
            <ul>
                <?php
                foreach($products as $product) {
                    echo "<li>Title : <a href=product?id=$product->id>" . htmlspecialchars($product->title, ENT_QUOTES, "UTF-8") . "</a><br>Description : " . htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8') . "<br>Price : \$". htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8') . "<br>Stock : ". htmlspecialchars($product->stock, ENT_QUOTES, 'UTF-8') . "</li><br>";
                }
                ?>
            </ul>
        </main>
    </body>
</html>
