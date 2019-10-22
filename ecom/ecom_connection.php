<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$connection = new mysqli('localhost', 'ecom_android_user', 'ecom_android_password', 'ecom_android') or die(mysqli_error());
