
<?php
    
    require_once(__DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."global.php");

    if (isset($_POST["hdFuncao"])){

        $funcao = $_POST["hdFuncao"];

        if ($funcao == "cadastrarCliente"){

            $clienteDAO = new ClienteDAO();
            $cliente = new Cliente();

            $cliente->setNomeCliente($_POST['txtNomeCliente']);
            $cliente->setCpfCliente($_POST['txtCpfCliente']);
            $cliente->setCepCliente($_POST['txtCepCliente']);
            $cliente->setEndCliente($_POST['txtLogCliente']);
            $cliente->setBairroCliente($_POST['txtBairroCliente']);
            $cliente->setCidadeCliente($_POST['txtCidadeCliente']);
            $cliente->setUfCliente($_POST['txtUfCliente']);
            $cliente->setNumCliente($_POST['txtNumeroCliente']);
            $cliente->setComplementoCliente($_POST['txtComplementoCliente']);
            $cliente->setCnhCliente($_POST['txtCnhCliente']);

            if ($clienteDAO->cadastrar($cliente) ){

                echo("Deu bom");
                header("location: ../consulta-cliente.php");
            }
            else{
                
                echo("Deu ruim");
                header("location: ../consuta-cliente.php");
            }

        }
        else if ($funcao == "consultarCliente"){
            
            $clienteDAO = new ClienteDAO();
            $nomeCliente = $_POST['txtNomeCliente'];

            session_start();
            $_SESSION['result'] = $clienteDAO->consultar($nomeCliente);
             
            header("location: ../consulta-cliente.php");


        }

        else if ($funcao == "getCliente"){

            $clienteDAO = new ClienteDAO();
            $cliente = $clienteDAO->consultarComTodosOsCampos($_POST['idCliente']);
            $cliente->setIdCliente($_POST['idCliente']);
            session_start();
            $_SESSION['editarCliente'] = $cliente;
            
            header("location: ../cliente.php");
            
            
        }

        else if ($funcao == "editarCliente"){

            $clienteDAO = new ClienteDAO();
            $cliente = new Cliente();

            $cliente->setIdCliente($_POST['idCliente']);
            $cliente->setNomeCliente($_POST['txtNomeCliente']);
            $cliente->setCpfCliente($_POST['txtCpfCliente']);
            $cliente->setCepCliente($_POST['txtCepCliente']);
            $cliente->setEndCliente($_POST['txtLogCliente']);
            $cliente->setBairroCliente($_POST['txtBairroCliente']);
            $cliente->setCidadeCliente($_POST['txtCidadeCliente']);
            $cliente->setUfCliente($_POST['txtUfCliente']);
            $cliente->setNumCliente($_POST['txtNumeroCliente']);
            $cliente->setComplementoCliente($_POST['txtComplementoCliente']);
            $cliente->setCnhCliente($_POST['txtCnhCliente']);

            if ($clienteDAO->editar($cliente)) {

                echo("Deu bom");

            }
            else{

                echo("Deu ruim");
            }
            
            header("location: ../consulta-cliente.php");
        }

        else if ($funcao == "removerCliente"){

            $clienteDAO = new ClienteDAO();
            $cliente = new Cliente();
            
            $cliente->setIdCliente($_POST['idCliente']);
            $cliente->getIdCliente();

            if ($clienteDAO->remover($cliente->getIdCliente())){

                echo("deu bom");
            }
            else{
                echo("deu ruim");
            }

            header("location: ../consulta-cliente.php");
    
        }

    }

    class ClienteController {

        public static function getAll() {

            $c = new ClienteDAO();
            return $c->getAll();
        }
    }