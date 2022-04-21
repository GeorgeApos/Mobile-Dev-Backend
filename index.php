
<!DOCTYPE html>
<html>
<head>
<title>ΕΣΑΚΕ</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body class="container bg-dark text-white fluid ">
    <div class="container my-4 ms-0 me-0 ps-0 pe-0">
        <div class="card bg-dark text-white ">
            <img src="bg2.jpg" class="card-img " alt="No image found" >
            <div class="card-img-overlay ">
                <h3 class="card-title text-sm-center text-md-center text-lg-center text-xl-center text-wrap py-2">ΕΣΑΚΕ</h5>
                <h4 class="card-text text-sm-center text-md-center text-lg-center text-xl-center text-wrap pt-4 ">Your basketball manager service</h4>
            </div>
        </div>
        <span class="d-block bg-dark bg-gradient text-wrap p-4">
            <h4>Create or select a tournament to begin</h4>
        </span>
        <div class="row">
            <div class="col-6 text-center">
                <button type="button" class="btn btn-secondary">Create</button>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-secondary">Create</button>
            </div>
        </div>
    </div>
    

</body>

<?php
    include 'mysql_handler.php';
    $client = new MySQLHandler('localhost', 'root', 'Ur3*3$fasE234o4', 'esakedb', 3036);
    $client->setConnection();
    // createDbFunction('esakedb',$client);
?>