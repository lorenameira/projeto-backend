<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Roboto, Arial, Helvetica, sans-serif;
            text-align: center;
            color: white;
            background-color: lightgray;
            background-image: url(../img/Design\ sem\ nome.png);
        }
        #h1{
            padding-top: 200px;
            color: black;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            width: 200px;
        }
        #box{
            position: absolute;
            top: 5%;
            right: 82%;
            padding: 10px;
            border-radius: 10px;
            width: 180px;
            background-color:grey;
        }
        #box:hover{
            background-color: #f2282e;
        }

        a{
            text-decoration: none;
            color: white;
            border: 3px solid #c13553;
            border-radius: 10px;
            padding: 10px;
            
        }
        a:hover{
            background-color: #f2282e;
        }
        /* Estilos para telas menores (tablets) */
@media (max-width: 768px) {
    body {
        font-size: 14px;
    }
}

/* Estilos para telas ainda menores (dispositivos móveis) */
@media (max-width: 480px) {
    body {
        font-size: 12px;
    }
}

    </style>
</head>
<body>
    <h1 id="h1">Acesse sua conta ou Cadastre-se</h1>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastrar</a>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <button><a id="box" href="./internet.php">Voltar para o início</a></button>
</body>
</html>