<?php
    
    $data = new DateTime();
    $zone = new DateTimeZone('America/Sao_Paulo');
    $interval = new DateInterval('P5DT10H50M');
    $data->setTimezone($zone);
    print_r($data) . PHP_EOL;
    $data->sub($interval);
    print_r($data) . PHP_EOL;