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
            <h1>Products List</h1>
            <ul>
                <?php
                foreach($products as $k => $e) {
                    echo "<li>Title :" . htmlspecialchars($k, ENT_QUOTES, "UTF-8") . " Price : \$". htmlspecialchars($e, ENT_QUOTES, "UTF-8") . " </li>";
                }
                ?>
            </ul>
        </main>
    </body>
</html>
