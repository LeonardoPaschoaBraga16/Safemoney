<?php
$basePath = '';
$activePage = 'tracker';
$pageTitle = 'InvestmentTracker';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="InvestmentTracker da SafeMoney.">
    <title>InvestmentTracker - SafeMoney</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/tracker.css">
    <script src="../js/global.js" defer></script>
</head>
<body>
<?php include __DIR__ . '/../components/header.php'; ?>

<main class="tracker-page">
    <section class="tracker-page__hero">
        <div class="container tracker-page__content">
            <span class="eyebrow">Ferramenta SafeMoney</span>
            <h1 class="display-title">InvestmentTracker</h1>
            <p class="section-text">
                Uma ferramenta para acompanhar informações sobre ativos financeiros de forma simples,
                visual e organizada.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="tracker-page__card">
                <!--
                <span class="tracker-page__icon material-symbols-outlined" aria-hidden="true">monitoring</span>
                <h2 class="section-title">Módulo em desenvolvimento</h2>
                <p class="section-text">
                    A estrutura visual está preparada. A integração com a API, tratamento dos dados,
                    gráficos e demais funcionalidades do InvestmentTracker serão implementados na próxima etapa.
                </p>
                <a class="button button--primary" href="materiais.php">Voltar aos materiais</a> -->
                
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../components/footer.php'; ?>
</body>
</html>
