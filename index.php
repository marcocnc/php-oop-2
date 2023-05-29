<?php

require_once __DIR__ . '/models/Accessories.php';
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Toy.php';

require_once __DIR__ .'/db/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>PHP OOP 2</title>
</head>
<body>


    <div class="container my-5">
        <h1 class="text-center my-3">Pet Shop</h1>

        <div class="row">
        <?php foreach($products as $product): ?>
            <div class="col-4 p-2">
                <div class="card h-100">
                    <img src="<?php echo $product->getImage()?>" class="card-img-top" alt="<?php echo $product->getName()?>">
                    <div class="card-body">
                        <p class="card-text">
                            <i class="<?php echo $product->getCategory()->icon?>"></i><?php echo $product->getCategory()->name ?>
                        </p>
                        <h5 class="card-title"><?php echo $product->getName()?></h5>
                        <p class="card-text">&euro; <?php echo $product->getPrice()?></p>

                        <?php if(get_class($product) === 'Food'):?>
                            <p class="card-text">Peso: <?php echo $product->weight?></p>
                            <p class="card-text">Ingredienti: <?php echo implode(', ', $product->ingredients)?></p>
                        <?php endif; ?>

                        <?php if(get_class($product) === 'Toy'):?>
                            <p class="card-text">Caratteristiche: <?php echo $product->features?></p>
                            <p class="card-text">Dimensioni: <?php echo $product->size?></p>
                        <?php endif; ?>

                        <?php if(get_class($product) === 'Accessory'):?>
                            <p class="card-text">Materiale: <?php echo $product->material?></p>
                            <p class="card-text">Dimensioni: <?php echo $product->size?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>


</body>
</html>