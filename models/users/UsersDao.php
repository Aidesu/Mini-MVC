<?php

class UsersDao {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAllUsers() {
    try {
        $query = "SELECT * FROM users";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $dataUser = $stmt->fetchAll(PDO::FETCH_OBJ);
        $usersArray = [];
        foreach ( $dataUser as $user ) {
            $userObj = new User($user->id, $user->firstName, $user->lastName, $user->birthDate,$user->country, $user->image);
            $usersArray[] = $userObj;
        }
        return $usersArray;
        }catch(PDOException $e) {
        throw new Exception("Erreur sql : ". $e->getMessage());
        }
    }

    public function getUserById(int $id) {
        try {
            $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([":id" => $id]);
        $dataUser = $stmt->fetch(PDO::FETCH_OBJ);
        return $dataUser;
        }catch(PDOException $e) {
        throw new Exception("Erreur sql : ". $e->getMessage());
        }
    }

    public function deleteUserById(int $id) {
        try {
            $query = "DELETE FROM users WHERE id = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([":id"=> $id]);
        }catch(PDOException $e) {
            throw new Exception("Erreur sql : ". $e->getMessage());
        }
    }

    public function addUser($user) {
        try {
            $query = "INSERT INTO users (firstName, lastName, birthDate, country, image)
        VALUES (:firstName, :lastName, :birthDate, :country, :image)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([":firstName"=> $user->firstName,":lastName"=> $user->lastName, ":birthDate" => $user->birthDate , ":country" => $user->country, ":image" => $user->image]);
        }catch(PDOException $e) {
        throw new Exception("Erreur sql : ". $e->getMessage());
        }
    }

    public function updateUser($user) {
        try {
            $query = "UPDATE users SET firstName = :firstName, lastName = :lastName, birthDate = :birthDate, country = :country, image = :image WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([":id"=> $user->id, ":firstName"=> $user->firstName, ":lastName"=> $user->lastName, ":birthDate"=> $user->birthDate, ":country"=> $user->country, ":image"=> $user->image]);
        }catch(PDOException $e) {
        throw new Exception("Erreur sql : ". $e->getMessage());
        }
    }
}