<?php
$menuItems = [
    ['label' => 'Início', 'href' => 'index.php'],
    ['label' => 'História', 'href' => 'historia.php'],
    ['label' => 'Personagens', 'href' => 'personagens.php'],
    ['label' => 'Franquia', 'href' => 'franquia.php'],
    ['label' => 'Contato', 'href' => 'contato.php'],
];

$paginaAtual = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titulo) ? $titulo . ' - ' : ''; ?>Neon Genesis Evangelion</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link href="estilo.css" rel="stylesheet">
</head>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-eva sticky-top">
        <div class="container">
            <div class="imglogo">
            <a class="navbar-brand" href="index.php">EVANGELION</a>
                
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php foreach ($menuItems as $item): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($paginaAtual == $item['href']) ? 'active' : ''; ?>" href="<?php echo $item['href']; ?>">
                                <?php echo $item['label']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>

 

        <section class="hero-section">
            <img src="imagens/BANNER.jpg" alt="Neon Genesis Evangelion Banner" class="hero-image">
            <div class="hero-content">
                <h1 class="hero-title">A Franquia</h1>
                <p class="hero-subtitle">O universo expandido de Evangelion</p>
            </div>
        </section>



<section class="section-eva">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <p class="section-description">
                    Desde seu lançamento em 1995, Neon Genesis Evangelion se expandiu muito além 
                    da série original de anime, tornando-se uma das franquias mais lucrativas e 
                    influentes da história da animação japonesa. A marca abrange diversos tipos 
                    de mídia e produtos, consolidando seu status como um fenômeno cultural global.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="franchise-item">
                    <div class="franchise-icon"></div>
                    <h4>Série Original (1995)</h4>
                    <p>
                        A série de TV original com 26 episódios que revolucionou o gênero mecha. 
                        Transmitida pela TV Tokyo, a série ganhou um cult following imenso e é 
                        considerada uma das obras mais influentes da animação japonesa.
                    </p>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="franchise-item">
                    <div class="franchise-icon"></div>
                    <h4>Filmes Teatrais</h4>
                    <p>
                        Inclui Death & Rebirth (1997), The End of Evangelion (1997) e a tetralogia 
                        Rebuild of Evangelion (2007-2021), que reimagina a história com novos 
                        elementos visuais e narrativos impressionantes.
                    </p>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="franchise-item">
                    <div class="franchise-icon"></div>
                    <h4>Mangás</h4>
                    <p>
                        O mangá oficial, ilustrado por Yoshiyuki Sadamoto, foi publicado de 1994 
                        a 2013. Embora baseado no anime, apresenta diferenças significativas na 
                        narrativa e desenvolvimento dos personagens.
                    </p>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="franchise-item">
                    <div class="franchise-icon"></div>
                    <h4>Videogames</h4>
                    <p>
                        Diversos jogos foram lançados para várias plataformas, desde visual novels 
                        até jogos de ação e estratégia. A franquia também marca presença em jogos 
                        de crossover como Super Robot Wars.
                    </p>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="franchise-item">
                    <div class="franchise-icon"></div>
                    <h4>Trilhas Sonoras</h4>
                    <p>
                        Compostas por Shiro Sagisu, as trilhas sonoras de Evangelion são aclamadas 
                        mundialmente. O tema de abertura "A Cruel Angel's Thesis" se tornou um 
                        hino do anime e continua popular até hoje.
                    </p>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="franchise-item">
                    <div class="franchise-icon"></div>
                    <h4>Merchandising</h4>
                    <p>
                        A franquia possui uma linha extensa de produtos oficiais, incluindo figures, 
                        roupas, acessórios e colaborações com marcas famosas. Os modelos de EVA são 
                        particularmente populares entre colecionadores.
                    </p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <div class="content-box">
                    <h3>Legado Cultural</h3>
                    <p>
                        Neon Genesis Evangelion transcendeu o status de simples anime para se tornar 
                        um fenômeno cultural. Sua influência pode ser vista em inúmeras obras 
                        posteriores, desde animes e mangás até filmes live-action ocidentais. A série 
                        é frequentemente citada em discussões sobre arte, filosofia e psicologia na 
                        mídia, e continua atraindo novos fãs décadas após seu lançamento original. 
                        O impacto de Evangelion na indústria de animação e na cultura pop japonesa 
                        é imensurável, solidificando sua posição como uma das obras mais importantes 
                        do entretenimento japonês.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

</main>


<footer class="footer-eva">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <span class="eva-text">Neon Genesis Evangelion</span> Site de Fã</p>
            <p class="mt-2" style="font-size: 0.9rem;">
              
            </p>
        </div>
    </footer >

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
