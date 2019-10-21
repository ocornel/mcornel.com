
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
    Photo URL: <br>
    <input type="text" name="photo_url"> <br>
    Price: <br>
    <input type="number" name="price" step=".01"> <br>
    <input type="submit" value="submit">
</form>
</body>
</html>

<?php
$connection = new mysqli("localhost", "angular_user", "angular_password", "angular_practice") or die(mysqli_error());
$statement = $connection->prepare("insert into products values(null ,?,?,?,?,CURRENT_TIMESTAMP , null )");
$statement->bind_param('ssss', $_POST["mobile"], $_POST["name"], $_POST["password"], $_POST["address"]);
$statement->execute();
?>