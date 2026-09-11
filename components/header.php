<?php
$basePath = $basePath ?? '';
$activePage = $activePage ?? '';
$pageTitle = $pageTitle ?? 'SafeMoney';
?>
<header class="site-header">
    <div class="container site-header__inner">
        <a class="logo" href="<?= htmlspecialchars($basePath) ?>index.php" aria-label="SafeMoney - Página inicial">
            <span class="logo__symbol">$</span>afeMoney
        </a>

        <nav class="main-nav" id="main-navigation" aria-label="Navegação principal">
            <a class="main-nav__link <?= $activePage === 'home' ? 'main-nav__link--active' : '' ?>"
               href="<?= htmlspecialchars($basePath) ?>index.php"
               <?= $activePage === 'home' ? 'aria-current="page"' : '' ?>>
                Home
            </a>

            <a class="main-nav__link <?= $activePage === 'sobre' ? 'main-nav__link--active' : '' ?>"
               href="<?= htmlspecialchars($basePath) ?>sobre.php"
               <?= $activePage === 'sobre' ? 'aria-current="page"' : '' ?>>
                Sobre Nós
            </a>

            <a class="main-nav__link <?= $activePage === 'objetivos' ? 'main-nav__link--active' : '' ?>"
               href="<?= htmlspecialchars($basePath) ?>objetivos.php"
               <?= $activePage === 'objetivos' ? 'aria-current="page"' : '' ?>>
                Objetivos
            </a>

            <a class="main-nav__link <?= $activePage === 'materiais' ? 'main-nav__link--active' : '' ?>"
               href="<?= htmlspecialchars($basePath) ?>materiais.php"
               <?= $activePage === 'materiais' ? 'aria-current="page"' : '' ?>>
                Materiais
            </a>

            <a class="main-nav__link <?= $activePage === 'tracker' ? 'main-nav__link--active' : '' ?>"
               href="<?= htmlspecialchars($basePath) ?>tracker.php"
               <?= $activePage === 'tracker' ? 'aria-current="page"' : '' ?>>
                InvestmentTracker
            </a>
        </nav>

        <a class="button button--primary site-header__cta"
           href="<?= htmlspecialchars($basePath) ?>materiais.php">
            Começar agora
        </a>

        <button class="menu-toggle"
                type="button"
                aria-label="Abrir menu"
                aria-expanded="false"
                aria-controls="main-navigation">
            <span class="material-symbols-outlined" aria-hidden="true">menu</span>
        </button>
    </div>

    <nav class="mobile-nav" id="mobile-navigation" aria-label="Navegação mobile">
        <a class="mobile-nav__link <?= $activePage === 'home' ? 'mobile-nav__link--active' : '' ?>"
           href="<?= htmlspecialchars($basePath) ?>index.php">
            Home
        </a>
        <a class="mobile-nav__link <?= $activePage === 'sobre' ? 'mobile-nav__link--active' : '' ?>"
           href="<?= htmlspecialchars($basePath) ?>sobre.php">
            Sobre Nós
        </a>
        <a class="mobile-nav__link <?= $activePage === 'objetivos' ? 'mobile-nav__link--active' : '' ?>"
           href="<?= htmlspecialchars($basePath) ?>objetivos.php">
            Objetivos
        </a>
        <a class="mobile-nav__link <?= $activePage === 'materiais' ? 'mobile-nav__link--active' : '' ?>"
           href="<?= htmlspecialchars($basePath) ?>materiais.php">
            Materiais
        </a>
        <a class="mobile-nav__link <?= $activePage === 'tracker' ? 'mobile-nav__link--active' : '' ?>"
           href="<?= htmlspecialchars($basePath) ?>tracker.php">
            InvestmentTracker
        </a>
        <a class="button button--primary" href="<?= htmlspecialchars($basePath) ?>materiais.php">
            Começar agora
        </a>
    </nav>
</header>
