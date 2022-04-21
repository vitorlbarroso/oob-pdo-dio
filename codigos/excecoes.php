<?php
    
    function validarUsuario(array $usuario){
        if(empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])){
            throw new Exception("Campos obrigatórios não preenchidos!");
        }else{
            return true;
        }
    }
    
    $usuario = [
        'codigo' => 1,
        'nome' => 'Vitor',
        'idade' => 17
    ];
    
    try{
        $status = validarUsuario($usuario);
    }catch(Exception $e){
        echo $e->getMessage();
    }finally{
        echo 'Status da requisição: ' . (int)$status;
    }
    