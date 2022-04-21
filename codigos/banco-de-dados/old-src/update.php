<?php

    $pdo = require 'connect.php';
    $sql = 'UPDATE produtos SET `description` = ? WHERE id = ?';
    
    $prepare = $pdo->prepare($sql);
    $prepare->bindParam(1, $_GET['description']);
    $prepare->bindParam(2, $_GET['id']);
    $prepare->execute();
    
    echo $prepare->rowCount();