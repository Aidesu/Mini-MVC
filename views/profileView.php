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
            <img style="width: 20rem; height: 20rem;" src="<?= htmlspecialchars($user->image, ENT_QUOTES, "UTF-8") ?>" alt=""><br><br>
            <h2>
                <?= htmlspecialchars($user->firstName, ENT_QUOTES, "UTF-8")?>
            </h2>
            <h3>
                <?= htmlspecialchars($user->lastName, ENT_QUOTES, "UTF-8")?><br>
            </h3><br>
            <h4>
                Birth date :  <?= htmlspecialchars($user->birthDate, ENT_QUOTES, "UTF-8")?>
            </h4>
        </main>
    </body>
</html>
