<?php

    $pdo = require 'connect.php';
    $sql = 'SELECT * FROM produtos';
    
    echo '<h3>Produtos: </h3>';
    
    foreach($pdo->query($sql) as $k => $v){
        echo 'ID: ' . $v['id'] . '<br> Descrição: ' . $v['description'] . '<hr>';
    }