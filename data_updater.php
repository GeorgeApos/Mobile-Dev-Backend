<?php
    // TO-DO: Create a class that contains lists of data for players, teams and tournaments and handles them while also updating tables in html
    include 'mysql_handler.php';
    include 'player.php';
    include 'team.php';
    include 'tournament.php';

    $requiredTeamData = array('TeamName', 'TeamCity', 'TeamLogo');
    $requiredPlayerData = array('PlayerName', 'PlayerPosition', 'PlayerPhotoInput', 'PlayerTeam');
    $requiredTournamentData = array('TournamentName', 'TournamentTeams');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errorTeamData = false;
        $errorPlayerData = false;
        $errorTournamentData = false;
        foreach($requiredTeamData as $field){
            if(empty($_POST[$field])){
                $errorTeamData = true;
                break;
            }
        }
        foreach($requiredPlayerData as $field){
            if(empty($_POST[$field])){
                $errorPlayerData = true;
                break;
            }
        }
        foreach($requiredTournamentData as $field){
            if(empty($_POST[$field])){
                $errorTournamentData = true;
                break;
            }
        }
        if($errorPlayerData){
            if(!($errorTeamData and $errorTournamentData)){
                $playerNameErr = $playerPositionErr = $playerPhotoErr= "";
                $playerTeamErr = 'Select';
            }else{
                $playerNameErr = $playerPositionErr = $playerPhotoErr= $playerTeamErr = "Required";
            }
        }

        if($errorTeamData){
            if(!($errorPlayerData and $errorTournamentData)){
                $teamNameErr = $teamCityError = $teamLogoError = "";
            }else{
                $teamNameErr = $teamCityError = $teamLogoError = "Required";
            }
            
        }
        if($errorTournamentData){
            if(!($errorPlayerData and $errorTeamData)){
                $tournamentNameErr = "";
                $tournamentTeamErr = 'Select';
            }else{
                $tournamentNameErr = $tournamentTeamErr = "Required";
            }
            
        }
    }

    if(isset($_POST['submit_team'])){
        static $arrayOfTeams = array();

        $name = $_POST['TeamName'];
        $city = $_POST['TeamCity'];
        $logo = $_POST['TeamLogo'];

        createTeam($arrayOfTeams, $name, $city, $logo);
        
    }
    function createTeam($arrayOfTeams, $Name, $City, $Logo){
        $team = new basketball_team($Name, $City, $Logo);

        array_push($arrayOfTeams, $team);

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
    
?>