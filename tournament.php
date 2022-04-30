<?php
    
    class basketball_tournament{
        private $Teams;
        private string $Name;

        function __cunstruct($Teams, $Name){
            if(count($Teams)%2 != 0){
                echo 'NOOOOO';
            }
            else{
                $this->Teams = $Teams;
                $this->Name = $Name;
            }

        }

        function games(){
            for($i = 0; $i < count($this->Teams);$i++){
                
            }

            // foreach($this->Teams as $t => $team){

            // }
        }

        function get_Team(){
            return $this->Team;
        }

        function set_Team($Team){
            $this->Team = $Team; 
        }
    }


?>