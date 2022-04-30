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

        function get_city(){
            return $this->City;
        }

        function get_logo(){
            return $this->Logo;
        }

        function set_name($Name){
            $this->Name = $Name;
        }

        function set_city($City){
            $this->City = $City;
        }

        function set_logo($Logo){
            $this->Logo = $Logo;
        }
    }
?>