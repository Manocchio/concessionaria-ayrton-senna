<?php

require_once(__DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."global.php");

class ClienteDAO{


    public function cadastrar($cliente){

        $conn = Conexao::getConexao();
        $sql = "INSERT INTO tbCliente(nomeCliente, cpfCliente, cnhCliente,
        endCliente, numCliente, complementoCliente, bairroCliente, 
        cidadeCliente, cepCliente, ufCliente)
        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $pstm = $conn->prepare($sql);

        $pstm->bindValue(1,$cliente->getNomeCliente());
        $pstm->bindValue(2,$cliente->getCpfCliente());
        $pstm->bindValue(3,$cliente->getCnhCliente());
        $pstm->bindValue(4,$cliente->getEndCliente());
        $pstm->bindValue(5,$cliente->getNumCliente());
        $pstm->bindValue(6,$cliente->getComplementoCliente());
        $pstm->bindValue(7,$cliente->getBairroCliente());
        $pstm->bindValue(8,$cliente->getCidadeCliente());
        $pstm->bindValue(9,$cliente->getCepCliente());
        $pstm->bindValue(10,$cliente->getUfCliente());

        if ( $pstm->execute() ){

            return True;
        }
        else{

            return False;
        }

    }

    public function consultar ($nome){

        $conn = Conexao::getConexao();
        $sql = "SELECT idCliente, nomeCliente, cpfCliente, cnhCliente, cepCliente  
        FROM tbCliente WHERE nomeCliente LIKE ?";

        $pstm = $conn->prepare($sql);
        $pstm->bindValue(1 , $nome ."%");

        $pstm->execute();
        $result = $pstm->fetchAll();

        return $result;
    }

    public function consultarComTodosOsCampos ($id){

        $conn = Conexao::getConexao();
        $sql = "SELECT * FROM tbCliente WHERE idCliente = ?";

        $pstm = $conn->prepare($sql);
        $pstm->bindValue(1 , $id);

        $pstm->execute();
        $result = $pstm->fetchAll();

        foreach ( $result as $r ){

            $cliente = new Cliente();
            $cliente->setIdCliente($id);
            $cliente->setNomeCliente($r['nomeCliente']);
            $cliente->setCpfCliente($r['cpfCliente']);
            $cliente->setCepCliente($r['cepCliente']);
            $cliente->setEndCliente($r['endCliente']);
            $cliente->setBairroCliente($r['bairroCliente']);
            $cliente->setCidadeCliente($r['cidadeCliente']);
            $cliente->setUfCliente($r['ufCliente']);
            $cliente->setNumCliente($r['numCliente']);
            $cliente->setComplementoCliente($r['complementoCliente']);
            $cliente->setCnhCliente($r['cnhCliente']);

        }

        return $cliente;
    }

    public function editar($cliente){

        $conn = Conexao::getConexao();
        $sql ="UPDATE tbCliente SET nomeCliente = ?, cpfCliente = ?,cnhCliente = ?,
        endCliente = ?, numCliente = ?, complementoCliente = ?, bairroCliente = ?, 
        cidadeCliente = ?, cepCliente = ?, ufCliente = ? WHERE idCliente = ?";

        $pstm = $conn->prepare($sql);
       
        $pstm->bindValue(1,$cliente->getNomeCliente());
        $pstm->bindValue(2,$cliente->getCpfCliente());
        $pstm->bindValue(3,$cliente->getCnhCliente());
        $pstm->bindValue(4,$cliente->getEndCliente());
        $pstm->bindValue(5,$cliente->getNumCliente());
        $pstm->bindValue(6,$cliente->getComplementoCliente());
        $pstm->bindValue(7,$cliente->getBairroCliente());
        $pstm->bindValue(8,$cliente->getCidadeCliente());
        $pstm->bindValue(9,$cliente->getCepCliente());
        $pstm->bindValue(10,$cliente->getUfCliente());
        $pstm->bindValue(11,$cliente->getIdCliente());

        if ($pstm->execute()){

            return True;
        }
        else {

            return False;
        }

    }

    public function remover($id){

        $conn = Conexao::getConexao();
        $sql = "DELETE FROM tbCliente WHERE idCliente = ?";

        $pstm = $conn->prepare($sql);

        $pstm->bindValue(1,$id);
        
        if ($pstm->execute()){
            
            return True;
        }
        else{
            return False;
        }
        
    }

    public function getAll(){

        $conn = Conexao::getConexao();
        $sql ="SELECT * FROM tbCliente";
        $pstm = $conn->prepare($sql);
        $pstm->execute();
        $lista = $pstm->fetchAll();

        return $lista;
    }


}