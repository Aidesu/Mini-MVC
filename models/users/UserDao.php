<?php

class UserDao {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAllUsers() {
        $query =  "SELECT * FROM users";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $dataUser = $stmt->fetchAll(PDO::FETCH_OBJ);
        $usersArray = [];
        foreach ( $dataUser as $user ) {
            $userObj = new User($user->id, $user->firstName, $user->lastName, $user->birthDate, $user->ipAddress);
            $usersArray[] = $userObj;
        }
        return $usersArray;
    }
}