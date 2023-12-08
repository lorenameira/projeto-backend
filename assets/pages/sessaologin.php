<!DOCTYPE html>
<html lang="pt-br" class="tela-login">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Área do Cliente">
  <link rel="preload" href="../css/style1.css" as="style">
  <link rel="stylesheet" href="../css/style1.css">
  <title>SELECIONE</title>
</head>

<body>
    <header class="header">
        <a href="#"><img src="../img/logo.png" alt="Logo Telecall" width="50px" class="logo-telecall"></a>
        <div id="menu-hamburguer">
            <div id="menu">
                <nav>
                    <ul class="header-menu">
                        <li><a href="internet.html">Internet</a></li>
                        <li><a href="telefonia.html">Telefonia</a></li>
                        <li><a href="rede-infraestrutura.html">Rede e Infraestrutura</a></li>
                        <li><a href="internet.html">Serviços Adicionais</a></li>
                    </ul>
                </nav>
                <div class="header-chat-cliente">
                    <a href="atendimento.html" class="area-cliente"><span><img src="../img/chat-fill.svg"></span>Atendimento</a>
                    <a href="../pages/sessaologin.html" class="area-cliente"><span><img src="../img/user-solid.svg"></span>Área do Cliente</a>
                    <a href="https://api.whatsapp.com/send/?phone=5521936180100&text&app_absent=0" title="Atendente via Whatsapp"><img src="../img/whatsapp.svg" alt="Whatsapp" class="icons-wpp"></a>
                </div>
            </div>
        </div>
        <div class="buttons-navbar">
            <div class="dark">
                <button id="dark">DARK</button>
            </div>
            <button id="btn-mobile"><img src="../img/list.svg" alt="Botão Mobile"></button>
        </div> 
    </header>
  <!-- TELA LOGIN -->
  <div class="login-principal">
    <img src="../img/login.svg" alt="Mulher segurando uma chave" class="img-lock">
    <div class="login">
      <img src="../img/logo.png" alt="Logo Telecall">
      <h1>Selecione</h1>
      
        <a href="../login system/login_form.php"><button type="submit" class="btn login-btn" onclick="validar(this.form)">Login</button></a>
        <a href="../login system/register_form.php"><button type="submit" class="btn login-btn" onclick="validar(this.form)">Cadastrar</button></a>
        
</html>