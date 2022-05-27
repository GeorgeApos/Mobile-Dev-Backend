<?php
    // TO-DO: Create a class that contains lists of data for players, teams and tournaments and handles them while also updating tables in html
    include 'mysql_handler.php';
    include 'player.php';
    include 'team.php';
    include 'tournament.php';

    session_start();

    $client = $_SESSION["client"];
    $arrayOfTeams = $client->selectTeams();

    $requiredTeamData = array('TeamName', 'TeamCity', 'TeamLogo');
    $teamNameErr = "";
    $teamCityError = "";
    $teamLogoError = "";

    $requiredPlayerData = array('PlayerName', 'PlayerPosition', 'PlayerPhotoInput', 'PlayerTeam');
    $playerNameErr = "";
    $playerPositionErr = "";
    $playerPhotoErr= "";
    $playerTeamErr = 'Select';

    $requiredTournamentData = array('TournamentName', 'TournamentTeams');
    $tournamentNameErr = "";
    $tournamentTeamErr = 'Select';

    function check_required_data($requiredDataFields){
        foreach($requiredDataFields as $field){
            if(empty($_POST[$field])){
                return true;
            }
        }
        return false;
    }

    if (isset($_POST['submit_team'])) {
        if(check_required_data($requiredTeamData)){
            $teamNameErr = 'Required';
            $teamCityError = 'Required';
            $teamLogoError = 'Required';
        }else{
            $client->insertIntoTeamTables($_POST['TeamName'], $_POST['TeamCity'], $_POST['TeamLogo']);
        }
    }
    if (isset($_POST['submit_player'])) {
        if(check_required_data($requiredPlayerData)){
            echo $_POST['PlayerTeam'];
            $playerNameErr = 'Required';
            $playerPositionErr = 'Required';
            $playerPhotoErr = 'Required';
            $playerTeamErr = 'Required';
        }else{
            $client->insertIntoPlayerTables($_POST['PlayerName'], $_POST['PlayerPosition'], $_POST['PlayerPhotoInput'], $_POST['PlayerTeam']);
        }
    }
    if (isset($_POST['submit_tournament'])) {
        if(check_required_data($requiredTournamentData)){
            $tournamentNameErr = 'Required';
            $tournamentTeamErr = 'Required';
        }else{
            if(count($_POST['TournamentTeams']) % 2 == 0){
                $client->insertIntoTournamentTables($_POST['TournamentName'], $_POST['TournamentTeams']);
            }else {
                $tournamentTeamErr = 'Even amount needed';
            }
            
        }
    }
?>