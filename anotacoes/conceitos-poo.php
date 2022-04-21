<?php
/* 

        - O que é Programação Orientada a Objetos?
            A orientação a objetos é um paradigma de programação, assim como o procedural, mas que utiliza-se de classes pensadas como se fossem da vida real para estruturar o código.
            
        - O que é uma classe?
            É a representação de um objeto.
            . Sintaxe:
                class NomeDaClasse{}
                
        - O que é um objeto?
            É uma instância dessa classe
            . Sintaxe:
                $conta = new NomeDaClasse();

        - O que é uma propriedade/atributo?
            São todos os dados que aquela classe possui
            
        - O que é um modificador de acesso/visibilidade?
            É a definição de uma permissão de acesso para aquele dado da classe
            . Modificadores:
                public - Publico: Eles podem ser acessados de qualquer lugar;
                private - Privado: Ele não pode ser acessado além da classe;
                protected - Protegido: Pode ser acessado na classe e em heranças;
                
        - O que são métodos?
            São as funções da classe
            . Método construtor:
                Sempre é executado automaticamente quando a classe é instanciada;
                Sintaxe:
                    public function __construct(){}
                    
        - Como acessar um atributo/método de dentro da própria classe?
            Utiliza-se o $this->
            
        - Quais os tipos de tipagem:
            Fazer checagem de tipos:
                declare(strict_types = 1); - Retorna erro se houver uma tipagem incorreta.
            Como definir:
                / ** 
                    *  @var tipagem
                * /
            Tipagems:
                

*/