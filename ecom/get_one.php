<?php
include("ecom_connection.php");
$table = $_GET['table'];
$id = $_GET['id'];
include('callableFunctions.php');
echo(json_encode(getOne($table, $id)));