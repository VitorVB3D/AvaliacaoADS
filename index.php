<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Soul Orteses</title>
    <meta charset="utf-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fonte para Mwnu-->
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Zilla+Slab:wght@600&display=swap"
        rel="stylesheet">

    <style>
        .hide-element {
            border: 0;
            clip: rect(1px 1px 1px 1px);
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        .alignn {
            display: block;

            margin-top: auto;
            margin-bottom: auto;
        }

        .menuFont {
            font-family: 'Zilla Slab', serif;
            font-size: 24px;
            font-weight: 400;
        }

        .fonte2 {
            font-family: 'Dancing Script', cursive;
            font-size: 36px;
            font-weight: 100;

        }

    </style>

<body>
    <!-- MENU DE ACESSIBILIDADE-->
    <section class="container mx-auto ml-2 mr-2 mt-1 w-90" aria-labelledby="barra_acessibilidade">

        <header class="row">
            <!-- oculte a barra de acessibilidade -->
            <nav class="hide-element col-md " id="barra_acessibilidade">
                <ul id="atalhos">
                    <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
                    <li><a href="#Resumo" accesskey="2">Ir para formulário [2]</a></li>
                </ul>
            </nav>


            <div class="alignn col-sm- col-sm-3">
                <img src="Orteses.png"
                    alt="Logotipo da empresa com uma impressora 3D imprimindo uma ortese do tipo AFO." width="80">
            </div>
            <div class=" col-sm-6">
                <h1>Soul Órteses</h1>
                <div class="fonte2">
                    <p>Liberdade para quem necessita !
                    </p>
                </div>

            </div>

        </header>



        <article class="row col-12">

            <!-- oculte o header abaixo -->
            <header class="d-none">
                <h2 id="menu">Menu</h2>
            </header>

            <!--menu responsivo-->

            <aside>
                <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light ml-5 mr-1 w-auto p-3">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarTogglerDemo03" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0 menuFont ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(Página atual)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="coleta_dados.html">Coleta de dados</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="Imprecao_3D.html">Impressão-3D</a>
      
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="resultados.html">Resultados</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contato.html">Contato</a>
                            </li>
      
                        </ul>

                    </div>

                </nav>


            </aside>
        </article>

        <section class="navbar navbar-expand-lg navbar-expand-sm ml-2 mr-2 w-auto p-3 ml-2 mr-2 mt-1 w-90">

            <div class="navbar navbar-expand-lg navbar-expand-sm ml-2 mr-2 w-auto p-3 ml-2 mr-2 mt-1 w-90 bg-warning">
                <img src="Maria_Eduarda.jpeg" alt="criança com uma ortese do tipo AFO articulada impressa em 3D."
                    width="300">
                <div>
                    <h3 class="text-center">Resumo</h3>
                    <p id="Resumo"
                        class="text-justify navbar navbar-expand-lg navbar-expand-sm ml-2 mr-2 w-auto p-3 ml-2 mr-2 mt-1 w-90">
                        O projeto em si visa a criação de um processo de confecção de órteses que diminua<br>
                        o tempo de coleta de dados, criação, confecção e entrega de órteses personalizadas <br>
                        de acordo com a patologia do paciente de alta qualidade com preço competitivo. <br>
                        Inicialmente iremos trabalhar com órteses do tipo AFO que serão produzidas pelo processo de
                        <br>
                        manufatura aditiva (impressão 3d), para diminuir o tempo de produção e melhorar a qualidade
                        das
                        órteses.<br>
                        A criação das órteses será baseada no pedido médico, utilizando a indicação prescrita para
                        criação<br>
                        da órtese, a aquisição do modelo 3d do membro do paciente é a base da criação da peça e pode
                        ser
                        obtido por<br>
                        criação de modelos tridimensionais a partir de fotos aplicando técnica de fotogrametria,
                        ressonância magnética,<br>
                        tomografia computadorizada, escaneamento 3d, este último pode ser obtido por qualquer tipo
                        de
                        scanner desde o de <br>
                        baixo custo até scanners de alto desempenho. <br>
                        Temos nosso protótipo conceitual modelado em 3D e impresso faltando testes <br>

                    </p>
                </div>
            </div>
        </section>
       
    </section>
    <footer class="ml-2 mr-2 w-auto p-1 ml-5 mr-2 mt-5 w-90">
        <div class="cool-12">
            <p>Copyright © 2021</p>
        </div>
        <div>
            <div style="float:left; width:33%"><img src="crianças1.png "
                    alt="desenho de crianças com algun tipo de deficiência brincando e correndo." width="100"></div>
            <div style="float:left; width:33%"><img src="crianças2.png"
                    alt="desenho de crianças cadeirantes brincando e correndo." width="100"></div>
            <div style="float:left; width:33%"><img src="crianças1.png"
                    alt="desenho de crianças com algun tipo de deficiência brincando e correndo." width="100"></div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <noscript>Atualize seu navegador</noscript>

    <noscript>Atualize seu navegador</noscript>

</body>

</html>