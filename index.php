
<!DOCTYPE html>
<html>
<head>
<title>ΕΣΑΚΕ</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<body class="container bg-dark text-white fluid ">
    <div class="container my-4 ms-0 me-0 ps-0 pe-0">
        <div class="card bg-dark text-white ">
            <!-- NOTE: In order to change layout for the photo, css must be implemented -->
            <img src="bg2.jpg" class="card-img " alt="No image found" >
            <div class="card-img-overlay ">
                <h3 class="card-title text-sm-center text-md-center text-lg-center text-xl-center text-wrap py-2">ΕΣΑΚΕ</h5>
                <h4 class="card-text text-sm-center text-md-center text-lg-center text-xl-center text-wrap pt-4 ">Your basketball manager service</h4>
            </div>
        </div>
        <span class="d-block bg-dark bg-gradient text-wrap text-center p-4">
            <h4>Create teams, players and tournments and save settings</h4>
        </span>
        <div class="row">            
            <div class="col-4 ">
                <p class="fs-3 fw-bold m-2">Players</p>
                <div class="row">
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="PlayerName">Name</span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="PlayerPosition">Position</span>
                            <input type="text" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="PlayerPhoto">Photo</span>
                            <input type="file" class="form-control" id="PlayerPhotoInput">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="PlayerTeam">Team</span>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-secondary">Create</button>
                    </div>
                </div>
            </div>
            <div class="col-4 ">
                <p class="fs-3 fw-bold m-2">Teams</p>
                <div class="row">
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="TeamName">Name</span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="TeamCity">City</span>
                            <input type="text" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="TeamLogo">Logo</span>
                            <input type="file" class="form-control" id="Logo">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-secondary">Create</button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <p class="fs-3 fw-bold m-2">Trounaments</p>
                <div class="row">
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="TrounamentName">Name</span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="TrounamentTeams">Teeams</span>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Checked checkbox
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-secondary">Create</button>
                    </div>
                </div>
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

<!-- <button type="button" class="btn btn-secondary">Create</button> -->