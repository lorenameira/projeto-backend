<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
    <meta name="description" content="Atendimento">
    <link rel="preload" href="../css/style1.css" as="style">
    <link rel="stylesheet" href="../css/style1.css">
    <title>Atendimento - Telecall</title>
</head>

<body>
    <!-- MENU NAVBAR -->
    <header class="header">
        <a href="../pages/internet.html"><img src="../img/logo.png" alt="Logo Telecall" width="50px" class="logo-telecall"></a>
        <div id="menu-hamburguer">
            <div id="menu">
                <nav>
                    <ul class="header-menu">
                        <li><a href="./internet.php">Internet</a></li>
                        <li><a href="./telefonia.php">Telefonia</a></li>
                        <li><a href="./rede-infraestrutura.php">Rede e Infraestrutura</a></li>
                    </ul>
                </nav>
                <div class="header-chat-cliente">
                    <a href="./atendimento.php" class="area-cliente"><span><img src="../img/chat-fill.svg"></span>Atendimento</a>
                    <a href="./home.php" class="area-cliente"><span><img src="../img/user-solid.svg"></span>Área do Cliente</a>
                    <a href="https://api.whatsapp.com/send/?phone=5521936180100&text&app_absent=0" title="Atendente via Whatsapp"><img src="../img/whatsapp.svg" alt="Whatsapp" class="icons-wpp"></a>
                </div>
            </div>
        </div>
        <div class="buttons-navbar">
            <button id="btn-mobile"><img src="../img/list.svg" alt="Botão Mobile"></button>
        </div> 
    </header>
    <!-- ATENDIMENTO -->
    <main class="atendimento">
        <div class="atendimento-titulos">
            <h1>Atendimento ao Cliente</h1>
            <h2>Respostas em até 24H</h2>
        </div>
        <!-- DADOS -->
        <div class="dados-form">
            <div class="atendimento-dados">
                <h3 class="atendimento-titulo-escritorio"><span><img src="../img/local.svg" alt="Icone Local"></span>Escritório</h3>
                <ul>
                    <li>Centro empresarial Mario Henrique Simonsen</li>
                    <li>Av. das Américas, 3434 | Bloco 1, Sala 505</li>
                    <li>Barra da Tijuca | Rio de Janeiro, RJ</li>
                </ul>
                <h3 class="atendimento-titulo-escritorio"><span><img src="../img/telefone.svg" alt="Icone Telefone"></span>Telefone</h3>
                <ul>
                    <li>(21) 3030-1010</li>
                </ul>
                <h3 class="atendimento-titulo-escritorio"><span><img src="../img/whatsapp2.svg" alt="Icone Whatsapp"></span>Whatsapp</h3>
                <ul>
                    <li>(21) 9 3618-0100</li>
                </ul>
                <h3 class="atendimento-titulo-email"><span><img src="../img/email.svg" alt="Icone E-mail"></span>Email</h3>
                <ul>
                    <li>contato@telecall.com</li>
                    <li>sac@telecall.com</li>
                </ul>
            </div>
            <!-- FORMULÁRIO -->
            <div class="atendimento-form">
                <form name="contato" id="contato">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Nome" required>
                    <label for="numero">Número</label>
                    <input type="number" name="numero" id="numero" placeholder="(21) 9 9999-9999" maxlength="11" required>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="seu@email.com" required>
                    <label for="mensagem">Mensagem</label>
                    <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Descreva sua Mensagem" required></textarea>
                    <div class="butao"><button type="submit" class="btn">Enviar</button></div>
                </form>
            </div>
        </div>
    </main>
    <!-- RODAPÉ -->
    <footer>
        <div>
            <h3>Internet</h3>
            <ul>
                <li><a href="internet.html">Link Dedicado</a></li>
                <li><a href="internet.html">Banda Larga</a></li>
                <li><a href="internet.html">Wi-Fi</a></li>
            </ul>
        </div>
        <div>
            <h3>Telefonia</a></h3>
            <ul>
                <li><a href="telefonia.html">PABX IP Virtual</a></li>
                <li><a href="telefonia.html">E1</a></li>
                <li><a href="telefonia.html">SIP TRUNK</a></li>
                <li><a href="telefonia.html">Números 0800 e 40XX</a></li>
            </ul>
        </div>
        <div>
            <h3>Rede e Infraestrutura</h3>
            <ul>
                <li><a href="rede-infraestrutura.html">Ponto-a-Ponto</a></li>
                <li><a href="rede-infraestrutura.html">MPLS</a></li>
                <li><a href="rede-infraestrutura.html">Fibra Apagada e Dutos</a></li>
                <li><a href="rede-infraestrutura.html">Co-location</a></li>
            </ul>
        </div>
        <p class="footer-copyright">Telecall © Todos direitos reservados.</p>
    </footer>
    <script type="module" src="../js/script.js"></script>
    <script src="js/darkmode.js"></script>
</body>

</html>