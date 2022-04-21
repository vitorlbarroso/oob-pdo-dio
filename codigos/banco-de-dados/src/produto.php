<?php

    declare(strict_types = 1);
    
    class Produto
    {
        private $conexao;
        
        public function __construct()
        {
            try{
                $this->conexao = new PDO('mysql:host=localhost;dbname=aula_bd_dio','root','');
            }catch(Exception $e){
                echo $e->getMessage();
                die();
            }
        }
        
        public function list(): array
        {
            $sql = 'SELECT * FROM produtos';
    
            $produtos = [];
            
            foreach($this->conexao->query($sql) as $k => $v){
                array_push($produtos, $v);
            }
            
            return $produtos;
        }
        
        public function insert(string $description): int
        {
            $sql = 'INSERT INTO produtos(`description`) VALUES (?)';
    
            $prepare = $this->conexao->prepare($sql);
            $prepare->bindParam(1, $description);
            $prepare->execute();
            
            return $prepare->rowCount();
        }
        
        public function update(int $id, string $new_description): int
        {
            $sql = 'UPDATE produtos SET `description` = ? WHERE id = ?';
    
            $prepare = $this->conexao->prepare($sql);
            $prepare->bindParam(1, $new_description);
            $prepare->bindParam(2, $id);
            $prepare->execute();
            
            return $prepare->rowCount();
        }
        
        public function delete(int $id): int
        {
            $sql = 'DELETE FROM produtos WHERE id = ?';
    
            $prepare = $this->conexao->prepare($sql);
            $prepare->bindParam(1, $id);
            $prepare->execute();
            
            return $prepare->rowCount();
        }
    }