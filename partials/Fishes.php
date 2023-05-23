<?php


class Fishes extends petShop{
    public $acquarium;

    public function __construct($_image, $_name, $_price){
        parent::__construct($_image, $_name, $_price);

    }

    public function setAcquarium($_acquarium) {

        $this->acquarium = $_acquarium;
    }
}