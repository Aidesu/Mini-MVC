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
            <ul><?php foreach ($users as $user): ?>
                <li>Utilisateur : <?= htmlspecialchars($user->firstName, ENT_QUOTES, "UTF-8")?></h1></li>
                <?php endforeach; ?>
            </ul>
        </main>
    </body>
</html>
