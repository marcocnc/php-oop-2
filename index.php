<?php

require_once __DIR__ . '/partials/Dogs.php';

class petShop{
    public $food;
    public $games;
    public $accessories;

    function __construct($_food, $_games, $_accessories){
        $this->food = $_food;
        $this->games = $_games;
        $this->accessories = $_accessories;
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>
    
</body>
</html>