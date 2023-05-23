<?php


class Birds extends petShop{
    public $cage;

    public function __construct($_food, $_accessories){
        parent:: __construct($_food, $_accessories);
    }

    public function setCage($_cage){
        $this->cage = $_cage;
    }
}