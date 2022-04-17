
<!DOCTYPE html>
<html>
<head>
<title>ΕΣΑΚΕ</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron text-center">
        <h1>ΕΣΑΚΕ</h1>
        <p>Basketball management service</p>
    </div>
    <?php
        include 'mysql_handler.php';
        $client = new MySQLHandler('localhost', 'root', '', 3036);
        $client->setConnection();
    ?>
    <div class="container">
        <div class="row no-gutters">
        <div class="col-sm-4">
                <h5> ΔΗΜΙΟΥΡΓΙΑ ΟΜΑΔΑΣ </h5>
                <br>
                <form method="post" action="team.php">
                    Name: <input type="text" name="Name"><br>
                    City: <input type="text" name="City"><br>
                    Logo: <input type="file" name="Logo" id="picture" /><br>
                    <button type="submit" name="submit_team">Add team</button>
                </form>
            </div>
            <div class="col-sm-4">
                <h5> ΔΗΜΙΟΥΡΓΙΑ ΤΟΥΡΝΟΥΑ </h5>
                <br>
                <form action="tournament.php" method="post">
                    Name: <input type="text" name="Name"><br>
                    Team: <input type="text" name="Team"><br>
                    <button type="submit" name="submit_tournament">Add tournament</button>
                </form>
            </div>
            <div class="col-sm-4">
                <h5> ΔΗΜΙΟΥΡΓΙΑ ΠΑΙΚΤΗ </h5>
                <br>
                <form action="player.php" method="post">
                    Name: <input type="text" name="name"><br>
                    Position: <input type="text" name="position"><br>
                    Team: <input type="text" name="team"><br>
                    Photo: <input type="file" name="picture" id="picture" /><br>
                    <button type="submit" name="submit_player">Add player</button>
                </form>
            </div>
        </div>
    </div>
</body>

