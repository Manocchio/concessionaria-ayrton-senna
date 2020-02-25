<?php

class Cliente
{ 
   private $idCliente;
   private $nomeCliente;
   private $cpfCliente;
   private $cnhCliente;
   private $endCliente;
   private $numCliente;
   private $complementoCliente;
   private $bairroCliente;
   private $cidadeCliente;
   private $cepCliente;
   private $ufCliente;


   public function getIdCliente(){

        return $this->idCliente;
   }
   
   public function setIdCliente($idCliente){

        $this->idCliente = $idCliente;
   }

   /**
    * Get the value of nomeCliente
    */ 
   public function getNomeCliente()
   {
      return $this->nomeCliente;
   }

   /**
    * Set the value of nomeCliente
    *
    * @return  self
    */ 
   public function setNomeCliente($nomeCliente)
   {
      $this->nomeCliente = $nomeCliente;

   }

   /**
    * Get the value of cpfCliente
    */ 
   public function getCpfCliente()
   {
      return $this->cpfCliente;
   }

   /**
    * Set the value of cpfCliente
    *
    * @return  self
    */ 
   public function setCpfCliente($cpfCliente)
   {
      $this->cpfCliente = $cpfCliente;

   }

   /**
    * Get the value of cnhCliente
    */ 
   public function getCnhCliente()
   {
      return $this->cnhCliente;
   }

   /**
    * Set the value of cnhCliente
    *
    * @return  self
    */ 
   public function setCnhCliente($cnhCliente)
   {
      $this->cnhCliente = $cnhCliente;

   }

   /**
    * Get the value of endCliente
    */ 
   public function getEndCliente()
   {
      return $this->endCliente;
   }

   /**
    * Set the value of endCliente
    *
    * @return  self
    */ 
   public function setEndCliente($endCliente)
   {
      $this->endCliente = $endCliente;

   }

   /**
    * Get the value of numCliente
    */ 
   public function getNumCliente()
   {
      return $this->numCliente;
   }

   /**
    * Set the value of numCliente
    *
    * @return  self
    */ 
   public function setNumCliente($numCliente)
   {
      $this->numCliente = $numCliente;

   }

   /**
    * Get the value of complementoCliente
    */ 
   public function getComplementoCliente()
   {
      return $this->complementoCliente;
   }

   /**
    * Set the value of complementoCliente
    *
    * @return  self
    */ 
   public function setComplementoCliente($complementoCliente)
   {
      $this->complementoCliente = $complementoCliente;

   }

   /**
    * Get the value of bairroCliente
    */ 
   public function getBairroCliente()
   {
      return $this->bairroCliente;
   }

   /**
    * Set the value of bairroCliente
    *
    * @return  self
    */ 
   public function setBairroCliente($bairroCliente)
   {
      $this->bairroCliente = $bairroCliente;

   }

   /**
    * Get the value of cidadeCliente
    */ 
   public function getCidadeCliente()
   {
      return $this->cidadeCliente;
   }

   /**
    * Set the value of cidadeCliente
    *
    * @return  self
    */ 
   public function setCidadeCliente($cidadeCliente)
   {
      $this->cidadeCliente = $cidadeCliente;
   }

   /**
    * Get the value of cepCliente
    */ 
   public function getCepCliente()
   {
      return $this->cepCliente;
   }

   /**
    * Set the value of cepCliente
    *
    * @return  self
    */ 
   public function setCepCliente($cepCliente)
   {
      $this->cepCliente = $cepCliente;

   }

   /**
    * Get the value of ufCliente
    */ 
   public function getUfCliente()
   {
      return $this->ufCliente;
   }

   /**
    * Set the value of ufCliente
    *
    * @return  self
    */ 
   public function setUfCliente($ufCliente)
   {
      $this->ufCliente = $ufCliente;

   }
}
