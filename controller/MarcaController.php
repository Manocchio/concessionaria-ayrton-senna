<?php


require_once(__DIR__."/../global.php");

if (isset($_POST["hdFuncao"])) {

    $funcao = $_POST["hdFuncao"];

    if ($funcao == "cadastrarMarca") {

        $marca = new Marca();
        $marca->setNome($_POST["txtNomeMarca"]);

        $marcaDAO = new MarcaDAO();

        if ($marcaDAO->cadastrar($marca)) {

            echo ("Deu bom :)");
        } else {
            echo ("Deu ruim :(");
        }


        header("location: ../consulta-marca.php");
        
    } else if ($funcao == "consultarMarca") {

        $marca = new Marca();
        $marca->setNome($_POST["txtNomeMarca"]);

        $marcaDAO = new MarcaDAO();
        session_start();
        $_SESSION["result"] = $marcaDAO->consultar($marca->getNome());

        header("location: ../consulta-marca.php");
    }
}



class MarcaController
{

    public static function getAll()
    {

        $m =  new MarcaDAO();
        return $m->getAll();
    }
}
