<?php

    class MySQLHandler{
       private string $servername ;
       private string $username ;
       private string $password ;
       private string $database ;
       private int $port;
       private $connection ;

       function __construct($servername,$username,$password,$database,$port){
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
            $this->port = $port;
        }

        public function closeConnection(){
            $this->connection->close();
        }

        public function setConnection(){
            $connection = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
                }
            $this->connection = $connection;
        }

        public function createDatabase($db_name){
            $sql = "CREATE DATABASE $db_name";
            mysqli_query($this->connection,$sql);
        }

        public function createTables($query_file_name){
            $query = file_get_contents($query_file_name);
            if (mysqli_query($this->connection,$query) === TRUE) {
                return;
            }
        }

        public function insertIntoTeamTables($name,$city,$logo){
            $sql = "INSERT into teams values('" . $name . "','" . $city . "','" . $logo . "')";
            $this->setConnection();
            if (mysqli_query($this->connection,$sql) === TRUE) {
                return;
              } 
        }

        public function insertIntoPlayerTables($PlayerName,$PlayerPosition,$PlayerPhotoInput,$PlayerTeam){
            $sql = "INSERT into players values('" . $PlayerName . "','" . $PlayerPosition . "','" . $PlayerPhotoInput . "' ,'" . $PlayerTeam . "')";
            $this->setConnection();
            if (mysqli_query($this->connection,$sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $this->connection->error;
              }
        }

        public function insertIntoTournamentTables($name,$teams){
            $this->setConnection();
            foreach($teams as $team){
                $sql = "INSERT into tournaments values('" . $name . "','" . $team . "')";
                if (mysqli_query($this->connection,$sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $this->connection->error;
                }
            }
        }

        public function selectTeams(){
            $sql = 'SELECT name FROM teams';
            $this->setConnection();
            $result = mysqli_query($this->connection,$sql);
            $result_array = array();
            while ($row = mysqli_fetch_array($result)) { 
                array_push($result_array,$row['name']);
                
            }
            return $result_array;
        }
    }

?>