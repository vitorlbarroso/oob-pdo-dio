<?php
    
    $pdo = null;
    
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=aula_bd_dio','root','');
    }catch(Exception $e){
        echo $e->getMessage();
        die();
    }

    return $pdo;