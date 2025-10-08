<?php

class Country {
    public $data;

    public function __construct() {
    $url = "https://gist.githubusercontent.com/pratikbutani/20ded7151103bb30737e2ab1b336eb02/raw/be1391e25487ded4179b5f1c8eedb81b01226216/country-flag.json";

    $response = file_get_contents($url);
    $this->data = json_decode($response, true);
    }

    public function getCountry() {
        return $this->data;
    }
}