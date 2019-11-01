<?php
include('ecom_connection.php');
$category_id = $_GET['category_id'];
include('callableFunctions.php');
$products = CategoryProducts($category_id);
echo(json_encode($products));
