<?php include "bd/funcoes.php"?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monark's Legacy</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/programas.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/membros.css">
    <link rel="stylesheet" href="css/sobre.css">
    <link rel="stylesheet" href="css/celular.css">
</head>

<body>
    <!--HEADER-->
    <header>
        <h2 id="titulo">Monark's Legacy</h2>
        <nav>
            <ul id="lista">
                <li class="item"><a href="">Home</a></li>
                <li class="item"><a href="#programas">Programas</a></li>
                <li class="item"><a href="#sobre">Sobre</a></li>
                <li class="item"><a href="#membro">Seja Membro!</a></li>
            </ul>
        <!--NAV-->
        </nav>
        <div id="vazio">
        </div>
    </header>
    <hr>
    <!--MAIN-->
    <main>


        <!--PROGRAMAS-->
        <div id="programas" class="partes">
            <div class="titulo-partes">
                <h1>Programas</h1>
                <img src="img/icon/mic.svg" alt="" class="icon">
            </div>
            <ul class="programas-list">
            <?php 

            for ($i=1; $i - 1 < contarProgramas(); $i++) { 
                $programaInfo = programas($i);
                $programa = $programaInfo[0];
                $texto_programa = $programaInfo[1];

                echo '
                    <li class="programas-list-item">
                            <div class="programa-visual">
                                <h2>'.$programa.'</h2>
                                <a href="" class="programas-link">
                                    <img src="img/programas/'.strtolower($programa).'.jpg" alt="">
                                </a>
                            </div>
                            <div class="programa-texto">
                                <p>'.$texto_programa.'</p>
                            </div>
                    </li>
                ';
            };
            
            ?>
            </ul>
        </div>


        <!--SOBRE-->
        <div id="sobre" class="partes">
            <div class="titulo-partes">
                <h1>Sobre</h1>
                <img src="img/icon/pessoas.svg" alt="" class="icon">
            </div>
            <div>
                <p>Aqui no podcast, falamos sobre filmes, jogos e todos os tipos de conversas, com a liberdade de explorar sem restrições. <br> <br>
                A nossa plataforma é um espaço onde conseguimos conectar diretamente com o público, e onde a nossa voz é ouvida. Sua contribuição é fundamental para manter nossa independência e garantir que possamos continuar produzindo episódios de qualidade.</p>
            </div>
            <img src="img/arte.jpg" alt="">
        </div>


        <!--MEMBRO-->
        <div id="membro" class="partes">
            <div class="titulo-partes">
                <h1>Seja Membro!</h1>
                <img src="img/icon/dinheiro.svg" alt="" class="icon">
            </div>
            <div>
                <ul>
                    <?php 
                    for ($i=1; $i - 1 < contarPlanos(); $i++) { 
                        $planoInfo = planos($i);

                        $plano = $planoInfo[0];
                        $preco = $planoInfo[1];
                        $texto_plano = $planoInfo[2];


                        echo'
                            <li>
                                <div>
                                    <h2>Plano '.$plano.'</h2>
                                    <h1>R$'.$preco.'</h1>
                                    <p>'.$texto_plano.'</p>
                                </div>
                                <div>
                                    <button><h4>Quero esse!</h4></button>
                                </div>
                            </li>
                        ';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </main>

    <!--FOOTER-->
</body>
</html>