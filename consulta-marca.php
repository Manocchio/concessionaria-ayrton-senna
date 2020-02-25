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
                <a href="pagina-inical.php">
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
                <h2> Consultar marcas </h2>
            </div>
        </div>

        <div class="functions-btns">
            <a href="marca.php"> <img src="img/add-laranja.png" class="change-action-btn add"> </a>
        </div>

        <hr />

        <div class="form-select">
            <form action="controller/MarcaController.php" method="post">

                <label for="txtNomeMarca"> Nome da Marca </label> <br /> <br />
                <input type="text" name="txtNomeMarca" id="txtNomeMarca" class="input gray" placeholder="Digite o nome da marca" /> <br /> <br />
                <input type="hidden" value="consultarMarca" name="hdFuncao"/>
                <input type="submit" value="Consultar" class="button-contact gray" />

            </form>

           
        </div>

        <?php
              
                require_once('global.php');
                session_start();
                
                if (isset($_SESSION["result"])) {

                    $lista = $_SESSION["result"];

                    if ($lista != null) {

                        echo ("<table id='custom-table'>");
                        echo("<tr>");
                        echo("<th> Id da marca </th>");
                        echo("<th> Nome da marca </th>");
                        echo("<th> Editar </th>");
                        echo("<th> Remover </th>");
                        echo("</tr>");

                        foreach ($lista as $l) { 

                            echo("<tr>");
                            echo("<td> ".$l["idMarca"]. "</td>");
                            echo("<td> ".$l["nomeMarca"]. "</td>");
                            echo("<td> <form action='marca.php' method='post'> 
                            <input type='hidden' value='".$l["idMarca"]."' name='idMarca'/>
                            <input type='image' src='img/edit.png'/> 
                            </form> </td>");
                            echo("<td> <img src='img/delete.png' </td>");
                            echo("</tr>");
                        }
                        echo ("</table>");
                    }
                    else{

                       $lista = MarcaController::getAll();

                        echo ("<table id='custom-table'>");
                        echo("<tr>");
                        echo("<th> Id da marca </th>");
                        echo("<th> Nome da marca </th>");
                        echo("<th> Editar </th>");
                        echo("<th> Remover </th>");
                        echo("</tr>");

                        foreach ($lista as $l) { 

                            echo("<tr>");
                            echo("<td> ".$l["idMarca"]. "</td>");
                            echo("<td> ".$l["nomeMarca"]. "</td>");
                            echo("<td> <form action='marca.php' method='post'> 
                            <input type='hidden' value='".$l["idMarca"]."' name='idMarca'/>
                            <input type='image' src='img/edit.png'/> 
                            </form> </td>");
                            echo("<td> <img src='img/delete.png' </td>");
                            echo("</tr>");
                        }
                        echo ("</table>");
                    }
                }
                else{

                    $lista = MarcaController::getAll();

                    echo ("<table id='custom-table'>");
                    echo("<tr>");
                    echo("<th> Id da marca </th>");
                    echo("<th> Nome da marca </th>");
                    echo("<th> Editar </th>");
                    echo("<th> Remover </th>");
                    echo("</tr>");

                        foreach ($lista as $l) { 

                            echo("<tr>");
                            echo("<td> ".$l["idMarca"]. "</td>");
                            echo("<td> ".$l["nomeMarca"]. "</td>");
                            echo("<td> <form action='marca.php' method='post'> 
                            <input type='hidden' value='".$l["idMarca"]."' name='idMarca'/>
                            <input type='image' src='img/edit.png'/> 
                            </form> </td>");
                            echo("<td> <img src='img/delete.png' </td>");
                            echo("</tr>");
                        }
                        echo ("</table>");
                }

                session_unset();
                session_destroy();
            ?>
    </main>


    <footer>


    </footer>

</body>

</html>