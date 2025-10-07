<?php

class User {

    public $id;
    public $firstName;
    public $lastName;
    public $birthDate;
    public $ipAddress;

    public function __construct( $id, $firstName, $lastName, $birthDate, $ipAddress ){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->ipAddress = $ipAddress;
    }

}