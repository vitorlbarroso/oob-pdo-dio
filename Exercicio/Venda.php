<?php
    class Venda
    {
        /** 
         *  @var string
        */
        private $data;
        
        /** 
         *  @var string
        */
        private $produto;
        
        /** 
         *  @var int
        */
        private $quantidade;
        
        /** 
         *  @var float
        */
        private $valorUnidade;
        
        /** 
            *  @var float
        */
        private $valorTotal;
        
        public function __construct($dadosVenda)
        {
            $this->data = $dadosVenda['data'];
            $this->produto = $dadosVenda['produto'];
            $this->quantidade = $dadosVenda['quantidade'];
            $this->valorUnidade = $dadosVenda['valorUnidade'];
            $this->valorTotal = $dadosVenda['valorUnidade'] * $dadosVenda['quantidade'];
        }
        
        public function dadosCompra(){
            return [
                'Data: ' => $this->data,
                'Produto: ' => $this->produto,
                'Quantidade: ' => $this->quantidade,
                'Valor unitário: ' => $this->valorUnidade,
                'Valor total: ' => $this->valorTotal
            ];
        }
    }
    
    $dadosVenda = [
        'data' => date('d-m-Y'),
        'produto' => 'Camisa do Flamengo',
        'quantidade' => 2,
        'valorUnidade' => 199.90,
    ];
    
    $venda = new Venda($dadosVenda);
    print_r($venda->dadosCompra());