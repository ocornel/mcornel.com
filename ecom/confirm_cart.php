<?php
include("ecom_connection.php");
include('callableFunctions.php');
$user_id = $_GET["user_id"];

$user = getOne('users', $user_id);
if ($user != null) {
    $q_cart_items = $connection->prepare("SELECT * from cart where user_id=$user_id");
    $q_cart_items->execute();
    $result = $q_cart_items->get_result();

    if ($result->num_rows > 0) {
        $ref = generateUniqueRefNumber(5, "u");

//        create a billing
        $insert_billing = $connection->prepare("insert into billing values(null ,?,$user_id,CURRENT_TIMESTAMP)");
        $insert_billing->bind_param('s', $ref);
        $insert_billing->execute();

        while ($row = $result->fetch_assoc()) {
            // create a billing detail
            $row_id = $row['id'];
            echo "Cart Item $row_id";
            $product_id = $row['product_id'];
            $quantity = $row['quantity'];
            $cost = $row['cost'];
            $insert_details = $connection->prepare("insert into bill_details values(null, ?,?,?,?,?)");
            $insert_details->bind_param('siiid', $ref,$product_id,$quantity,$user_id,$cost);
            $insert_details->execute();
        }
        echo "The billing reference number is $ref";

    } else {
        echo "No items in cart to confirm.";
    }

    // delete the cart items
    $querry = $connection->prepare("delete from cart where user_id=$user_id");
    $querry->execute();

} else {
    echo "Missed user";
}

function generateUniqueRefNumber($len, $case)
{
    $ref = generateRef($len, $case);
    $connection = $GLOBALS['connection'];

    $check = $connection->prepare("select * from billing where ref=?");
    $check->bind_param('s', $ref);
    $check->execute();
    $check_results = $check->get_result();
    if ($check_results->num_rows != 0) {
        generateUniqueRefNumber($len, $case);
    }
    return $ref;
}