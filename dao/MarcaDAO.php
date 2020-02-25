<?php

require_once(__DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."global.php");

class MarcaDAO
{

    public function cadastrar($marca)
    {

        try {
            $conn = Conexao::getConexao();

            $sql = "INSERT INTO tbmarca(nomeMarca) VALUES(?)";
            $pstm = $conn->prepare($sql);
            $pstm->bindParam(1, $marca->getNome());

            if ($pstm->execute()) {

                return True;
            } else {

                return False;
            }
        } catch (Exception $ex) { 
            echo($ex->getMessage());
            return False;
        }
    }
    public function consultar($nome){
        
        $conn = Conexao::getConexao();
        $sql = "SELECT * FROM tbmarca WHERE nomeMarca like ?";

        $pstm = $conn->prepare($sql);
        $pstm->bindValue(1,$nome.'%');
        $pstm->execute();
        $result = $pstm->fetchAll();

        return $result;
    }
    public function getAll(){

        $conn = Conexao::getConexao();
        $sql ="SELECT * FROM tbmarca";
        $pstm = $conn->prepare($sql);
        $pstm->execute();
        $lista = $pstm->fetchAll();

        return $lista;
    }

    public function edit($marca){
        
        $conn = Conexao::getConexao();
        $sql = "UPDATE tbmarca set nomeMarca = ? WHERE idMarca = ?";
        $pstm = $conn->prepare($sql);
        $pstm->bindParam(1,$marca->getNomeMarca());
        $pstm->bindParam(2,$marca->getIdMarca());
        
        if($pstm->execute()){

            return True;
        }
        else {
            
            return False;
        }

    }

    public function getMarcaById($id){

        $conn = Conexao::getConexao();
        $sql = "SELECT * FROM tbmarca 
        WHERE idmarca = ?";

        $pstm = $conn->prepare($sql);
        
        $pstm->bindValue(1,$id);
        $pstm->execute();
        $result = $pstm->fetchAll();
        
        $m = new Marca();

        foreach ($result as $r){

            $m->setId($id);
            $m->setNome($r["nomeMarca"]);
        }


    }

    public function getMarcaByName($nome){

        $conn = Conexao::getConexao();
        $sql = "SELECT idMarca FROM tbmarca 
        WHERE nomeMarca like ?";

        $pstm = $conn->prepare($sql);
        
        $pstm->bindValue(1,$nome);
        $pstm->execute();
        $result = $pstm->fetchAll();
        
        $m = new Marca();

        foreach ($result as $r){

            $m->setId($r["idMarca"]);
            $m->setNome($nome);
        }

        return $m;
        

    }

    public function verificaExistencia($nome) {

        $conn = Conexao::getConexao();
        $sql = "SELECT * FROM tbmarca WHERE nomeMarca LIKE ?";

        $pstm = $conn->prepare($sql);

        $pstm->bindValue(1,$nome);

        $pstm->execute();
        $result = $pstm->fetchAll();

       if (count($result) == 0){

            return False;
       }
       else {
           return True;
       }

    }



}
