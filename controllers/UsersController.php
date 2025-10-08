<?php


require_once __DIR__ . "/../models/users/UserModel.php";

class UsersController {
    public $userDao;

    public function __construct($userDao){
        $this->userDao = $userDao;
    }

    public function displayAllUsers():void  {
        $users = $this->userDao->getAllUsers();
        
        require_once __DIR__ ."/../views/layouts/header.php";
        require_once __DIR__ ."/../views/users/usersView.php";
        require_once __DIR__ ."/../views/layouts/footer.php";
    }

    public function showUserById($id):void  {
        $user = $this->userDao->getUserById($id);
        
        require_once __DIR__ ."/../views/layouts/header.php";
        require_once __DIR__ ."/../views/users/profileView.php";
        require_once __DIR__ ."/../views/layouts/footer.php";
    
    }

    public function deleteUserById($id):void  {
        $this->userDao->deleteUserById($id);
        header("location: /mini-mvc/?page=users&action=displayAllUser");
        $this->displayAllUsers();
        exit;
    }

    public function createUser() {
        require_once __DIR__ ."/../data/Country.php";
        $countryList = new Country();


        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (empty($_POST["firstName"]) || strlen($_POST["firstName"]) > 25) {
            echo "Error on first name entry ";
            return;
        }
        if (empty($_POST["lastName"]) || strlen($_POST["lastName"]) > 25) {
            echo "Error on last name entry";
            return;
        }
        if (empty($_POST["birthDate"])){
            echo "Error on birth date entry";
            return;
        }
        if (empty($_POST["country"])){
            echo "Enter a country";
            return;
        }

        $user = new User ($_POST['firstName'], $_POST['lastName'], $_POST['birthDate'], $_POST['country'], $_POST['profilePicture']);
        $this->userDao->addUser($user);
        header("location: /mini-mvc/?page=users&action=displayAllUser");
        $this->displayAllUsers();
        exit;
        }
        

        require_once __DIR__ ."/../views/layouts/header.php";
        require_once __DIR__ ."/../views/users/addUserView.php";
        require_once __DIR__ ."/../views/layouts/footer.php";
    }

    public function updateUserById($id) {
        require_once __DIR__ ."/../data/Country.php";
        $countryList = new Country();
        $user = $this->userDao->getUserById($id);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $newUser = new User($id,$_POST['firstName'], $_POST['lastName'], $_POST['birthDate'], $_POST['country'], $_POST['profilePicture']);
            $this->userDao->updateUser($newUser);
            header("location: /mini-mvc/?page=users&action=displayAllUser");
            $this->displayAllUsers();
            exit;
        }

        require_once __DIR__ ."/../views/layouts/header.php";
        require_once __DIR__."/../views/users/editUserView.php";
        require_once __DIR__ ."/../views/layouts/footer.php";
    }
}