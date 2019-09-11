<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$connection = new mysqli("localhost", "angular_user", "angular_password", "angular_practice") or die(mysqli_error());