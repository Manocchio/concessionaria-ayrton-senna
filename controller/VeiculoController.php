



<?php

require_once(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "global.php");

if (isset($_POST['hdFuncao'])) {

    $funcao = $_POST['hdFuncao'];

    if ($funcao == "cadastrarVeiculo") {

        $vDAO = new VeiculoDAO();
        $veiculo = new Veiculo();

        $veiculo->setNome($_POST['txtNomeVeiculo']);

        $m = new Marca();
        $m->setId($_POST['cboMarcaVeiculo']);
        $veiculo->setMarca($m);
        $veiculo->setAnoVeiculo($_POST['txtAnoVeiculo']);
        $veiculo->setCorVeiculo($_POST['txtCorVeiculo']);
        $veiculo->setValorDiaria($_POST['txtValorDiariaVeiculo']);

        if (isset($_FILES['fileImg'])) {

            $array = explode(".", $_FILES['fileImg']['name']);
            $nome = $array[0];
            $extensao = strtolower($array[1]);
            $nomeCompleto = $nome . $extensao;

            $novoNome = md5(time()) . "." . $extensao;

            move_uploaded_file($_FILES['fileImg']['tmp_name'], __DIR__ . DIRECTORY_SEPARATOR . ".."
                . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "img_veiculos" . DIRECTORY_SEPARATOR . $novoNome);

            $veiculo->setImgVeiculo($novoNome);
        }


        if ($vDAO->cadastrar($veiculo)) {

            echo ("Deu bom");

        } else {

            echo ("Deu ruim");
        }

        header("location: ../consulta-veiculo.php");
    }

    else if ($funcao == "consultarVeiculo"){
        
        if (!empty( $_POST['txtNomeVeiculo'] )){
            $vDAO = new VeiculoDAO();
            $listaVeiculos = $vDAO->consultar($_POST['txtNomeVeiculo']);

            session_start();
            $_SESSION['listaVeiculos'] = $listaVeiculos;

            header("location: ../consulta-veiculo.php");
        }
        else{

           // setcookie("msg","Digite algo para pesquisar!");
            header("location: ../consulta-veiculo.php");
        }

        
      
    }
    else if ($funcao == "getVeiculo"){

        $vDAO = new VeiculoDAO();
        $veiculo = $vDAO->consultarEspecifico($_POST['idVeiculo']);

        session_start();
        $_SESSION["editarVeiculo"] = $veiculo;

        header("location: ../veiculo.php");

    }
    else if ($funcao == "editarVeiculo"){

        $vDao = new VeiculoDAO();
        $veiculo = new Veiculo();

        $veiculo->setId($_POST['idVeiculo']);
        $veiculo->setNome($_POST['txtNomeVeiculo']);
        $marca = new Marca();
        $marca->setId($_POST['cboMarcaVeiculo']);
        $veiculo->setMarca($marca);
        $veiculo->setCorVeiculo($_POST["txtCorVeiculo"]);
        $veiculo->setAnoVeiculo($_POST["txtAnoVeiculo"]);
        $veiculo->setValorDiaria($_POST["txtValorDiariaVeiculo"]);

        if ($_FILES["fileImg"]["name"] == ""){

            $veiculo->setImgVeiculo($_POST["imagemAntiga"]);
        }
        else {

            if (isset($_FILES['fileImg'])) {

                $array = explode(".", $_FILES['fileImg']['name']);
                $nome = $array[0];
                $extensao = strtolower($array[1]);
                $nomeCompleto = $nome . $extensao;
    
                $novoNome = md5(time()) . "." . $extensao;
    
                move_uploaded_file($_FILES['fileImg']['tmp_name'], __DIR__ . DIRECTORY_SEPARATOR . ".."
                    . DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . "img_veiculos" . DIRECTORY_SEPARATOR . $novoNome);
    
                $veiculo->setImgVeiculo($novoNome);
            }
        
        }

        $vDao->editar($veiculo);
       

        header("location: ../consulta-veiculo.php");
        
    }
    else if ($funcao == "removerVeiculo" ) {

        $vDao = new VeiculoDAO();
        $veiculoId = $_POST["idVeiculo"];

        $vDao->remover($veiculoId);

        header("location: ../consulta-veiculo.php");

    }
    
}

class VeiculoController
{

    public static function getAll()
    {

        $mDAO = new VeiculoDAO();
        return $mDAO->getAll();
    }
}

?>