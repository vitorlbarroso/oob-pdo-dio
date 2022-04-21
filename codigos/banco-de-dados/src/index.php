<?php

    require 'produto.php';
    $produto = new Produto();
    
    $list = $produto->list();
    //$list = $produto->insert('Essa é a minha descrição via OOP');
    //$list = $produto->update(1, 'Testando OOP');
    $list = $produto->delete(5);
    
    print_r($list);