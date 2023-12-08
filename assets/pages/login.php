<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url(../img/Design\ sem\ nome.png);
        }
        #button{
            background-image: linear-gradient(to right, #f2282e, #c13553);
            width: 70px;
            border: 3px;
            padding: 15px 0px 15px 0px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 10px;
            text-decoration: none;
            text-decoration-color: white;
        }
        #button:hover{
            background-image: linear-gradient(to left, #f2282e, #c13553);
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
            width: 300px;
        }
        input{
            padding: 15px;
            width: 270px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 4px;
        }
        .inputSubmit{
            background-image: linear-gradient(to right, #f2282e, #c13553);
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            font-weight: bolder;
            
        }
        .inputSubmit:hover{
            background-image: linear-gradient(to left, #f2282e, #c13553);
            cursor: pointer;
        }
        #levar-cadastro{
            color: #fff;
            text-decoration: none;
            cursor: pointer;
            text-decoration-color: white;
        }
    </style>
</head>
<body>
    <button id="button"><a href="home.php">Voltar</a></button>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Entrar">
        </form>
        <p>  Ainda não é nosso cliente? <strong><a id="levar-cadastro" href="./formulario.php">Cadastre-se</a></strong></p>
    </div>
</body>
</html>