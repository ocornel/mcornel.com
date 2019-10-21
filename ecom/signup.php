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
    echo 1;
}
else {
    echo 0;
}
