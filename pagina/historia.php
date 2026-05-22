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


    <main>
        <section class="hero-section">
            <img src="imagens/BANNER.jpg" alt="Neon Genesis Evangelion Banner" class="hero-image">
            <div class="hero-content">
                <h1 class="hero-title">História do Anime</h1>
                <p class="hero-subtitle">A jornada de Shinji Ikari e a batalha pela humanidade</p>
            </div>
        </section>

<section class="section-eva">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="content-box mb-4">
                    <h3>O Início de Tudo</h3>
                    <p>
                        A história se passa no ano de 2015, quinze anos após um evento catastrófico 
                        conhecido como Segundo Impacto, que dizimou metade da população mundial. 
                        Shinji Ikari, um jovem de 14 anos, é convocado à cidade fortaleza de Tokyo-3 
                        por seu pai, Gendo Ikari, comandante da organização paramilitar NERV.
                    </p>
                </div>

                <div class="timeline-item">
                    <h4>Arco 1: O Chamado</h4>
                    <p>
                        Ao chegar em Tokyo-3 durante o ataque do Terceiro Anjo, Shinji é forçado por seu pai a 
                        pilotar a unidade Evangelion-01 (EVA-01). Apesar do extremo trauma psicológico e da 
                        rejeição inicial, ele assume o posto. Neste arco inicial de introdução, Shinji passa a morar 
                        com a Major Misato Katsuragi, conhece a misteriosa e silenciosa piloto do EVA-00, Rei Ayanami, 
                        e começa a se adaptar à dolorosa rotina de ser o salvador do que restou do mundo.
                    </p>
                </div>

                <div class="timeline-item">
                    <h4>Arco 2: As Batalhas</h4>
                    <p>
                        A dinâmica em Tokyo-3 muda drasticamente com a chegada da extravagante piloto alemã da 
                        Unidade-02, Asuka Langley Soryu. Este período equilibra momentos de ação intensa e humor 
                        com táticas de combate sincronizadas para derrotar Anjos cada vez mais complexos. 
                        No entanto, sob a superfície de trabalho em equipe, a pressão psicológica cresce, e as 
                        barreiras emocionais dos três pilotos começam a dar os primeiros sinais de desgaste.
                    </p>
                </div>

                <div class="timeline-item">
                    <h4>Arco 3: Revelações</h4>
                    <p>
                        O tom do anime escurece profundamente. O aparecimento de Anjos que atacam diretamente a psique 
                        dos pilotos desmorona a pouca estabilidade que restava. Asuka entra em uma depressão profunda 
                        após perder seu sincronismo, o passado sombrio da NERV começa a vir à tona e segredos assustadores 
                        sobre os clones de Rei Ayanami e a real natureza biológica dos Evangelions são brutalmente expostos.
                    </p>
                </div>

                <div class="timeline-item">
                    <h4>Arco 4: A Verdade</h4>
                    <p>
                        Isolado e desesperado, Shinji encontra conforto temporário em Kaworu Nagisa, o Quinto Escolhido. 
                        Contudo, a breve conexão se transforma em tragédia quando Kaworu revela ser o Décimo Sétimo Anjo, 
                        obrigando Shinji a tomar a decisão mais difícil de sua vida. Os episódios finais da série de TV (25 e 26) 
                        abandonam o plano físico e mergulham inteiramente em uma sessão de introspecção psicológica, discutindo 
                        o dilema do porco-espinho e a busca de Shinji por autoaceitação.
                    </p>
                </div>

                <div class="timeline-item">
                    <h4>Arco Final: O Fim de Evangelion</h4>
                    <p>
                        Para dar o fechamento definitivo aos eventos apocalípticos da realidade, o filme *The End of Evangelion* mostra o colapso físico da NERV sob o ataque das forças da SEELE. Gendo Ikari tenta iniciar o Projeto de 
                        Instrumentalidade Humana, que visa fundir todas as mentes humanas em uma única consciência para extinguir a dor 
                        da solidão. O destino de toda a existência cai nas mãos do fragilizado Shinji Ikari, que deve escolher entre o 
                        vazio perfeito da fusão ou a dor inerente de ser um indivíduo livre.
                    </p>
                </div>

                <div class="content-box mt-5">
                    <h3>Conclusão</h3>
                    <p>
                        Neon Genesis Evangelion transcende o conceito tradicional de robôs gigantes para se consolidar como um tratado 
                        sobre a dor de existir, a depressão e a busca por conexões reais em um mundo que machuca. Ao final da jornada, 
                        a obra de Hideaki Anno nos deixa com a poderosa lição de que, enquanto houver sol, lua e terra, qualquer lugar 
                        pode se tornar um paraíso se tivermos a vontade de viver e aceitarmos nossa própria identidade.
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