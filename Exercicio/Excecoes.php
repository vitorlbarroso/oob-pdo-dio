<?php

    function divisao(int $n1, int $n2){
        if($n1 == 0 || $n2 == 0){
            throw new Exception('Não é possível dividir por zero');
        }else{
            return ($n1 / $n2);
        }
    }
    
    (int)$n1 = 10;
    (int)$n2 = 2;
    
    try{
        $divisao = divisao($n1, $n2);
    }catch(Exception $e){
        echo $e->getMessage();
    }finally{
        echo 'Resultado da operação: ' . $divisao;
        die();
    }