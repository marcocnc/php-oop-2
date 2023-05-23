<?php


class Dogs extends petShop{

    public function __construct($_food, $_accessories){
        parent::__construct($_food, $_accessories);

        parent::setGames('aaa');
    }
}



