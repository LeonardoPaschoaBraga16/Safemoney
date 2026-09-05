<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SafeMoney — educação financeira simples e acessível para ajudar você a entender melhor seus investimentos.">
    <title>SafeMoney - Aprenda a Investir</title>

    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/global.css">
</head>

<body>

    <?php include '../components/header.php'; ?>

    <main>
        <section class="hero section">
            <div class="container hero__grid">
                <div class="hero__content">
                    <h1 class="display-title">
                        APRENDA A <span class="text-accent">INVESTIR</span>
                    </h1>

                    <p class="hero__description">
                        Conhecimento financeiro simples e acessível para ajudar você a entender melhor seus investimentos.
                        Aprenda, acompanhe e tome decisões mais conscientes.
                    </p>

                    <div class="hero__actions">
                        <a class="button button--primary button--large" href="materiais.html">Começar agora</a>
                        <a class="button button--outline button--large" href="sobre.html">Conheça a SafeMoney</a>
                    </div>
                </div>

                <div class="hero__visual" aria-hidden="true">
                    <div class="hero__visual-card">
                        <div class="hero__visual-image"></div>
                    </div>
                    <div class="hero__decoration hero__decoration--gold"></div>
                    <div class="hero__decoration hero__decoration--navy"></div>
                </div>
            </div>

            <div class="scroll-indicator" aria-hidden="true">
                <span>Role para baixo</span>
                <span class="material-symbols-outlined">arrow_downward</span>
            </div>
        </section>

        <section class="section section--surface">
            <div class="container tracker-preview">
                <div class="tracker-preview__visual">
                    <img
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAM5VB_Lc1FFiukwSWRmlEWpmZH_xrPyH86dgalmM_iRKcnp8FofmuZIKd_eFm4q-EErz6_DtwtwruWwqWB4ULKWHIHb7DIBQduKZ73bQw6U5zj-fYlhL_DoaodI5RL-cgiBeY6IhMxKwSiRDB_W6QbAHuY8BYo9rMqoAVbDMq8Nly-vOUozx_rSH1Xgppt0g-Xm0r63m2hbIOTsEz2GAEhhnY6YwxATWyHXIcASdtJpZumpzWDXn2XMQ"
                        alt="Prévia do painel do InvestmentTracker"
                    >
                </div>

                <div class="tracker-preview__content">
                    <h2 class="section-title">InvestmentTracker</h2>
                    <p class="section-text">
                        Acompanhe a variação de ativos financeiros e visualize seus valores de forma simples e organizada.
                    </p>
                    <a class="button button--primary button--large" href="tracker.html">
                        Conheça o InvestmentTracker
                    </a>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section-title section-title--center">Nossas Soluções</h2>

                <div class="solution-grid">
                    <article class="solution-card">
                        <div class="solution-card__icon solution-card__icon--navy">
                            <span class="material-symbols-outlined" aria-hidden="true">school</span>
                        </div>
                        <h3 class="card-title">Aprenda</h3>
                        <p class="card-text">
                            Materiais educativos claros e diretos para construir sua base de conhecimento financeiro.
                        </p>
                    </article>

                    <article class="solution-card">
                        <div class="solution-card__icon solution-card__icon--gold">
                            <span class="material-symbols-outlined" aria-hidden="true">lightbulb</span>
                        </div>
                        <h3 class="card-title">Simplifique</h3>
                        <p class="card-text">
                            Descomplicamos o jargão do mercado para que você entenda exatamente onde está investindo.
                        </p>
                    </article>

                    <article class="solution-card">
                        <div class="solution-card__icon solution-card__icon--navy">
                            <span class="material-symbols-outlined" aria-hidden="true">monitoring</span>
                        </div>
                        <h3 class="card-title">Acompanhe</h3>
                        <p class="card-text">
                            Ferramentas práticas para visualizar o desempenho dos seus ativos ao longo do tempo.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section--muted proposal">
            <div class="container proposal__grid">
                <div class="proposal__content">
                    <h2 class="section-title">Nossa Proposta</h2>
                    <p class="section-text">
                        Acreditamos que a educação financeira não deve ser um privilégio. Nossa missão é reduzir as barreiras
                        de entrada no mundo dos investimentos, oferecendo informações de forma transparente e fácil de digerir.
                    </p>
                    <p class="section-text">
                        Queremos capacitar você a tomar o controle do seu futuro financeiro com confiança, sem a necessidade
                        de jargões complexos ou promessas irreais.
                    </p>
                </div>

                <div class="proposal__visual" aria-hidden="true">
                    <div class="proposal__circle">
                        <div class="proposal__circle-inner">
                            <span class="material-symbols-outlined proposal__icon">public</span>
                            <div class="proposal__image"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--surface">
            <div class="container">
                <div class="materials-heading">
                    <div>
                        <h2 class="section-title">Nossos Materiais</h2>
                        <p class="section-text section-text--wide">
                            Conteúdos essenciais para iniciar sua jornada.
                        </p>
                    </div>

                    <a class="text-link materials-heading__link" href="materiais.html">
                        Ver todos os materiais
                        <span class="material-symbols-outlined" aria-hidden="true">arrow_forward</span>
                    </a>
                </div>

                <div class="materials-grid">
                    <a class="material-card" href="materiais.html">
                        <div class="material-card__cover material-card__cover--navy">
                            <span class="material-symbols-outlined" aria-hidden="true">rocket_launch</span>
                        </div>
                        <div class="material-card__content">
                            <span class="material-card__type">Artigo</span>
                            <h3>Começando a investir</h3>
                        </div>
                    </a>

                    <a class="material-card" href="materiais.html">
                        <div class="material-card__cover material-card__cover--gold">
                            <span class="material-symbols-outlined" aria-hidden="true">help_center</span>
                        </div>
                        <div class="material-card__content">
                            <span class="material-card__type">Guia</span>
                            <h3>O que é investir?</h3>
                        </div>
                    </a>

                    <a class="material-card" href="materiais.html">
                        <div class="material-card__cover material-card__cover--navy">
                            <span class="material-symbols-outlined" aria-hidden="true">category</span>
                        </div>
                        <div class="material-card__content">
                            <span class="material-card__type">Infográfico</span>
                            <h3>Tipos de investimento</h3>
                        </div>
                    </a>

                    <a class="material-card" href="materiais.html">
                        <div class="material-card__cover material-card__cover--gold">
                            <span class="material-symbols-outlined" aria-hidden="true">shield</span>
                        </div>
                        <div class="material-card__content">
                            <span class="material-card__type">Vídeo</span>
                            <h3>Segurança ao investir</h3>
                        </div>
                    </a>
                </div>

                <div class="materials-mobile-link">
                    <a class="text-link" href="materiais.html">Ver todos os materiais</a>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="container cta__content">
                <h2 class="cta__title">Comece a entender seus investimentos.</h2>
                <a class="button button--gold button--large" href="materiais.html">Começar agora</a>
            </div>
        </section>

    </main>

    <?php include '../components/footer.php'; ?>

    <script src="../js/global.js" defer></script>
</body>
</html>
