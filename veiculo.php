<html>


<head>

    <title> Concessionária </title>

    <meta charset="utf-8" />

    <link rel="stylesheet" href="css/style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>


<body>

    <?php
    require_once(__DIR__ ."/global.php");
    include('controller/verify.php');

    ?>

    <?php

        session_start();
        $veiculo = Null;

        if (isset($_SESSION['editarVeiculo'])) {

            $veiculo = $_SESSION['editarVeiculo'];
        }

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

        <div class="company">
            <div>
                <img src="img/add-icon.png" class="img-normal" />
                <br />
                <br />
                <h2> <?php 

                        if ($veiculo != Null){

                            echo("Editar Veículo");
                        }
                        else {

                            echo("Adicionar veículo");
                        }
                
                     ?>  
                </h2>
            </div>



        </div>

        <div class="functions-btns">
            <a href="consulta-veiculo.php"> <img src="img/search-mode.png" class="change-action-btn lupa"> </a>
        </div>

        <hr />

        <div class="form-insert">
            <form action="controller/VeiculoController.php" method="post" enctype="multipart/form-data">
                <div class="form-item">

                    <div class="div-centralizadora">
                        <img class="veiculo-img" name="imgVeiculo" 
                        src="<?php 
                                if ($veiculo != Null){
                                    
                                    echo("img/img_veiculos/".$veiculo->getImgVeiculo());

                                }
                                else {

                                    echo("img/camera.png");
                                }
                        
                            ?>" /> <br /> <br />
                    </div>
                    <input type="file" name="fileImg" id="fileImg" onchange="inserirImg()" accept="image/*"/>

                </div>

                <br />

                <div class="form-item">
                    <label for="txtNomeVeiculo"> Nome do veículo </label> <br /> <br />
                    <input type="text" name="txtNomeVeiculo" id="txtNomeVeiculo" class="input gray" placeholder="Digite o nome da veículo" 
                    value="<?php
                                if ($veiculo != NULL) {
                                    echo ($veiculo->getNome());
                                }
                            ?>" />
                </div>
                <br />

                <div class="form-item">
                    <label for="cboMarcaVeiculo"> Marca do veículo </label> <br />
                    <select name="cboMarcaVeiculo" id="cboMarcaVeiculo" class="input gray" placeholder="Digite a marca do veículo">
                        <?php

                        if ($veiculo != NULL) { 

                            $listaMarcas = MarcaController::getAll();
                            foreach ($listaMarcas as $m) {
                                if( $veiculo->getMarca()->getNome() == $m["nomeMarca"]){
                                    echo("<option selected value='" . $m['idMarca'] . "'>" . $m['nomeMarca'] . "</option>");

                                }else{
                                    echo ("<option value='" . $m['idMarca'] . "'>" . $m['nomeMarca'] . "</option>");
                                }
                               
                            }

                        } else {
                            $listaMarcas = MarcaController::getAll();
                            foreach ($listaMarcas as $m) {

                                echo ("<option value ='" . $m['idMarca'] . "'>" . $m['nomeMarca'] . "</option>");
                            }
                        }
                        ?>
                    </select>

                </div>



                <div class="form-item">
                    <label for="txtAnoVeiculo"> Ano do veículo </label> <br /> <br />
                    <input type="text" name="txtAnoVeiculo" id="txtAnoVeiculo" class="input gray" placeholder="Digite o ano da veículo"  
                    value="<?php

                                if($veiculo != NULL){

                                    echo($veiculo->getAnoVeiculo());

                                }
           
                            ?>"/>
                </div>

                <br />

                <div class="form-item">
                    <label for="txtCorVeiculo"> Cor do veículo </label> <br /> <br />
                    <input type="text" name="txtCorVeiculo" id="txtCorVeiculo" class="input gray" placeholder="Digite a cor do veículo" 
                    value="<?php

                                if($veiculo != Null){
                                    echo($veiculo->getCorVeiculo());
                                }
                            ?>"/>
                </div>

                <br />

                <div class="form-item">
                    <label for="txtValorDiariaVeiculo"> Valor da diária veículo </label> <br /> <br />
                    <input type="number" name="txtValorDiariaVeiculo" id="txtValorDiariaVeiculo" class="input gray" placeholder="Digite o valor da diária do veículo" 
                    value="<?php
                                if($veiculo != Null){
                                    echo($veiculo->getValorDiaria());
                                }
                                
                            ?>"/>
                </div>

                <br />
                <br />

                <input type="hidden"  name="hdFuncao" 
                value="<?php
                                               
                            if ($veiculo != Null){
                                echo("editarVeiculo");
                            }
                            else {
                                echo("cadastrarVeiculo");
                            }
                        ?>"/>

                        <?php

                            if ($veiculo != Null){

                                echo("<input type='hidden' name='idVeiculo' value = ' ".$veiculo->getId()." ' />");
                                echo("<input type='hidden' name='imagemAntiga' value = '".$veiculo->getImgVeiculo()."'/>");
                            }
                        ?>

                <input type="submit" class="button-contact gray" 
                value="<?php
                            if ($veiculo != null ){
                                echo("Editar");
                            }
                            else{
                                echo("Cadastrar");
                            }
                
                        ?>"/>

            </form>

        </div>
    </main>

        <?php
            session_unset();
            session_destroy();
        ?>

    <footer>


    </footer>

    <script src="js/script.js"></script>

</body>

</html>