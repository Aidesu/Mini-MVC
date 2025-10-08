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
            <h2><?= htmlspecialchars($product->title, ENT_QUOTES, 'UTF-8')  ?> </h2><br>
            <?php if ($product->image !== null ) { 
                echo "<img src='$product->image' alt='' style='width: 35rem; height: auto;'>";
            } else {
                echo "<img src='https://t4.ftcdn.net/jpg/03/76/40/81/360_F_376408140_kiazgwOvkEy0e50oxgF5kllIl7j2q1SQ.jpg' alt='' style='width: 35rem; height: 35rem;'>";
            } ?>
            <p><?= htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8')  ?></p>
            <h3> $<?= htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8')?></h3>
            <h4><?= htmlspecialchars($product->stock, ENT_QUOTES, 'UTF-8')?> remain</h4>
        </main>
    </body>
</html>
