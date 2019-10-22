<?php
include('ecom_connection.php');
$category_id = $_GET['category_id'];
include('getCategoryProductsFunc.php');
$products = CategoryProducts($category_id);
echo(json_encode($products));
