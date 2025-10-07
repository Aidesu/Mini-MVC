<?php


require_once __DIR__ . "/../models/users/UserModel.php";

class UserController {
    public $userDao;

    public function __construct($userDao){
        $this->userDao = $userDao;
    }

    public function displayAllUsers() {
        $users = $this->userDao->getAllUsers();
        
        require_once __DIR__ ."/../views/layouts/header.php";
        require_once __DIR__ ."/../views/userView.php";
        require_once __DIR__ ."/../views/layouts/footer.php";
    }
}