<?php

    require_once('mig.php');
    require_once('tu_154.php');
    require_once('airport.php');

    $mig = new Mig('Mig', 280);
    $tu_154 = new Tu_154('Tu_154', 300);
    $airport = new Airport();

    $airport->link_plane($mig); // Запрос на посадку

    $airport->take_plane($mig); // Принятие самолета

    $airport->parking_plane($mig); // Статус - Стоянка
    
    $airport->refuel_plane($mig); // Статус - Дозаправка

    $airport->readines_plane($mig); // Запрос на взлет 

    $airport->takeoff_plane($mig); // Статус - Взлет

?>