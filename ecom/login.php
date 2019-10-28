<?php
include("ecom_connection.php");
$check = $connection->prepare("select * from users where mobile=? and password=?");
$check->bind_param('ss', $_POST["mobile"], $_POST["password"]);
$check->execute();
$check_results=$check->get_result();
if($check_results->num_rows == 0) {
    echo json_encode(0);
}
else {
    $user = $check_results->fetch_assoc();
    echo json_encode($user);
}
