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

    <?php 
$titulo = "Personagens";



$personagens = [
    [
        'nome' => 'Shinji Ikari',
        'subtitulo' => 'É o protagonista da série e o piloto do Evangelion Unidade-01. Marcado pelo abandono do pai (Gendo) e pela perda da mãe, Shinji é introspectivo, inseguro e traumatizado. Ele pilota os mechas não por heroísmo, mas pelo desejo desesperado de aprovação, afeto e para não ser abandonado novamente, tornando-se o ponto central dos dilemas psicológicos da história.',
        'imagem' => 'imagens/shinji.jpg'
    ],
    [
        'nome' => 'Rei Ayanami',
        'subtitulo' => 'A piloto do Evangelion Unidade-00. Rei é uma jovem extremamente enigmática, estoica e com pouquíssimas expressões emocionais. Ela possui uma lealdade cega a Gendo Ikari e um passado cercado de segredos industriais e existenciais. Ao longo da trama, sua convivência com Shinji a faz desenvolver um senso de individualidade e humanidade.',
        'imagem' => 'imagens/rei.jpg'
    ],
    [
        'nome' => 'Asuka Langley Soryu',
        'subtitulo' => 'A carismática e orgulhosa piloto do Evangelion Unidade-02. Vinda da Alemanha, Asuka é um prodígio, mas usa sua personalidade agressiva, competitiva e arrogante como uma armadura para esconder uma profunda carência emocional e traumas de infância terríveis. Ela busca constantemente provar sua autossuficiência e valor para o mundo.',
        'imagem' => 'imagens/asuka.jpg'
    ],
    [
        'nome' => 'Misato Katsuragi',
        'subtitulo' => 'A diretora de operações da NERV e guardiã legal de Shinji e Asuka. Profissionalmente, Misato é uma estrategista brilhante e destemida; em sua vida privada, porém, é desorganizada, dependente de álcool e emocionalmente bagunçada. Ela carrega cicatrizes profundas do Segundo Impacto e da relação complexa com seu próprio pai.',
        'imagem' => 'imagens/mistato.jpg'
    ],
    [
        'nome' => 'Gendo Ikari',
        'subtitulo' => 'O comandante da NERV e pai de Shinji. Gendo é um homem frio, calculista e implacável, que enxerga as pessoas (incluindo seu próprio filho) apenas como ferramentas para atingir seus objetivos. Toda a sua motivação secreta gira em torno do Projeto de Instrumentalidade Humana, que ele planeja moldar para reencontrar sua falecida esposa, Yui.',
        'imagem' => 'imagens/gendo.jpg'
    ],
    [
        'nome' => 'Kaworu Nagisa',
        'subtitulo' => 'O Quinto Enigmático (e o Décimo Sétimo Anjo, Tabris). Enviado pela SEELE à NERV, Kaworu possui uma natureza calma, empática e uma compreensão profunda da dor humana. Em pouco tempo, ele se torna a primeira pessoa a oferecer a Shinji um amor incondicional e genuíno, forçando o protagonista a enfrentar uma das escolhas mais dolorosas de sua vida.',
        'imagem' => 'imagens/kaworu.jpg'
    ]
];
?>


        <section class="hero-section">
            <img src="imagens/BANNER.jpg" alt="Neon Genesis Evangelion Banner" class="hero-image">
            <div class="hero-content">
                <h1 class="hero-title">Personagens</h1>
                <p class="hero-subtitle">Conheça os protagonistas desta épica história</p>
            </div>
        </section>

<section class="section-eva">
    <div class="container">
        <div class="row">
            <?php foreach ($personagens as $personagem): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card-eva">
                        <img src="<?php echo $personagem['imagem']; ?>" 
                             alt="<?php echo $personagem['nome']; ?>" 
                             class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $personagem['nome']; ?></h5>
                            <p class="card-text"><?php echo $personagem['subtitulo']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
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