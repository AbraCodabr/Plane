<?php
    require_once('plane.php');

    class Mig extends Plane {
        
        public function Attack() {

            if ($this->getStatus() == 'В воздухе') {
                echo 'Атака';
            }
        }
    }
?>