<?php

    abstract class Plane {
        private $name;
        private $max_speed;
        private $status = 'В воздухе';
        private $airport_status;

        function __construct($name, $max_speed) {
            $this->name = $name;
            $this->max_speed = $max_speed;
        }

        public function ascent() {
            $this->status = 'В воздухе';
        }

        public function landing() {
            $this->status = 'На земле';
        }

        
        public function getName() {
            echo $this->name;
        }

        public function getStatus() {
            return $this->status;
        }

        public function getAirStatus() {
            return $this->airport_status;
        }
        
        public function setAirStatus($new) {
            $this->airport_status = $new;
        }
    }




?>