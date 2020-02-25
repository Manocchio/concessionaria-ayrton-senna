<?php

require_once(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "global.php");

class VeiculoDAO
{

    public function cadastrar($veiculo)
    {

        $conn = Conexao::getConexao();

        $sql = "INSERT INTO tbVeiculo (modeloVeiculo, anoVeiculo, idMarca,
            corVeiculo, valorDiariaVeiculo, imgVeiculo) VALUES(?,?,?,?,?,?)";

        $pstm = $conn->prepare($sql);

        $pstm->bindValue(1, $veiculo->getNome());
        $pstm->bindValue(2, $veiculo->getAnoVeiculo());
        $pstm->bindValue(3, $veiculo->getMarca()->getId());
        $pstm->bindValue(4, $veiculo->getCorVeiculo());
        $pstm->bindValue(5, $veiculo->getValorDiaria());
        $pstm->bindValue(6, $veiculo->getImgVeiculo());

        if ($pstm->execute()) {

            return True;
        } else {

            return False;
        }
    }


    public function consultar($veiculo)
    {

        $conn = Conexao::getConexao();

        $sql = "SELECT idVeiculo, modeloVeiculo, anoVeiculo, nomeMarca, valorDiariaVeiculo, imgVeiculo 
        FROM tbveiculo INNER JOIN tbmarca
        ON tbveiculo.idMarca = tbmarca.idMarca
        WHERE tbveiculo.modeloVeiculo LIKE ?";

        $pstm = $conn->prepare($sql);
        $pstm->bindValue(1, $veiculo ."%");

        $pstm->execute();
        return $pstm->fetchAll();
    }

    public function getAll(){

        $conn = Conexao::getConexao();

        $sql = "SELECT idVeiculo, modeloVeiculo, anoVeiculo, nomeMarca, valorDiariaVeiculo, imgVeiculo 
        FROM tbveiculo INNER JOIN tbmarca
        ON tbveiculo.idMarca = tbmarca.idMarca";

        $pstm = $conn->prepare($sql);

        $pstm->execute();
        return $pstm->fetchAll();

    }

    public function consultarEspecifico($id){

        $conn = Conexao::getConexao();
        $sql ="SELECT idVeiculo, modeloVeiculo, anoVeiculo, nomeMarca, valorDiariaVeiculo, imgVeiculo, corVeiculo 
        FROM tbveiculo INNER JOIN tbmarca
        ON tbveiculo.idMarca = tbmarca.idMarca
        WHERE tbveiculo.idVeiculo = ?";

        $pstm = $conn->prepare($sql);

        $pstm->bindValue(1,$id);
        $pstm->execute();
        $result = $pstm->fetchAll();

        foreach ($result as $r) {

            $veiculo = new Veiculo();
            $veiculo->setId($id);
            $veiculo->setNome($r["modeloVeiculo"]);
            $veiculo->setAnoVeiculo($r["anoVeiculo"]);
            $veiculo->setCorVeiculo($r["corVeiculo"]);
            $m = new Marca();
            $m->setNome($r["nomeMarca"]);
            $veiculo->setMarca($m);
            $veiculo->setValorDiaria($r["valorDiariaVeiculo"]);
            $veiculo->setImgVeiculo($r["imgVeiculo"]);
        }
        return $veiculo;
    }

    public function editar($veiculo){

        $conn = Conexao::getConexao();
        $sql = " UPDATE tbveiculo SET modeloVeiculo = ?, anoVeiculo = ?, idMarca = ?,
        corVeiculo = ?, valorDiariaVeiculo = ?, imgVeiculo = ?
        WHERE idVeiculo = ?";

        $pstm = $conn->prepare($sql);

        $pstm->bindValue(1 , $veiculo->getNome());
        $pstm->bindValue(2 , $veiculo->getAnoVeiculo());
        $pstm->bindValue(3 , $veiculo->getMarca()->getId());
        $pstm->bindValue(4 , $veiculo->getCorVeiculo());
        $pstm->bindValue(5 , $veiculo->getValorDiaria());
        $pstm->bindValue(6 , $veiculo->getImgVeiculo());
        $pstm->bindValue(7 , $veiculo->getId());

        $pstm->execute();

    }

    public function remover($id){

        $conn = Conexao::getConexao();
        $sql ="DELETE FROM tbveiculo WHERE idVeiculo = ?";

        $pstm = $conn->prepare($sql);
        $pstm -> bindValue(1 ,$id);

        $pstm->execute();
    }
}
