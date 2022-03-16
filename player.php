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
    }
?>