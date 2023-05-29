<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product {
    public $features;
    public $size;

    public function __construct(String $_name, Float $_price, String $_image, Category $_category, String $_features, String $_size){
        parent:: __construct($_name, $_price, $_image, $_category);

        $this->features = $_features;
        $this->size = $_size;
    }
}

