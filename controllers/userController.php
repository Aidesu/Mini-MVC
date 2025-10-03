<?php

require_once "./models/userModel.php";


class UserController {

    public function nameUser($name) {
        $user = new User($name);
        
        require __DIR__ . "/../views/layouts/header.php";
        require __DIR__ . '/../views/userView.php';
        require __DIR__ . "/../views/layouts/footer.php";
    }
}