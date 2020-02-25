<html>


<head>

    <title> Concessionária </title>

    <meta charset="utf-8" />

    <link rel="stylesheet" href="css/style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>


<body>


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

        <div class="company">
            <div>
                <img src="img/lupa.png" class="img-normal" />
                <br />
                <br />
                <h2> Consultar veículos </h2>
            </div>
        </div>

        <div class="functions-btns">
            <a href="veiculo.php"> <img src="img/add-laranja.png" class="change-action-btn add"> </a>
        </div>

        <hr />

        <div class="form-select">
            <form action="controller/VeiculoController.php" method="post">

                <label for="txtNomeVeiculo"> Nome do veículo </label> <br /> <br />
                <input type="text" name="txtNomeVeiculo" id="txtNomeVeiculo" class="input gray" placeholder="Digite o nome do veículo" /> <br /> <br />
                <input type="hidden" value="consultarVeiculo" name="hdFuncao" />
                <input type="submit" value="Consultar" class="button-contact gray" />

            </form>


        </div>

        <div class="cars">

            <?php

            require_once('global.php');
            session_start();

            if (isset($_SESSION['listaVeiculos'])) {

                $listaVeiculos = $_SESSION['listaVeiculos'];

                foreach ($listaVeiculos as $v) {

                    echo ("<div class='card-car'>
                                <img src='img/img_veiculos/" . $v['imgVeiculo'] . "'/>
                                <p> <b> Nome: </b> " . $v['modeloVeiculo'] . " </p>
                                <p> <b> Marca: </b>" . $v['nomeMarca'] . "</p>
                                <p> <b> Valor da diária: R$ </b> " . $v['valorDiariaVeiculo'] . "</p>"
                        . "<p> <b> Ano: </b>" . $v['anoVeiculo'] . "</p>
                            <div class='div-centralizadora'>

                            <form action='controller/VeiculoController.php' method='post'>
                                <input type='hidden' name='hdFuncao' value='getVeiculo'/>
                                <input type='hidden' name='idVeiculo' value='" . $v["idVeiculo"] . "'/>
                                <input type ='submit' class='btn cinza' value='Editar'/>
                            </form>

                            <form action='controller/VeiculoController.php' method='post'>
                                <input type='hidden' name='hdFuncao' value='removerVeiculo'/>
                                <input type='hidden' name='idVeiculo' value='" . $v['idVeiculo'] . "'/>
                                <input type ='submit' class='btn cinza' value='Remover'/> 
                            </form>
                        </div>
                        </div>");
                }
            } else {

                /*
                    if (isset($_COOKIE["msg"])) {
                    
                        echo ("<script> alert(" . $_GET['msg'] . ") </script>");
                        unset($_COOKIE['msg']);
                    }
                    else{

                        echo"não tá setado";
                    }
                    */

                $listaVeiculos = VeiculoController::getAll();

                foreach ($listaVeiculos as $v) {

                    echo ("<div class='card-car'>
                                <img src='img/img_veiculos/" . $v['imgVeiculo'] . "'/>
                                <p> <b> Nome: </b> " . $v['modeloVeiculo'] . " </p>
                                <p> <b> Marca: </b>" . $v['nomeMarca'] . "</p>
                                <p> <b> Valor da diária: R$ </b> " . $v['valorDiariaVeiculo'] . "</p>"
                        . "<p> <b> Ano: </b>" . $v['anoVeiculo'] . "</p>
                            <div class='div-centralizadora'>
                                <form action='controller/VeiculoController.php' method='post'>
                                    <input type='hidden' name ='hdFuncao' value='getVeiculo'/>
                                    <input type='hidden' name ='idVeiculo' value='" . $v["idVeiculo"] . "'/>
                                    <input type ='submit' class='btn cinza' value='Editar'/>
                                </form>

                                <form action='controller/VeiculoController.php' method='post'>
                                    <input type='hidden' name='hdFuncao' value='removerVeiculo'/>
                                    <input type='hidden' name='idVeiculo' value='" . $v['idVeiculo'] . "'/>
                                    <input type ='submit' class='btn cinza' value='Remover'/> 
                                </form>
                            </div>
                        </div>");
                }
            }
            session_unset();
            session_destroy();

            ?>
        </div>
    </main>


    <footer>


    </footer>

</body>

</html>