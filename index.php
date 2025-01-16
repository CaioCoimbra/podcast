<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podcast Caio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/programas.css">
    <link rel="stylesheet" href="css/header.css">
</head>

<body>
    <header>
        <h2 id="titulo">Podcast</h2>
        <nav>
            <ul id="lista">
                <li class="item"><a href="">Home</a></li>
                <li class="item"><a href="#programas">Programas</a></li>
                <li class="item"><a href="#sobre">Sobre</a></li>
                <li class="item"><a href="#membro">Seja Membro!</a></li>
            </ul>
        </nav>
        <div id="vazio">
        </div>    
    </header>
    <hr>
    <main>
        <div id="programas" class="partes">
            <div>
                <h1>Programas</h1>
            </div>
            <ul class="programas-list">
                <?php 
                    #variaveis
                    $programa;
                    $sinopse;

                    echo '
                    <li class="programas-list-item">
                        <a href="" class="programas-link">
                            <div class="programa-visual">
                                <h2>'.$programa.'</h2>
                                <img src="img/'.$programa.'/deafult.jpg" alt="">
                            </div>
                            <div class="programa-texto">
                                <p>'.$sinopse.'</p>
                            </div>
                        </a>
                    </li>'
                ?>
            </ul>
        </div>
        <div id="sobre" class="partes">
            <h1>Sobre</h1>
        </div>
        <div id="membro" class="partes">
            <div>
                <h1>Seja Membro!</h1>
            </div>
            <div>
                <ul>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>
        </div>
    </main>
    <footer>
        
    </footer>
</body>

</html>