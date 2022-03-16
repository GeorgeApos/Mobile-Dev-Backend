<?php

$servername = "localhost:3306";
$username = "username";
$password = "password";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "DB Created";
}else {
    echo "Error creating DB: " . $conn->error;
}

$query = file_get_contents('tables.sql');

if ($conn->query($query) === TRUE) {
    echo "all tables created successfully <br/>";
} else {
    echo "Error creating tables: " . $conn->error;
}

$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

</body>
</html>