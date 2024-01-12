<?php
require_once 'Product.php';
require_once 'Category.php';

$product = new Product();

$methode = $product->findOneById(2);
var_dump($methode);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>