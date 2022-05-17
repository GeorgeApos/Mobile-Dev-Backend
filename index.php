
<!DOCTYPE html>
<html>
<head>
<title>ΕΣΑΚΕ</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<body class="container bg-dark text-white fluid ">

<?php
    include "data_updater.php";
    // include 'mysql_handler.php';
    // $client = new MySQLHandler('localhost', 'root', 'Ur3*3$fasE234o4', 'esakedb', 3036);
    // $client->setConnection();
    // createDbFunction('esakedb',$client);
?>

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
                <p class="fs-3 fw-bold m-2">Player</p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="PlayerName">Name</span>
                                <input type="text" class="form-control" name="PlayerName" placeholder=<?php echo $playerNameErr;?>>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="PlayerPosition">Position</span>
                                <input type="text" class="form-control" name="PlayerPosition" placeholder=<?php echo $playerPositionErr;?>>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="PlayerPhoto">Photo</span>
                                <input type="file" class="form-control" name="PlayerPhotoInput" placeholder=<?php echo $playerPhotoErr;?>>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="PlayerTeam">Team</span>
                                <select class="form-select form-select-sm" name="PlayerTeam">
                                    <option selected><?php echo $playerTeamErr;?></option>
                                    <?php
                                        foreach($arrayOfTeams as $item){
                                            echo "<option value='strtolower($item)'>$item</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" name="submit_player" class="btn btn-secondary" value="Create"></input>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4 ">
                <p class="fs-3 fw-bold m-2">Team</p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="TeamName">Name</span>
                                <input type="text" class="form-control" name="TeamName"  placeholder=<?php echo $teamNameErr;?>>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="TeamCity">City</span>
                                <input type="text" class="form-control" name="TeamCity" placeholder=<?php echo $teamCityError;?>>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="TeamLogo">Logo</span>
                                <input type="file" class="form-control" name="TeamLogo" placeholder=<?php echo $teamLogoError;?>>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" name="submit_team" class="btn btn-secondary" value="Create"></input>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <p class="fs-3 fw-bold m-2">Trounament</p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="TournamentName">Name</span>
                                <input type="text" class="form-control" name="TournamentName" placeholder = <?php echo $tournamentNameErr;?>>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <span class="input-group-text text-white bg-dark border-0 w-25 bg-gradient" id="TournamentTeams">Teams</span>
                                <select class="form-select form-select-sm" name="TournamentTeams">
                                    <option selected><?php echo $tournamentTeamErr;?></option>
                                    <?php
                                        foreach($arrayOfTournaments as $item){
                                            echo "<option value='strtolower($item)'>$item</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" name="submit_tournamentr" class="btn btn-secondary" value="Create"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>



<!-- <button type="button" class="btn btn-secondary">Create</button> -->