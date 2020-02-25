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
        <nav id="menu">

            <ul>

                <a href="pagina-inicial.php">
                    <li class="primary"> <img src="img/home-icon.png" />
                        <h4> Home </h4>
                    </li>
                </a>

                <a href="marca.php">
                    <li class="primary"> <img src="img/maleta.png" />
                        <h4> Marca </h4>
                    </li>
                </a>

                <a href="veiculo.php">
                    <li class="primary"> <img src="img/car.png" />
                        <h4> Veículo </h4>
                    </li>
                </a>

                <a href="cliente.php">
                    <li class="primary"> <img src="img/cliente.png" />
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

    <main>

        <div class="background"> </div>

        <div class="apresentation">

            <img src="img/helmet.png" class="img-normal" />
            <h1> Concessionária Ayrton Senna </h1>

            <p>
                A concessionária Ayrton Senna é uma loja de carros que visa ser tão boa em seus negócios assim como o próprio Ayrton Senna era excepcional em suas corridas.

            </p>

            <div class="card-container">

                <div class="card-about">

                    <img src="img/visao.png" class="img-normal" />
                    <h3> Visão </h3>
                    <p> Ser referência de qualidade na venda de carros no estado de São Paulo. </p>

                </div>

                <div class="card-about">

                    <img src="img/valores.png" class="img-normal" />
                    <h3> Valores </h3>
                    <ul>

                        <li> Qualidade </li>
                        <li> Honestidade </li>
                        <li> Transparência </li>
                        <li> Comprometimento </li>

                    </ul>

                </div>

                <div class="card-about">

                    <img src="img/missao.png" class="img-normal" />
                    <h3> Missão </h3>
                    <p> Realizar vendas de carros a diversos clientes de maneira exemplar. </p>


                </div>


            </div>

        </div>


        <div class="contact">

            <img src="img/contact.png" class="img-normal" />
            <h1> Fale Conosco </h1>

            <form action="..." method="get">

                <label for="txtNome"> Nome </label> <br/>
                <input type="text" name="txtNome" id="txtNome" class="input" placeholder="Digite o seu Nome aqui " /> <br/>

                <label for="txtEmail">Email</label> <br/>
                <input type="text" name="txtEmail" id="txtEmail" class="input" placeholder="Digite o seu Email aqui" /> <br/>

                <label for="txtAssunto"> Assunto </label> <br/>
                <input type="text" name="txtAssunto" id="txtAssunto" class="input" placeholder="Digite o seu Assunto aqui" /> <br/>

                <label for="txtMensagem"> Mensagem </label> <br/>
                <textarea name="txtMensagem" id="txtMensagem" placeholder="Digite a sua Mensagem aqui" class="input"></textarea> <br/>
                <br/>
                <input type="submit" value="enviar" class="button-contact" />
            </form>

        </div>

    </main>


    <footer>


    </footer>

</body>

</html>