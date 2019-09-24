<?php

$connection = new mysqli("localhost", "angular_user", "angular_password", "angular_practice") or die(mysqli_error());
$data = $_POST['data'];
$sample = mysqli_fetch_assoc($connection->query("SELECT * FROM `sample_data` WHERE name='$data'"));
if ($sample) {
//    increment the requests for this sample data
    $requests = $sample['requests'];
    $requests++;
    $id = $sample['id'];
    $connection->query("UPDATE `sample_data` SET `requests` = '$requests' WHERE id = $id");

    echo $sample['content'];
} else {
    echo "Sample data coming soon.";
}
?>