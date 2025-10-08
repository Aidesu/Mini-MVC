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
            <ul style="list-style: none; display: grid; grid-template-columns: 20% 20% 20% 20% 20%; grid-template-rows: 20vh;"><?php foreach ($users as $user): ?>
                <li style="width: 5rem; height: 7rem; display: flex; flex-direction: column; align-items: center;">
                    <img src="<?= $user->image ?>" alt="profilePicture" style="width: 5rem; height: 5rem; border-radius: 50%;"><br>
                    <a href="?page=users&action=showProfile&id=<?= $user->id ?>"><?= htmlspecialchars($user->firstName, ENT_QUOTES, "UTF-8")?></a>
                    <a href="?page=users&action=deleteUser&id=<?= $user->id ?>" style="background-color: red; text-decoration: none; padding: 0.1rem; border-radius: 5px; color: white;">Delete</a>
                </li>
                <?php endforeach; ?>
            </ul>
            <a href="?page=users&action=addUser" style="position: fixed; bottom: 2rem; right: 2rem; background-color: black; padding: 0.5rem; border-radius: 15px; text-decoration: none; color: white;">+ Add User</a>
        </main>
    </body>
</html>
