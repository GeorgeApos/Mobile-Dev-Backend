<?php 
    class basketball_team{
        private $Name;
        private $City;
        private $Logo;

        function __construct($Name, $City, $Logo){
            $this->Name = $Name;
            $this->City = $City;
            $this->Logo = $Logo;
        }
        
        function get_name(){
            return $this->Name;
        }
    }
?>