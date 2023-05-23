<?php


class Fishes extends petShop{
    public $acquarium;

    public function __construct($_food, $_games, $_accessories, $_acquarium){
        parent:: __construct($_food, $_games, $_accessories);
        $this->acquarium = $_acquarium;
    }

}