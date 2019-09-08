<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$connection = new mysqli("localhost", "saspacity_user", "saspacity_password", "saspacity");

$query_result = $connection->query("SELECT * FROM salons");
$rows = [];
while ($row = mysqli_fetch_assoc($query_result)) {
    $rows[] = $row;
}
echo json_encode($rows);