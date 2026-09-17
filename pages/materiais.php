<?php

$basePath = '../';
$activePage = 'materiais';

$pageTitle = 'Materiais';
$pageDescription = 'Materiais educativos da SafeMoney sobre investimentos, segurança e primeiros passos.';

$pageStyles = [
    'materiais.css',
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include __DIR__ . '/../components/head.php'; ?>
</head>

<body>

<?php include __DIR__ . '/../components/header.php'; ?>

<main class="materials-page">

    <section class="materials-hero">
        <div class="container materials-hero__content">
            <span class="materials-hero__eyebrow">
                Centro de Conhecimento
            </span>

            <h1 class="display-title">
                Nossos Materiais
            </h1>

            <p class="materials-hero__lead">
                Aprenda sobre investimentos de forma simples, organizada e no seu ritmo.
            </p>

            <p class="materials-hero__description">
                Explore os conteúdos abaixo e construa sua base de conhecimento antes de avançar
                para conceitos mais complexos.
            </p>
        </div>
    </section>

    <section class="materials-content section">
        <div class="container materials-content__grid">

            <aside class="materials-sidebar" aria-label="Categorias de materiais">
                <div class="materials-sidebar__inner">

                    <h2 class="materials-sidebar__title">
                        Materiais
                    </h2>

                    <div class="materials-menu">

                        <section class="material-group">
                            <h2 class="material-group__title">
                                Fundamentos
                            </h2>

                            <ul class="material-list">
                                <li>
                                    <a class="material-link" href="materiais/o-que-e-investir.php">
                                        <span
                                            class="material-link__icon material-symbols-outlined"
                                            aria-hidden="true"
                                        >
                                            auto_stories
                                        </span>

                                        <span>O que é investir?</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="material-link" href="materiais/por-que-investir.php">
                                        <span
                                            class="material-link__icon material-symbols-outlined"
                                            aria-hidden="true"
                                        >
                                            lightbulb
                                        </span>

                                        <span>Por que investir?</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="material-link" href="materiais/historia-dos-investimentos.php">
                                        <span
                                            class="material-link__icon material-symbols-outlined"
                                            aria-hidden="true"
                                        >
                                            history
                                        </span>

                                        <span>História dos investimentos</span>
                                    </a>
                                </li>
                            </ul>
                        </section>

                        <section class="material-group">
                            <h2 class="material-group__title">
                                Tipos de Investimento
                            </h2>

                            <ul class="material-list">
                                <li>
                                    <a class="material-link" href="materiais/tipos-de-investimentos.php">
                                        <span
                                            class="material-link__icon material-symbols-outlined"
                                            aria-hidden="true"
                                        >
                                            category
                                        </span>

                                        <span>Tipos de investimentos</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="material-link" href="materiais/renda-fixa.php">
                                        <span
                                            class="material-link__icon material-symbols-outlined"
                                            aria-hidden="true"
                                        >
                                            account_balance
                                        </span>

                                        <span>Renda Fixa</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="material-link" href="materiais/renda-variavel.php">
                                        <span
                                            class="material-link__icon material-symbols-outlined"
                                            aria-hidden="true"
                                        >
                                            trending_up
                                        </span>

                                        <span>Renda Variável</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="material-link" href="materiais/criptomoedas.php">
                                        <span
                                            class="material-link__icon material-symbols-outlined"
                                            aria-hidden="true"
                                        >
                                            currency_bitcoin
                                        </span>

                                        <span>Criptomoedas</span>
                                    </a>
                                </li>
                            </ul>
                        </section>

                        <section class="material-group">
                            <h2 class="material-group__title">
                                Segurança
                            </h2>

                            <ul class="material-list">
                                <li>
                                    <a class="material-link" href="materiais/riscos-dos-investimentos.php">
                                        <span
                                            class="material-link__icon material-symbols-outlined"
                                            aria-hidden="true"
                                        >
                                            warning
                                        </span>

                                        <span>Riscos dos investimentos</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="material-link" href="materiais/seguranca-ao-investir.php">
                                        <span
                                            class="material-link__icon material-symbols-outlined"
                                            aria-hidden="true"
                                        >
                                            shield
                                        </span>

                                        <span>Segurança ao investir</span>
                                    </a>
                                </li>
                            </ul>
                        </section>

                        <section class="material-group">
                            <h2 class="material-group__title">
                                Primeiros Passos
                            </h2>

                            <ul class="material-list">
                                <li>
                                    <a class="material-link" href="materiais/como-comecar-a-investir.php">
                                        <span
                                            class="material-link__icon material-symbols-outlined"
                                            aria-hidden="true"
                                        >
                                            rocket_launch
                                        </span>

                                        <span>Como começar a investir?</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="material-link" href="materiais/como-analisar-um-investimento.php">
                                        <span
                                            class="material-link__icon material-symbols-outlined"
                                            aria-hidden="true"
                                        >
                                            analytics
                                        </span>

                                        <span>Como analisar um investimento?</span>
                                    </a>
                                </li>
                            </ul>
                        </section>

                        <section class="material-group">
                            <h2 class="material-group__title">
                                SafeMoney
                            </h2>

                            <ul class="material-list">
                                <li>
                                    <a class="material-link" href="materiais/como-utilizar-o-investment-tracker.php">
                                        <span
                                            class="material-link__icon material-symbols-outlined"
                                            aria-hidden="true"
                                        >
                                            monitoring
                                        </span>

                                        <span>Como utilizar o InvestmentTracker?</span>
                                    </a>
                                </li>

                                <li>
                                    <a class="material-link" href="materiais/glossario-financeiro.php">
                                        <span
                                            class="material-link__icon material-symbols-outlined"
                                            aria-hidden="true"
                                        >
                                            menu_book
                                        </span>

                                        <span>Glossário financeiro</span>
                                    </a>
                                </li>
                            </ul>
                        </section>

                    </div>
                </div>
            </aside>

            <article class="material-reader">

                <header class="material-reader__header">

                    <div class="material-reader__category">
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            auto_stories
                        </span>

                        <span>Fundamentos</span>
                    </div>

                    <h2>O que é investir?</h2>

                    <div class="material-meta">

                        <span class="material-meta__item">
                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                schedule
                            </span>

                            5 min de leitura
                        </span>

                        <span class="material-meta__item">
                            <span
                                class="material-symbols-outlined"
                                aria-hidden="true"
                            >
                                update
                            </span>

                            Atualizado em 15 Out 2023
                        </span>

                    </div>
                </header>

                <div class="material-article">

                    <p>
                        Neste material vamos entender o que significa investir e por que as pessoas investem.
                        Investir, de forma simples, é colocar o seu dinheiro para trabalhar para você. Em vez
                        de deixar seu capital parado, perdendo valor para a inflação, você o aloca em ativos
                        que têm o potencial de gerar retornos ao longo do tempo.
                    </p>

                    <h3>
                        O Conceito de Investimento
                    </h3>

                    <p>
                        Muitas pessoas confundem poupar com investir. Poupar é simplesmente o ato de guardar
                        dinheiro, gastando menos do que se ganha. Já investir é pegar esse dinheiro poupado
                        e aplicá-lo com a expectativa de obter um rendimento. É a diferença entre guardar
                        sementes em um cofre e plantá-las em um solo fértil.
                    </p>

                    <aside class="material-highlight">

                        <span
                            class="material-highlight__icon material-symbols-outlined"
                            aria-hidden="true"
                        >
                            lightbulb
                        </span>

                        <div class="material-highlight__content">

                            <h4>
                                Ponto Chave
                            </h4>

                            <p>
                                O objetivo principal dos investimentos não é enriquecer da noite para o dia,
                                mas sim proteger o seu poder de compra e construir patrimônio de forma
                                consistente e sustentável no longo prazo.
                            </p>

                        </div>
                    </aside>

                    <h3>
                        Por que não deixar o dinheiro parado?
                    </h3>

                    <p>
                        A resposta curta é: <strong>Inflação</strong>. A inflação é o aumento generalizado
                        dos preços de bens e serviços. Quando a inflação acontece, o seu dinheiro perde
                        poder de compra. Investir é uma das ferramentas utilizadas para buscar proteção
                        contra esse efeito ao longo do tempo.
                    </p>

                    <figure class="material-image">
                        <div
                            class="material-image__placeholder"
                            role="img"
                            aria-label="Ilustração conceitual sobre crescimento financeiro"
                        ></div>
                    </figure>

                </div>

                <nav
                    class="material-pagination"
                    aria-label="Navegação entre materiais"
                >

                    <span
                        class="pagination-button pagination-button--disabled"
                        aria-disabled="true"
                    >
                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            arrow_back
                        </span>

                        Anterior
                    </span>

                    <a
                        class="pagination-button pagination-button--next"
                        href="materiais/por-que-investir.php"
                    >
                        <span class="pagination-button__text">
                            <span class="pagination-button__label">
                                Próximo
                            </span>

                            Por que investir?
                        </span>

                        <span
                            class="material-symbols-outlined"
                            aria-hidden="true"
                        >
                            arrow_forward
                        </span>
                    </a>

                </nav>

            </article>
        </div>
    </section>

    <section class="materials-cta">

        <div class="container">

            <div class="materials-cta__card">

                <div
                    class="materials-cta__decoration materials-cta__decoration--top"
                    aria-hidden="true"
                ></div>

                <div
                    class="materials-cta__decoration materials-cta__decoration--bottom"
                    aria-hidden="true"
                ></div>

                <div class="materials-cta__content">

                    <span
                        class="materials-cta__icon material-symbols-outlined"
                        aria-hidden="true"
                    >
                        monitoring
                    </span>

                    <h2>
                        Quer acompanhar o mercado?
                    </h2>

                    <p>
                        Conheça o InvestmentTracker e aprenda a acompanhar informações sobre diferentes
                        ativos com nossa ferramenta.
                    </p>

                    <a
                        class="button button--gold"
                        href="tracker.php"
                    >
                        Conhecer o InvestmentTracker
                    </a>

                </div>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/../components/footer.php'; ?>

</body>
</html>
