<?php

    class Usuario{

        private $idUsuario;
        private $nomeUsuario;
        private $loginUsuario;
        private $senhaUsuario;



        public function getIdUsuario()
        {
                return $this->idUsuario;
        }


        public function setIdUsuario($idUsuario)
        {
                $this->idUsuario = $idUsuario;
        }



        public function getNomeUsuario()
        {
                return $this->nomeUsuario;
        }



        public function setNomeUsuario($nomeUsuario)
        {
                $this->nomeUsuario = $nomeUsuario;

        }

 
        public function getLoginUsuario()
        {
                return $this->loginUsuario;
        }


        public function setLoginUsuario($loginUsuario)
        {
                $this->loginUsuario = $loginUsuario;

                return $this;
        }


        public function getSenhaUsuario()
        {
                return $this->senhaUsuario;
        }

 
        public function setSenhaUsuario($senhaUsuario)
        {
                $this->senhaUsuario = $senhaUsuario;


        }
    }


?>