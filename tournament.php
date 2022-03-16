<?php
    
    class basketball_tournament{
        private $Teams;

        function __cunstruct($Teams){
            if(count($Teams)%2 != 0){
                echo 'NOOOOO';
            }
            else{
                $this->Teams = $Teams;
            }

        }

        function games(){
            for($i = 0; $x < count($this->Teams);$i++){
                
            }

            // foreach($this->Teams as $t => $team){

            // }
        }
    }


?>