<?php

require_once "Category.php";

$categories = [];
$products = '';
$ListProducts = [];

function FindCategory(\homework3\Category $categories, $name)
{
    foreach ($categories as $category)
    {
        if($category.getCategoryName() === $name)
        {
            return $category;
        }
    }
}

if(isset($_POST['submit']))
{
    $name = $_POST['text'];
    $products = $_POST['products'];
    $product = "";
    for($i = 0; $i < strlen($products); $i++)
    {
        if($products[$i] != "," || $products[$i] != " ")
        {
            $product .= $products[$i];
        }else
        {
            $ListProducts.array_push($product);
        }
    }
    $a = new Category($name, $ListProducts);
    $categories.array_push($a);
}
else
{
    $name = '';
    $products = '';
}
print_r($categories);
?>

<html>
<head>
    <title>Homework</title>
</head>
<body>
<form method="post" action="<?= $_SERVER['PHP_SELF']?>">
    <input type="text" placeholder="Name" name="text" ">
    <input type="text" name="products" placeholder="products">
    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>