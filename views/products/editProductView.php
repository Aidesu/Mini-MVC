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
            <h2>Edit a product : </h2>
            <form action="" method="post">
                <label for="title">Title : </label>
                <input type="text" name="title" required placeholder="Enter a title here ..." value="<?= $product->title ?>"><br>
                <label for="description">Description : </label>
                <input type="textarea" name="description" required placeholder="Enter a description here ..." value="<?= $product->description ?>"><br>
                <label for="price">Price : </label>
                <input type="number" name="price" required placeholder="Enter a price here ..." value="<?= $product->price ?>"><br>
                <label for="stock">Stock : </label>
                <input type="number" name="stock" required placeholder="Enter a stock here ..." value="<?= $product->stock ?>"><br>
                <label for="image">image URL : </label>
                <input type="url" name="image" placeholder="Enter an image URL here ..." value="<?= $product->image ?>"><br>
                <button type="submit">Submit</button>
            </form>
        </main>
    </body>
</html>
