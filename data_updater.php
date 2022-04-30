<?php
    // TO-DO: Create a class that contains lists of data for players, teams and tournaments and handles them while also updating tables in html
    include 'mysql_handler.php';
    if(isset($_POST['submit_team'])){
        static $arrayOfTeams = array();

        $name = $_POST['TeamName'];
        $city = $_POST['TeamCity'];
        $logo = $_POST['TeamLogo'];

        createTeam($arrayOfTeams, $Name, $City, $Logo);

        function createTeam($arrayOfTeams, $Name, $City, $Logo){
            $team = new basketball_team($Name, $City, $Logo);
    
            array_push($arrayOfTeams, $team);
    
        }
    }
    if(isset($_POST['submit_player'])){
        static $arrayOfPlayers = array();

        $name = $_POST['PlayerName'];
        $position = $_POST['PlayerPosition'];
        $team = $_POST['PlayerTeam'];
        $photo = $_POST['PlayerPhotoInput'];

        createPlayer($arrayOfPlayers, $name, $position, $team, $photo);
    }

    function createPlayer($arrayOfPlayers, $Name, $Position, $Team, $Logo){
        $player = new basketball_player($Name, $Position, $Team, $Logo);

        array_push($arrayOfPlayers, $player);      
    }

    if(isset($_POST['submit_tournament'])){
        static $arrayOfTournaments = array();

        $name = $_POST['TrounamentName'];
        $team = $_POST['TrounamentTeams'];

        createTournament($arrayOfTournaments, $team, $name);
    }

    function createTournament($arrayOfTournaments, $Teams, $Name){
        $tournament = new basketball_tournament($Teams, $Name);

        array_push($arrayOfTournaments, $tournament);

    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["TeamName"])) {
            $nameErr = "Name is required";
        } else {
          
        }
        
        if (empty($_POST["TeamCity"])) {
            $cityError = "City is required";
        } else {
          
        }
          
        if (empty($_POST["TeamLogo"])) {
            $logoError = "Logo is required";
        } else {
          
        }
      
      }
?>