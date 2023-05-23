<?php

require_once __DIR__ . '/Birds.php';
require_once __DIR__ . '/Cats.php';
require_once __DIR__ . '/Dogs.php';
require_once __DIR__ . '/Fishes.php';

class PetShop {
    public $food;
    public $games;
    public $accessories;

    function __construct($_food, $_accessories) {
        $this->food = $_food;
        $this->accessories = $_accessories;
    }

    public function setGames($_games) {
        
        $this->games = $_games;
    }
}
