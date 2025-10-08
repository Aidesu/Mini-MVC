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
            <h2>Edit user <?= $user->firstName ?> </h2>
            <form action="" method="post">
                <label for="firstName">First name : </label>
                <input type="text" name="firstName" value="<?= $user->firstName ?>" required placeholder="Enter a first name here ..."><br>
                <label for="lastName">Last name : </label>
                <input type="text" name="lastName" value="<?= $user->lastName ?>" required placeholder="Enter a last name here ..."><br>
                <label for="birthDate">Birth date : </label>
                <input type="date" name="birthDate" value="<?= $user->birthDate ?>" required><br>
                <label for="country">Country : </label>
                <select name="country" name="country" required id="country">
                    <option value="<?= $user->country ?>"><?= $user->country ?></option>
                    <?php foreach($countryList->getCountry() as $country): ?>
                        <option value="<?= $country['country'] ?>"><?= $country['country'] ?></option>
                    <?php endforeach; ?>
                </select><br>
                <label for="profilePicture">Profile picture link : </label>
                <input type="url" name="profilePicture" value="<?= $user->image ?>" id="inputProfilePic" placeholder="Enter image URL here ...">
                <button type="button" id="testPicBtn">Test picture</button><br>
                <img id="imageTester"><br>
                <button type="submit">Submit</button>
            </form>
        </main>
        <script>
            const btnImg = document.getElementById("testPicBtn");
            const inputImg = document.getElementById("inputProfilePic");
            const imgTester = document.getElementById("imageTester");

            btnImg.addEventListener("click", () => {
                if (inputImg.value) {
                    imgTester.setAttribute("src", inputImg.value);
                    imgTester.setAttribute("style", "width: 10rem; height: 10rem; border-radius: 50%;")
                }
            })
        </script>
    </body>
</html>
