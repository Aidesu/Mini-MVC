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
            <h2>Add a new product : </h2>
            <form action="" method="post">
                <label for="title">Title : </label>
                <input type="text" name="title" required placeholder="Enter a title here ..."><br>
                <label for="description">Description : </label>
                <input type="textarea" name="description" required placeholder="Enter a description here ..."><br>
                <label for="price">Price : </label>
                <input type="number" name="price" required placeholder="Enter a price here ..."><br>
                <label for="stock">Stock : </label>
                <input type="number" name="stock" required placeholder="Enter a stock here ..."><br>
                <label for="image">image URL : </label>
                <input type="url" name="image" placeholder="Enter a stock here ..."><br>
                <button type="submit">Submit</button>
            </form>
        </main>
    </body>
</html>
