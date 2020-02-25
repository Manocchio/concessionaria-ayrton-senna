<html>

<head>

    <title> Concessionária </title>

    <meta charset="utf-8" />

    <link rel="stylesheet" href="css/style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>


<body>

        
        <?php
             include_once('controller/verify.php');
        ?>
    
    <header>
        <nav id="menu" class="menu-secundary">

            <ul>
                <a href="pagina-inicial.php">
                    <li> <img src="img/home-icon.png" />
                        <h4> Home </h4>
                    </li>
                </a>


                <a href="marca.php">
                    <li> <img src="img/maleta.png" />
                        <h4> Marca </h4>
                    </li>
                </a>

                <a href="veiculo.php">
                    <li> <img src="img/car.png" />
                        <h4> Veículo </h4>
                    </li>
                </a>


                <a href="cliente.php">
                    <li> <img src="img/cliente.png" />
                        <h4> Cliente </h4>
                    </li>
                </a>

                <div class = "  logout">
                    <a href = "controller/logout.php">    
                        <img class = "logout" src = "img/logout.png" width="50"/>
                    </a>
                </div>




            </ul>

        </nav>

    </header>

    <main class="main-secundary">
        <?php
            require_once(__DIR__.DIRECTORY_SEPARATOR."global.php");
            $cliente = new Cliente();
            if (isset($_SESSION['editarCliente'])) {

                if (!empty($_SESSION['editarCliente'])) {
                    
                    $cliente = $_SESSION['editarCliente'];

                }

                
            }
            
        ?>
        
        <div class="company">
            <div>
                <img src="img/add-icon.png" class="img-normal" />
                <br />
                <br />
                <h2>
                    <?php
                      
                        if (isset($_SESSION['editarCliente'])) {

                            if (!empty($_SESSION['editarCliente'])) {
                                echo "Editar Cliente";
                            }

                        } else {
                            echo "Adicionar Cliente";
                        }
                    ?>
                </h2>
            </div>



        </div>

        <div class="functions-btns">
            <a href="consulta-cliente.php"> <img src="img/search-mode.png" class="change-action-btn lupa"> </a>
        </div>

        <hr />

        <div class="form-insert">
            <form action="controller/ClienteController.php" method="post">
                <div class="form-item">
                    <label for="txtNomeCliente"> Nome do Cliente </label> <br /> <br />
                    <input type="text" name="txtNomeCliente" id="txtNomeCliente" class="input gray" placeholder="Digite o nome do Cliente" 
                    
                    value="<?php 
                        if(!empty($cliente)){

                            echo($cliente->getNomeCliente());
                        }
                       
                    ?>"/> <br /> <br />
                </div>

                <div class="form-item">
                    <label for="txtCpfCliente"> CPF do Cliente </label> <br /> <br />
                    <input type="text" name="txtCpfCliente" id="txtCpfCliente" class="input gray" placeholder="Digite o CPF do Cliente" 
                    value="<?php
                            if(!empty($cliente)){

                                echo($cliente->getCpfCliente());
                            }
                        ?>"/> <br /> <br />
                </div>

                <div class="form-item">
                    <label for="txtCepCliente"> CEP do Cliente </label> <br /> <br />
                    <input type="text" name="txtCepCliente" id="txtCepCliente" class="input gray" placeholder="Digite o CEP do Cliente" 
                    value="<?php
                            if(!empty($cliente)){

                                echo($cliente->getCepCliente());
                            }
                    ?>"/> <br /> <br />
                </div>

                <div class="form-item">
                    <label for="txtLogCliente"> Logradouro do Cliente </label> <br /> <br />
                    <input type="text" name="txtLogCliente" id="txtLogCliente" class="input gray" placeholder="Digite o logradouro do Cliente" 
                    value="<?php
                            if(!empty($cliente)){

                                echo($cliente->getEndCliente());
                            }
                    ?>"/> <br /> <br />
                </div>


                <div class="form-item">
                    <label for="txtBairroCliente"> Bairro do Cliente </label> <br /> <br />
                    <input type="text" name="txtBairroCliente" id="txtBairroCliente" class="input gray" placeholder="Digite o Bairro do Cliente" 
                    
                    value="<?php
                            if(!empty($cliente)){

                                echo($cliente->getBairroCliente());

                            }
                    ?>"/> <br /> <br />
                </div>


                <div class="form-item">
                    <label for="txtCidadeCliente"> Cidade do Cliente </label> <br /> <br />
                    <input type="text" name="txtCidadeCliente" id="txtCidadeCliente" class="input gray" placeholder="Digite a cidade do Cliente" 
                    value="<?php
                            if(!empty($cliente)){

                                echo($cliente->getCidadeCliente());
                            }
                    ?>"/> <br /> <br />
                </div>

                <div class="form-item">
                    <label for="txtUfCliente"> UF do Cliente </label> <br /> <br />
                    <input type="text" name="txtUfCliente" id="txtUfCliente" class="input gray" placeholder="Digite o UF do Cliente" 
                    value="<?php
                              if(!empty($cliente)){

                                echo($cliente->getUfCliente());
                              }
                            ?>"/> <br /> <br />
                </div>

                <div class="form-item">
                    <label for="txtNumeroCliente"> Nº do Cliente </label> <br /> <br />
                    <input type="text" name="txtNumeroCliente" id="txtNumeroCliente" class="input gray" placeholder="Digite o número do Cliente" 
                    value="<?php
                            if(!empty($cliente)){

                                echo($cliente->getNumCliente());
                            }
                    ?>"/> <br /> <br />
                </div>

                <div class="form-item">
                    <label for="txtComplementoCliente"> Complemento do Cliente </label> <br /> <br />
                    <input type="text" name="txtComplementoCliente" id="txtComplementoCliente" class="input gray" placeholder="Digite o complemento do Cliente"
                    value="<?php

                                if(!empty($cliente)){

                                    echo($cliente->getComplementoCliente());
                                }
                    ?>"/> <br /> <br />
                </div>

                <div class="form-item">
                    <label for="txtCnhCliente"> CNH do Cliente </label> <br /> <br />
                    <input type="text" name="txtCnhCliente" id="txtCnhCliente" class="input gray" placeholder="Digite a carteira nacional de habilitação do Cliente" 
                    value="<?php
                             if(!empty($cliente)){

                                echo($cliente->getCnhCliente());
                            }
                    ?>"/> <br /> <br />
                </div>

                <input type="hidden" value="<?php

                    if (isset($_SESSION['editarCliente'])) {

                        if (!empty($_SESSION['editarCliente'])) {
                            
                          echo("editarCliente");

                        }
                        
                    }
                    else{
                        
                        echo("cadastrarCliente");
                    }


                ?>" name="hdFuncao" />
                <input type="submit" value="<?php 
             
                     if (isset($_SESSION['editarCliente'])) {

                         if (!empty($_SESSION['editarCliente'])) {
                    
                             echo("Editar");

                         }

                    }
                    else{
                        echo("Cadastrar");
                    }    
                
                ?>" class="button-contact gray" />

                <?php

                    if (isset($_SESSION['editarCliente'])) {

                        if (!empty($_SESSION['editarCliente'])) {

                            $cliente = $_SESSION['editarCliente'];
                            echo("<input type='hidden' value='" . $cliente->getIdCliente(). "' name='idCliente'/>");

                        }

                    }
                ?>

            </form>


        </div>
     
    </main>


    <footer>


    </footer>

    <?php

        if(isset($_SESSION['editarCliente'])){

            session_unset();
            session_destroy();

        }

    ?>
    
</body>

</html>