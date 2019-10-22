<?php
include('ecom_connection.php');
$table = $_GET['table'];
include('getAllFunc.php');
echo(json_encode(getAll($table)));
