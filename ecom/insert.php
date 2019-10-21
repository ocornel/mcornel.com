<html>
<head>
    <title>Insert into Products</title>
</head>
<body>
<h1>Insert into Products</h1>
<form action="#" method="post">
    Name: <br>
    <input type="text" name="name"> <br>
    Description: <br>
    <textarea name="description" id="" cols="30" rows="10"></textarea> <br>
    Category: <br>
    <input type="text" name="category"> <br>
    Photo URL: <br>
    <input type="text" name="photo_url"> <br>
    Price: <br>
    <input type="number" name="price" step=".01"> <br>
    <input type="submit" value="submit">
</form>
</body>
</html>

<?php
include("ecom_connection.php");
$statement = $connection->prepare("insert into products values(null ,?,?,?,?,?,CURRENT_TIMESTAMP , null )");
$category = create_category($_POST['category']);
$statement->bind_param('ssids', $_POST["name"], $_POST["description"], $category['id'], $_POST["price"], $_POST["photo_url"]);
//$statement->bind_param('ssss', $_POST["mobile"], $_POST["name"], $_POST["password"], $_POST["address"]);
$statement->execute();


function create_category($name)
{
    $connection = $GLOBALS['connection'];
    $check = $connection->prepare("select * from categories where name=?");
    $check->bind_param('s', $name);
    $check->execute();
    $check_results = $check->get_result();
    if ($check_results->num_rows == 0) {
        $insert = $connection->prepare("insert into categories values(null ,?,null, null )");
        $insert->bind_param('s', $name);
        $insert->execute();
        $row = create_category($name);
    } else {
        $row = $check_results->fetch_assoc();
    }
    return $row;
}

?>