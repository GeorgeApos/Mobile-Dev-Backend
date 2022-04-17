
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
    <?php
        include 'mysql_handler.php';
        $client = new MySQLHandler('localhost','root','',3036);
        $client->setConnection();
    ?>

    <h1>This is a Heading</h1>
    <p>This is a paragraph.</p>

</body>
</html>