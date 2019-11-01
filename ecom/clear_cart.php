<?php
include("ecom_connection.php");
include('callableFunctions.php');
$user_id = $_GET["user_id"];

$user = getOne('users', $user_id);
if ($user != null) {
    $querry = $connection->prepare("delete from cart where user_id=$user_id");
    $querry->execute();
    echo("Cart cleared successfully");
} else {
    echo "Missed user";
}


