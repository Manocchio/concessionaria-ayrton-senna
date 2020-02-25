<?php

    class Alocacao{

        private $idLocacao;
        private $cliente;
        private $veiculo;
        private $dataInicial;
        private $dataFinal;
        private $valorTotal;
        private $usuario;


        
        public function getIdLocacao()
        {
                return $this->idLocacao;
        }

       
        public function setIdLocacao($idLocacao)
        {
                $this->idLocacao = $idLocacao;

              
        }

     
        public function getCliente()
        {
                return $this->cliente;
        }

        
        public function setCliente($cliente)
        {
                $this->cliente = $cliente;

        }

      
        public function getVeiculo()
        {
                return $this->veiculo;
        }

       
        public function setVeiculo($veiculo)
        {
                $this->veiculo = $veiculo;


        }

      
        public function getDataInicial()
        {
                return $this->dataInicial;
        }

      
        public function setDataInicial($dataInicial)
        {
                $this->dataInicial = $dataInicial;
             
        }

        public function getDataFinal()
        {
                return $this->dataFinal;
        }

        public function setDataFinal($dataFinal)
        {
                $this->dataFinal = $dataFinal;

              
        }
 
        public function getValorTotal()
        {
                return $this->valorTotal;
        }

        
        public function setValorTotal($valorTotal)
        {
                $this->valorTotal = $valorTotal;  
        }

        public function getUsuario()
        {
                return $this->usuario;
        }

     
        public function setUsuario($usuario)
        {
                $this->usuario = $usuario; 
        }
    }



?>