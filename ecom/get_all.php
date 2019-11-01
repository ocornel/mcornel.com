<?php
include('ecom_connection.php');
$table = $_GET['table'];
include('callableFunctions.php');
echo(json_encode(getAll($table)));
