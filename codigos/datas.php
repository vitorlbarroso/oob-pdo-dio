<?php
    /* echo date('d/m/Y') . PHP_EOL; */
    
    $data = new DateTime();
    
    $interval = new DateInterval('P10YT10H');
    
    $data->add($interval);
    
    print_r($data);