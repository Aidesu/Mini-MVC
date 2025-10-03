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
            <h1>Product : <?= htmlspecialchars($product->getTitle(), ENT_QUOTES, 'UTF-8')  ?> Price : $<?= htmlspecialchars($product->getPrice(), ENT_QUOTES, 'UTF-8')?></h1>
        </main>
    </body>
</html>
