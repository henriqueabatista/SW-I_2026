<?php
// Configuração do menu idêntica ao index.php
$menuItems = [
    ['label' => 'Início', 'href' => 'index.php'],
    ['label' => 'História', 'href' => 'historia.php'],
    ['label' => 'Personagens', 'href' => 'personagens.php'],
    ['label' => 'Franquia', 'href' => 'franquia.php'],
    ['label' => 'Contato', 'href' => 'contato.php'],
];

$paginaAtual = basename($_SERVER['PHP_SELF']);
$titulo = "Contato"; 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titulo) ? $titulo . ' - ' : ''; ?>Neon Genesis Evangelion</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link href="estilo.css" rel="stylesheet">
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
                <h1 class="hero-title">Contato</h1>
                <p class="hero-subtitle">Entre em contato com nós</p>
            </div>
        </section>

        <section class="section-eva">
            <div class="container">
                <div class="row g-5">
                    
                    <div class="col-lg-5">
                        <div class="content-box h-100">
                            <h3>Canais de Comunicação</h3>
                            <p class="mb-4">Se você tem dúvidas sobre a lore do anime, sugestões de conteúdo ou quer relatar um erro na sincronização das páginas, use o formulário ao lado ou as informações abaixo:</p>
                            
                            <div class="contact-info-item">
                                <h5>E-mail Oficial</h5>
                                <p>nerv-hq@gehirn.jp</p>
                            </div>
                            
                            <div class="contact-info-item">
                                <h5>Localização</h5>
                                <p>GeoFront - Tokyo-3, Japão</p>
                            </div>

                            <div class="contact-info-item">
                                <h5>Status do Sistema</h5>
                                <p style="color: var(--eva-green) !important;">MAGI 1, 2 e 3: Operacionais</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="card-eva p-4 p-md-5">
                            <h3 class="text-start mb-4" style="color: var(--eva-green);">Enviar Mensagem</h3>
                            
                            <form action="#" method="POST">
                                <div class="mb-3">
                                    <label for="nome" class="form-label" style="color: var(--eva-light); opacity: 0.9;">Nome Completo</label>
                                    <input type="text" class="form-control form-control-eva" id="nome" name="nome" placeholder="Ex: Shinji Ikari" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="email" class="form-label" style="color: var(--eva-light); opacity: 0.9;">Endereço de E-mail</label>
                                    <input type="email" class="form-control form-control-eva" id="email" name="email" placeholder="nome@exemplo.com" required>
                                </div>

                                <div class="mb-3">
                                    <label for="assunto" class="form-label" style="color: var(--eva-light); opacity: 0.9;">Assunto</label>
                                    <input type="text" class="form-control form-control-eva" id="assunto" name="assunto" placeholder="Ex: Sugestão de novos personagens" required>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="mensagem" class="form-label" style="color: var(--eva-light); opacity: 0.9;">Mensagem</label>
                                    <textarea class="form-control form-control-eva" id="mensagem" name="mensagem" rows="5" placeholder="Digite seu texto aqui..." required></textarea>
                                </div>
                                
                                <div class="text-end">
                                    <button type="submit" class="btn btn-eva">Transmitir Dados</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="footer-eva">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <span class="eva-text">Neon Genesis Evangelion</span> Site de Fã</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>