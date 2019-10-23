<?php
include("ecom_connection.php");
include('getOneFunc.php');
$product_id = $_POST["product_id"];
$user_id = $_POST["user_id"];

$product = getOne("products", $product_id);
$user = getOne('users', $user_id);
if ($user != null and $product != null) {
    $quantity = $_POST["quantity"];
    $product_price = $product['price'];
    $cost = $product_price * $quantity;
    $p_name = $product['name'];
    $check = $connection->prepare("select * from cart where user_id=? and product_id=?");
    $check->bind_param('ii', $user_id, $product_id);
    $check->execute();
    $check_results = $check->get_result();
    if ($check_results->num_rows == 0) {
//        $insert = $connection->prepare("insert into cart ('user_id', 'product_id' ,'quantity', 'cost') values(?,?,?,?)");
        $insert = $connection->prepare("insert into cart values(null, ?,?,?,?)");
        $insert->bind_param('iiid', $user_id, $product_id, $quantity, $cost);
        $insert->execute();
        echo "$quantity $p_name added to cart";
    } else {
        $cart_item = $check_results->fetch_assoc();
        $new_quantity = $quantity + $cart_item['quantity'];
        $new_cost = $cost + $cart_item['cost'];
        $c_id = $cart_item['id'];
        $update_quantity = $connection->prepare("UPDATE `cart` SET `quantity` = $new_quantity, `cost` = $new_cost WHERE `cart`.`id` = $c_id");
        $update_quantity->execute();
        echo "$quantity $p_name added to cart. You now have $new_quantity of them";
    }
} else {
    echo "Missed user or product";
}

