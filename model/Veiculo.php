<?php

    class Veiculo {

        private $id;
        private $nome;
        private $marca;
        private $anoVeiculo;
        private $valorDiaria;
        private $imgVeiculo;
        private $corVeiculo;



        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $id;
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

               
        }

        /**
         * Get the value of marca
         */ 
        public function getMarca()
        {
                return $this->marca;
        }

        /**
         * Set the value of marca
         *
         * @return  self
         */ 
        public function setMarca($marca)
        {
                $this->marca = $marca;

        }

        /**
         * Get the value of anoVeiculo
         */ 
        public function getAnoVeiculo()
        {
                return $this->anoVeiculo;
        }

        /**
         * Set the value of anoVeiculo
         *
         * @return  self
         */ 
        public function setAnoVeiculo($anoVeiculo)
        {
                $this->anoVeiculo = $anoVeiculo;

        }

        /**
         * Get the value of valorDiaria
         */ 
        public function getValorDiaria()
        {
                return $this->valorDiaria;
        }

        /**
         * Set the value of valorDiaria
         *
         * @return  self
         */ 
        public function setValorDiaria($valorDiaria)
        {
                $this->valorDiaria = $valorDiaria;

                

        }
        
        /**
         * Get the value of imgVeiculo
         */ 
        public function getImgVeiculo()
        {
                return $this->imgVeiculo;
        }

        /**
         * Set the value of imgVeiculo
         *
         * @return  self
         */ 
        public function setImgVeiculo($imgVeiculo)
        {
                $this->imgVeiculo = $imgVeiculo;

        }

        /**
         * Get the value of corVeiculo
         */ 
        public function getCorVeiculo()
        {
                return $this->corVeiculo;
        }

        /**
         * Set the value of corVeiculo
         *
         * @return  self
         */ 
        public function setCorVeiculo($corVeiculo)
        {
                $this->corVeiculo = $corVeiculo;

               
        }
    }


?>