<?php
include('ecom_connection.php');
include('getAllFunc.php');
$categories = getAll('categories');
$result = [];
$i = 0;
foreach ($categories as $category) {
    array_push($result, $category);
    $category_id = $category['id'];
    $products = CategoryProducts($category_id);
    $result[$i]['products'] = $products;
    $i++;
}
echo(json_encode($result));

function CategoryProducts($category_id) {
    $connection = $GLOBALS['connection'];
    $statement = $connection->prepare("select * from  products where category_id=$category_id");                                                    # prepare the connection to receive 4 values
    $statement->execute();
    $result = $statement->get_result();
    $rows = [];
    while ($row=$result->fetch_assoc()) {
        array_push($rows, $row);
    }
    return($rows);
}
