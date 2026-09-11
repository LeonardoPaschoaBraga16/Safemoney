<?php
$basePath = '../';
$activePage = 'materiais';
$pageTitle = 'Como utilizar o InvestmentTracker?';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Como utilizar o InvestmentTracker? - material educativo da SafeMoney.">
    <title>Como utilizar o InvestmentTracker? - SafeMoney</title>
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/materiais.css">
    <link rel="stylesheet" href="../../css/material.css">
    <script src="../../js/global.js" defer></script>
</head>
<body>
<?php include __DIR__ . '/../../components/header.php'; ?>

<main class="material-page">
    <section class="material-page__hero">
        <div class="container">
            <a class="material-page__back" href="../materiais.php">
                <span class="material-symbols-outlined" aria-hidden="true">arrow_back</span>
                Voltar para Materiais
            </a>
        </div>
    </section>

    <section class="section material-page__content">
        <div class="container">
            <article class="material-reader material-reader--standalone">
                <header class="material-reader__header">
                    <div class="material-reader__category">
                        <span class="material-symbols-outlined" aria-hidden="true">monitoring</span>
                        <span>SafeMoney</span>
                    </div>
                    <h1>Como utilizar o InvestmentTracker?</h1>
                    <div class="material-meta">
                        <span class="material-meta__item">
                            <span class="material-symbols-outlined" aria-hidden="true">schedule</span>
                            Em breve
                        </span>
                        <span class="material-meta__item">
                            <span class="material-symbols-outlined" aria-hidden="true">update</span>
                            Conteúdo em construção
                        </span>
                    </div>
                </header>


                <div class="material-article material-article--placeholder">
                    <div class="material-placeholder">
                        <span class="material-placeholder__icon material-symbols-outlined" aria-hidden="true">monitoring</span>
                        <h3>Conteúdo em construção</h3>
                        <p>
                            Esta página já está estruturada e vinculada ao catálogo de materiais.
                            O conteúdo completo deste tema será desenvolvido nesta etapa do projeto.
                        </p>
                    </div>
                </div>

                <nav class="material-pagination" aria-label="Navegação entre materiais">
                    <a class="pagination-button pagination-button--previous" href="como-analisar-um-investimento.php">
            <span class="material-symbols-outlined" aria-hidden="true">arrow_back</span>
            <span>Anterior</span>
        </a>
                    <a class="pagination-button pagination-button--next" href="glossario-financeiro.php">
            <span class="pagination-button__text">
                <span class="pagination-button__label">Próximo</span>
                Glossário financeiro
            </span>
            <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
        </a>
                </nav>
            </article>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../../components/footer.php'; ?>
</body>
</html>
