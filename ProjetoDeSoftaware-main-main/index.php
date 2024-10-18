<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="homecss.css">

    <title>Planeta Festival</title>
</head>

<body>
    <header>
        <nav>
            <ul class="listnav">
                <li>
                    <div class="dropdown">
                        <a href="">
                            <svg id="svg01" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                            </svg>
                        </a>
                        <ul class="droplist">
                            <li><a href="">Produtos Festivos</a></li>
                            <li><a href="cadastroespaco.php">Espaços Festivos</a></li>
                            <li><a href="cadastrocliente.php">Cadastro Cliente</a></li>
                            <li><a href="">Cadastro de Lojas/Vendas</a></li>
                            
                        </ul>
                    </div>
                </li>
                <li>
                    <h1><img id="astronalta" src="https://images.vexels.com/media/users/3/205157/isolated/preview/3a1d0d70d14ba68cd27271c889618e51-ilustracao-do-espaco-astronauta.png" alt=""><a href="index.php">Planeta Festival</a></h1>
                </li>

                <li>
                <form class="search-container" action="busca.php" method="get">
            <input type="text" name="busca" id="search-input" class="search-input" placeholder="Digite sua pesquisa...">
            <button type="submit">Pesquisar</button>
          </form>
                </li>
                <li>
                    <a href="Login.php"><svg id="svg02" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        
                        </svg></a>
                </li>
            </ul>

        </nav>
    </header>
    <main id="slg">
        <div class="divleft">
            <h2>A plataforma mais escolhida para quem <p>Aluga e Vende </p>
            </h2>
            <ul class="listmain">
                <li> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                    </svg>
                    Aqui temos os melhores espaços de festa perto de você!</li>
                <li> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                    </svg>
                    Cadastre seu loja para ganhar clientes para sua loja fisíca.</li>
                <li> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                    </svg>
                    Veja as ofertas dos produtos.</li>
                <li> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                    </svg>
                    Produtos de qualidade.</li>
            </ul>
            <button id="btn1" href="Index.php">Cadastra-se como Cliente</button>
            <button id="btn2">Cadastra-se seu Espaço ou Loja</button>
        </div>
        <div class="globe"></div>





    </main>

    <section class="sect">
        <p>ESPAÇO DE EVENTOS</p>
        <hr>
        <div id="grid-view">
            <img src="https://www.constancezahn.com/wp-content/uploads/2019/08/01-decoracao-de-casamento-na-casa-petra-imballarte.jpg" alt=""  width="500px" height="400px">
            <img src="https://cdn0.casamentos.com.br/vendor/1380/3_2/960/jpg/338-haldane-e-debora-3183_13_331380-164183451534809.jpeg" alt=""  width="500px" height="400px">
            <img src="https://casadosol.com.br/wp-content/uploads/2021/07/DSC09613.jpg" alt="" width="500px" height="400px">
            <img src="https://cdn0.casamentos.com.br/vendor/4142/3_2/960/jpeg/cerimoni2_13_104142-1558040553.jpeg" alt=""  width="500px" height="400px">
            <img src="https://www.seuevento.net.br/uploads/cliente/img_937112_20180627.jpg" alt="" width="500px" height="400px">
            <img src="https://cdn.alboompro.com/5f3c1f8725241f00012b0323_612bb08400ec9a000153763a/large/casamentodeluxo-dicasdecasamento-festadecasamento-decoracaodecasamento-9.jpg?v=1" alt="" width="500px" height="400px">
        </div>
        <div>
            <h4>EMPRESA</h4>
        </div>
        <a href="">
            <i>Quem Somos</i>
            <p>Existem eventos que são verdadeiramente especiais, e alguns lugares que se destacam pela sua singularidade. É o caso do Planeta Festival, um local encantador que cativa todos os que o visitam. Com um ambiente naturalmente rústico e sofisticado ao mesmo tempo, este espaço é capaz de proporcionar experiências únicas e inesquecíveis aos seus visitantes.</p>
        </a>


    </section>
    <article class="products">

        <div class="bloco">
            <img src="" alt="" class="divimage">
            <p class="description"></p>
            </img>
        </div>
    </article>
    <footer class="pe">
        <div id="borda">
        <div class="promo">
            <h3>Cadastre seu espaço para garantir clientes!</h3>
            
            <div>
            <img src="https://images.vexels.com/media/users/3/205157/isolated/preview/3a1d0d70d14ba68cd27271c889618e51-ilustracao-do-espaco-astronauta.png" alt="">   <a href="">
                Acesse Aqui
            </a>
            </div>
        </div>
        <button id="btnentrar">Entrar</button>
            <button id="btncadastrov">Cadastra-se</button>
        </div>
        
        <ul id="ulfooter">
            <li>All Access
                <ul class="listbelow">
                    <li>Seu plano ideal</li>
                </ul>
            </li>
            <li>
                Planeta Festival
                <ul class="listbelow">
                    <li>Conheça</li>
                    <li>Carreiras</li>
                    <li>Sala de Imprensa</li>
                    <li>Eventos</li>
                </ul>
            </li>
            <li>Atendimento
                <ul class="listbelow">
                    <li></li>
                    <li>Entre em contato</li>
                    <li>Perguntas frequentes</li>
                </ul>
            </li>
            <li>INFORMAÇÕES
                <ul class="listbelow">
                    <li>Termos de Serviço</li>
                    <li>Política de Privacidade</li>
                    <li>Política de Cookies</li>
                    <li>Regulamentos de Promoções</li>
                    <li>Regras de Convivências Membros WeWork</li>
                    <li>Código de Conduta Fornecedores</li>
                </ul>
            </li>
        </ul>
    </footer>
    <div></div>
    <script src="../TrabalhoProjetoDeSoftaware-main-2/ProjetoSoftware/js/script.js"></script>
</body>

</html>
