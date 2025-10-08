<?php

class User {

    public $id;
    public $firstName;
    public $lastName;
    public $birthDate;
    public $country;
    public $image;

    public function __construct( $id, $firstName, $lastName, $birthDate, $country, $image ) {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->country = $country;
        $this->image = $image;
    }

}