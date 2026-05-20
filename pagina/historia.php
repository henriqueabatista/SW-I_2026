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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titulo) ? $titulo . ' - ' : ''; ?>Neon Genesis Evangelion</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-eva sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">EVANGELION</a>
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
<header class="page-header">
    <div class="container">
        <h1>História do Anime</h1>
        <p>A jornada de Shinji Ikari e a batalha pela humanidade</p>
    </div>
</header>

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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
                        cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>

                <div class="timeline-item">
                    <h4>Arco 2: As Batalhas</h4>
                    <p>
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                        deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste 
                        natus error sit voluptatem accusantium doloremque laudantium, totam rem 
                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto 
                        beatae vitae dicta sunt explicabo.
                    </p>
                </div>

                <div class="timeline-item">
                    <h4>Arco 3: Revelações</h4>
                    <p>
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
                        dolore magnam aliquam quaerat voluptatem.
                    </p>
                </div>

                <div class="timeline-item">
                    <h4>Arco 4: A Verdade</h4>
                    <p>
                        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit 
                        laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure 
                        reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, 
                        vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                    </p>
                </div>

                <div class="timeline-item">
                    <h4>Arco Final: O Fim de Evangelion</h4>
                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias 
                        excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui 
                        officia deserunt mollitia animi, id est laborum et dolorum fuga.
                    </p>
                </div>

                <div class="content-box mt-5">
                    <h3>Conclusão</h3>
                    <p>
                        Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, 
                        cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod 
                        maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor 
                        repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum 
                        necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae 
                        non recusandae.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

    </main>

    <footer class="footer-eva">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <span class="eva-text">Neon Genesis Evangelion</span> - Fan Site</p>
            <p class="mt-2" style="font-size: 0.9rem;">
                Todos os direitos reservados à Gainax e Khara Inc.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

