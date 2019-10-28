<?php
include("ecom_connection.php");
$check = $connection->prepare("select * from users where mobile=?");
$check->bind_param('s', $_POST["mobile"]);
$check->execute();
$check_results=$check->get_result();
if($check_results->num_rows == 0) {
    $insert = $connection->prepare("insert into users values(null ,?,?,?,?)");
    $insert->bind_param('ssss', $_POST["mobile"], $_POST["name"], $_POST["password"], $_POST["address"]);
    $insert->execute();

//    login
    $check = $connection->prepare("select * from users where mobile=? and password=?");
    $check->bind_param('ss', $_POST["mobile"], $_POST["password"]);
    $check->execute();
    $check_results=$check->get_result();
    $user = $check_results->fetch_assoc();
    echo json_encode($user);
}
else {
    echo 0;
}
