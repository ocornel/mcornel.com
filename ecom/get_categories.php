<?php
include('ecom_connection.php');
include('callableFunctions.php');

$categories = getAll('categories');
$result = [];
$i = 0;
foreach ($categories as $category) {
    array_push($result, $category);
    $category_id = $category['id'];
    $products = CategoryProducts($category_id);
    $result[$i]['products'] = $products;
    $i++;
}
echo(json_encode($result));
