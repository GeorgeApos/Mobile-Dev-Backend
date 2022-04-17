<?php

    class MySQLHandler{
       private string $servername ;
       private string $username ;
       private string $password ;
       private int $port;
       private string $database ;
       private $connection ;

       function __construct($servername,$username,$password,$port){
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->port = $port;
            $this->setConnection();
        }

        function setConnection(){
            $connection = mysqli_connect($this->servername,$this->username,$this->password);
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
                }
            echo "Connected successfully";
            $this->connection = $connection;
        }

        function setDatabase($database){
            $this->database = $database;
        }

        function closeConnection(){
            $this->connection->close();
        }

        function createDatabase($db_name){
            $sql = "CREATE DATABASE $db_name";
            if ($this->connection->query($sql) === TRUE) {
                echo "Database created successfully";
            } else {
                echo "Error creating database: " . $this->connection->error;
            }
        }
    }
    
    

    $conn = new mysqli($servername, $username, $password);

    

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