<?php

include 'mysql_handler.php';
    if(isset($_POST['submit_user'])){
        static $arrayOfUsers = array();

        $name = $_POST['name'];
        $isAdmin = $_POST['isadmin']

        createPlayer($arrayOfUsers, $name, $isadmin);
    }

class user{
    private $name;
    private boolean $isAdmin;

    function __cunstruct($name, $isAdmin){
            $this->name = $name;
            $this->isAdmin = $isAdmin;
    }

    function get_Name(){
        return $this->name;
    }

    function set_Name($name){
        $this->name = $name; 
    }

    function get_isAdmin(){
        return $this->isAdmin;
    }

    function set_isAdmin($isAdmin){
        $this->namisAdmin = $isAdmin; 
    }
}


?>