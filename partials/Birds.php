<?php


class Birds extends petShop{
    public $cage;

    public function __construct($_image, $_name, $_price){
        parent::__construct($_image, $_name, $_price);

    }

    public function setCage($_cage){
        $this->cage = $_cage;
    }
}