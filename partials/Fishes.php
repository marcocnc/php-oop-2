<?php


class Fishes extends petShop{
    public $acquarium;

    public function __construct($_food, $_accessories, $_acquarium){
        parent:: __construct($_food, $_accessories);
        $this->acquarium = $_acquarium;
    }

    public function setAcquarium($_acquarium) {
        
        $this->acquarium = $_acquarium;
    }
}