<?php 
    class basketball_player{
        private $Name;
        private $Position;
        private $Team;
        private $Photo;

        function __cunstruct($Name,$Position,$Team,$Photo){
            $this->Name = $Name;
            $this->Position = $Position;
            $this->Team = $Team;
            $this->Photo = $Photo;

        }

        function getName(){
            return $this->Name;
        }

        function getPosition(){
            return $this->Position;
        }

        function getTeam(){
            return $this->Team;
        }

        function getPhoto(){
            return $this->Photo;
        }

        function setName($Name){
            $this->Name = $Name;
        }

        function setPosition($Position){
            $this->Position = $Position;
        }

        function setTeam($Team){
            $this->Team = $Team;
        }

        function setPhoto($Photo){
            $this->Photo = $Photo;
        }
    }
?>