<?php
include("ecom_connection.php");
include('getOneFunc.php');
$user_id = $_GET["user_id"];

$user = getOne('users', $user_id);
if ($user != null) {
    $querry = $connection->prepare("SELECT cart.id, users.id as user_id, product_id, categories.id as category_id,
        quantity, cost, products.name as product, products.description as product_details, categories.name as category,
         price, products.photo_url, mobile, users.name as user_name, mobile from cart
          INNER JOIN products on products.id=cart.product_id
           INNER JOIN users on cart.user_id=users.id
             INNER JOIN categories on products.category_id=categories.id
               where user_id=?");
    $querry->bind_param('i', $user_id);
    $querry->execute();
    $result = $querry->get_result();
    $rows = [];
    while ($row = $result->fetch_assoc()) {
        array_push($rows, $row);
    }
    echo(json_encode($rows));
} else {
    echo "Missed user";
}

