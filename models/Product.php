<?php

require_once __DIR__ . '/Category.php';

class Product{
    private $name;
    private $price;
    private $image;
    private $category;

    public function __construct(String $_name, Float $_price, String $_image, Category $_category){
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setImage($_image);
        $this->setCategory($_category);
    }

    // Set functions
    public function setName($_name){
        $this->name = $_name;
    }

    public function setPrice($_price){
        $this->price = $_price;
    }

    public function setImage($_image){
        $this->image = $_image;
    }

    public function setCategory($_category){
        $this->category = $_category;
    }


    // Get functions
    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getImage(){
        return $this->image;
    }

    public function getCategory(){
        return $this->category;
    }

    
}
