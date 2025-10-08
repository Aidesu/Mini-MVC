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
            <h1>Products : </h1>
            <ul class="productsList">
                <?php foreach($products as $product): ?>
                    <li style="margin-bottom: 2rem; width:15rem;">
                        <img src="<?= $product->image ?>" alt="" style="width: 15rem; height: 15rem; object-fit: cover;"><br>
                    <a href="?page=products&action=showProduct&id=<?= $product->id ?>"> <?= htmlspecialchars($product->title, ENT_QUOTES, "UTF-8") ?> </a><br>
                    <?= htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8') ?><br>
                    $<?= htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8') ?><br>
                    Stock : <?= htmlspecialchars($product->stock, ENT_QUOTES, 'UTF-8') ?>
                    <a href="?page=products&action=deleteProduct&id=<?= $product->id ?>" style="background-color: red; text-decoration: none; padding: 0.1rem; border-radius: 5px; color: white;">Delete</a>
                    <a href="?page=products&action=editProduct&id=<?= $product->id ?>" style="background-color: rgb(14, 148, 231); text-decoration: none; padding: 0.1rem; border-radius: 5px; color: white;">Edit</a>
                </li>
                    <?php endforeach; ?>
            </ul>
            <a href="?page=products&action=addProduct" style="position: fixed; bottom: 2rem; right: 2rem; background-color: black; padding: 0.5rem; border-radius: 15px; text-decoration: none; color: white;">+ Add product</a>
        </main>
    </body>
</html>
