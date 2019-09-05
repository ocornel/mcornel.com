<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$connection = new mysqli("localhost", "saspacity_user", "saspacity_password", "saspacity");

$query_result = $connection->query("SELECT * FROM salons");
$rows = [];
while ($r = mysqli_fetch_assoc($query_result)) {
    $rows[] = $r;
}
echo json_encode($rows);