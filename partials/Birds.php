<?php


class Birds extends petShop{
    public $cage;

    public function __construct($_food, $_games, $_accessories, $_cage){
        parent:: __construct($_food, $_games, $_accessories);
        $this->cage = $_cage;
    }

}