<?php

    class Airport {
        
        public function link_plane($plane) {
            if ($plane->getStatus() == 'В воздухе') {
                $plane->setAirStatus('Приготовиться к посадке');
            } else {
                echo 'Самолет не готов к посадке';
            }
        }

        public function take_plane($plane) {
            if ($plane->getAirStatus() == 'Приготовиться к посадке') {
                $plane->setAirStatus('Принять самолет');
                $plane->landing();
            } else {
                echo 'Самолет не возможно принять';
            }
        }

        public function parking_plane($plane) {
            if ($plane->getAirStatus() == 'Принять самолет') {
                $plane->setAirStatus('Самолет ушел на стоянку');
            } else {
                echo 'Самолет не принят';
            }
        }

        public function refuel_plane($plane) {
            if ($plane->getAirStatus() == 'Самолет ушел на стоянку') {
                $plane->setAirStatus('Дозаправка');
            }
        }

        public function readines_plane($plane) {
            if ($plane->getAirStatus() == 'Дозаправка') {
                $plane->setAirStatus('Самолет готов взлетать');
            }
        }

        public function takeoff_plane($plane) {
            if ($plane->getAirStatus() == 'Самолет готов взлетать') {
                $plane->setAirStatus('Самолет освободил место и улетел');
                $plane->ascent();
            }
        }
    }

?>