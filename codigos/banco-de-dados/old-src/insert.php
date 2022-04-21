<?php

    $pdo = require 'connect.php';
    $sql = 'INSERT INTO produtos(`description`) VALUES (?)';
    
    $prepare = $pdo->prepare($sql);
    $prepare->bindParam(1, $_GET['description']);
    $prepare->execute();
    
    echo $prepare->rowCount();