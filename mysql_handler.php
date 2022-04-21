<?php

    function createDbFunction($db_name, $handler){
        if (!defined('FOO_EXECUTED')) {
            $handler->createDatabase($db_name);
            $handler->setDatabase($db_name);
            define('FOO_EXECUTED', true);
        }
    }

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

        function closeConnection(){
            $this->connection->close();
        }

        function setConnection(){
            $connection = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
                }
            $this->connection = $connection;
        }

        function createDatabase($db_name){
            $sql = "CREATE DATABASE $db_name";
            mysqli_query($this->connection,$sql);
        }

        function createTables($selectQuery){
            $query = file_get_contents('tables.sql');
            if (mysqli_query($this->connection,$query) === TRUE) {
                echo "all tables created successfully <br/>";
            } else {
                echo "Error creating tables: " . $this->connection->error;
            }
        }
    }

?>