<?php>

class ProductModel {

    public $id;
    public $title;
    public $description;
    public $price;
    public $stock;
    public $image;

    public function __construct($id, $title, $description, $price, $stock, $image){
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->stocke = $stock;
        $this->image = $image;
    }
    
}