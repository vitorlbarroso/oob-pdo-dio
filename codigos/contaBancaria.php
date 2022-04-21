<?php
    /* Criando uma classe */
    class ContaBancaria
    {
        private $banco;
        private $nomeTitular;
        private $numeroAgencia;
        private $numeroConta;
        private $saldo;
        
        public function __construct($dados)
        {
            $this->banco = $dados['banco'];
            $this->nomeTitular = $dados['nomeTitular'];
            $this->numeroAgencia = $dados['numeroAgencia'];
            $this->numeroConta = $dados['numeroConta'];
            $this->saldo = $dados['saldo'];
        }
        
        public function pegarSaldo()
        {
            return $this->saldo;
        }
        
        public function depositarSaldo($valor)
        {
            $this->saldo += $valor;
            return $this->saldo;
        }
        
        public function sacarSaldo($valor)
        {
            $this->saldo -= $valor;
            return $this->saldo;
        }
    }
    
    /* Dados da conta bancária */
    $dados = [
        'banco' => 'Sicoob',
        'nomeTitular' => 'Vitor Barroso',
        'numeroAgencia' => 3001,
        'numeroConta' => 40028922,
        'saldo' => 1000
    ];
    
    /* Instanciando o objeto */
    $conta = new ContaBancaria($dados);
    var_dump($conta->depositarSaldo(1000));
    var_dump($conta->sacarSaldo(500));