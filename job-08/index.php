<?php
require_once 'Product.php';
require_once 'Category.php';

$product = new Product();
$products = $product->findAll();
var_dump($products);    

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