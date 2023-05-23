<?php

require_once __DIR__ . '/Birds.php';
require_once __DIR__ . '/Cats.php';
require_once __DIR__ . '/Dogs.php';
require_once __DIR__ . '/Fishes.php';

class PetShop {
    public $image;
    public $name;
    public $price;

    function __construct($_image, $_name, $_price) {
        $this->image = $_image;
        $this->name = $_name;
        $this->price = $_price;
    }
}
