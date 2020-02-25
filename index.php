<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Concessionaria</title>
</head>
<body class="login-body">
   
    
    <div class = "login">   
        <div class="div-form">
            <div class="div-centralizadora">
                <img src="img/user.png" width="100px" height="100px"/>
            </div>   
            <div class="div-centralizadora">
                <h1 class="h1Blink">Login</h1>
            </div>
            <form id="formulario-login" action="controller/valida-login.php" method="post">    
                <p>Usuário</p>
                <div class = "div-centralizadora">
                    <input class="input-login" type="text" name="txtUsuario" placeholder="Insira seu nome de Usuário">
                </div>
                <p>Senha</p>
                <div class ="div-centralizadora">
                    <input class="input-login" type="password" name="txtSenha" placeholder="Insira sua senha">
                </div>
                    <br/>
                <div class="div-centralizadora">   
                    <input class="button-login" type="submit" name="btnSubmit" value="Entrar">
                </div>
            </form>
        </div>        
    </div>
    <script>
        
        function typeWriter(elemento){
            const textoArray = elemento.innerHTML.split('');
            elemento.innerHTML ='';
            textoArray.forEach(function(letra,i){
                setTimeout(() => {
                    elemento.innerHTML += letra;
                }, 400 * i);
            })
        }


        function popUp(elemento){
            elemento.innerHTML = 'teste';
             const digit = elemento.innerHTML.split('');
             elemento.innerHTML = '';
             digit.forEach(function(letra,i){
                 setTimeout(() => {
                    console.log(letra); 
                 },  i);
             })        
        }


        const input = document.querySelector('input');
        console.log(input);
        const titulo = document.querySelector("h1");
        typeWriter(titulo);
        popUp(input);




    </script>
</body>
</html>