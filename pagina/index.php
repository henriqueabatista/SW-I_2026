<?php
$menuItems = [
    ['label' => 'Início', 'href' => 'index.php'],
    ['label' => 'História', 'href' => 'historia.php'],
    ['label' => 'Personagens', 'href' => 'personagens.php'],
    ['label' => 'Franquia', 'href' => 'franquia.php'],
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
                <a href="index.php">
                    <img src="imagens/logo.webp" alt="">
                </a>
                
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

    <main>
        <section class="hero-section">
            <img src="imagens/BANNER.jpg" alt="Neon Genesis Evangelion Banner" class="hero-image">
            <div class="hero-content">
                <h1 class="hero-title">NEON GENESIS EVANGELION</h1>
                <p class="hero-subtitle">A obra-prima que redefiniu o gênero mecha</p>
            </div>
        </section>

        <section class="section-eva">
            <div class="container">
                <div class="section-title-wrapper">
                    <h2 class="section-title">Sobre o Anime</h2>
                </div>
                <p class="section-description">
                    Neon Genesis Evangelion é uma série de anime japonesa 
                    criada pelo estúdio Gainax e dirigida por Hideaki Anno. Lançada em 1995, a série 
                    revolucionou o gênero mecha ao combinar ação intensa com profundas explorações 
                    psicológicas e filosóficas.
                </p>
                
                <div class="row mt-5">
                    <div class="col-lg-6 mb-4">
                        <div class="content-box">
                            <h3>A Premissa</h3>
                            <p>
                                Em um futuro pós-apocalíptico, a humanidade enfrenta criaturas gigantescas 
                                conhecidas como Anjos. A organização NERV é responsável por combater essa 
                                ameaça utilizando robôs biomecânicos chamados Evangelions, pilotados por 
                                adolescentes selecionados. A história acompanha Shinji Ikari, um jovem 
                                convocado por seu pai distante para pilotar o EVA-01.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="content-box">
                            <h3>Temas e Impacto</h3>
                            <p>
                                Evangelion é conhecido por sua profunda exploração de temas como depressão, 
                                ansiedade, trauma e a natureza humana. A série desconstrói os clichês do 
                                gênero mecha, apresentando personagens complexos e moralmente ambíguos. 
                                Seu impacto cultural é imenso, influenciando inúmeras obras posteriores 
                                e se tornando um ícone da cultura pop japonesa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-eva alt">
            <div class="container">
                <div class="section-title-wrapper">
                    <h2 class="section-title">Por que assistir?</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="franchise-item text-center">
                            <div class="franchise-icon"></div>
                            <h4>Mechas Icônicos</h4>
                            <p>
                                Os Evangelions possuem designs únicos e memoráveis, combinando 
                                elementos orgânicos e mecânicos de forma inovadora.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="franchise-item text-center">
                            <div class="franchise-icon"></div>
                            <h4>Profundidade Psicológica</h4>
                            <p>
                                Uma análise complexa da psique humana, explorando medos, 
                                traumas e a busca por conexão genuína.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="franchise-item text-center">
                            <div class="franchise-icon"></div>
                            <h4>Trilha Sonora Épica</h4>
                            <p>
                                Composições memoráveis de Shiro Sagisu que elevam cada 
                                cena, incluindo o icônico tema "A Cruel Angel's Thesis".
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