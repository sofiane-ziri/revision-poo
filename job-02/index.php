<?php
require_once 'Product.php';

$product1 = new Product(1, 2, "Objet", ["img/img.png"], 10, "Objet", 10, new DateTime());

var_dump($product1);

$img = $product1->getPhotos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src= " <?php echo implode("", $img)?>" alt="">
    
</body>
</html>