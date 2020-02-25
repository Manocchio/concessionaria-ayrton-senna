<html>


<head>

    <title> Concessionária </title>

    <meta charset="utf-8" />

    <link rel="stylesheet" href="css/style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>


<body>
    <?php
    include('controller/verify.php');
    
    
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
                <h2> Adicionar marca </h2>
            </div>



        </div>

        <div class="functions-btns">
            <a href="consulta-marca.php"> <img src="img/search-mode.png" class="change-action-btn lupa"> </a>
        </div>

        <hr />

        <div class="form-insert">
            <form action="controller/MarcaController.php" method="post">

                <label for="txtNomeMarca"> Nome da Marca </label> <br /> <br />
                <input type="text" name="txtNomeMarca" id="txtNomeMarca" class="input gray" placeholder="Digite o nome da marca" /> <br /> <br />
                <input type="hidden" value="cadastrarMarca" name="hdFuncao" />
                <input type="submit" value="Cadastrar" class="button-contact gray" />

            </form>

        </div>
    </main>


    <footer>


    </footer>

</body>

</html>