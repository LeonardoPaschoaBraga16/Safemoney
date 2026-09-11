<footer class="site-footer">
    <div class="container site-footer__main">
        <div class="site-footer__brand">
            <a class="logo logo--footer"
               href="<?= htmlspecialchars($basePath ?? '') ?>index.php"
               aria-label="SafeMoney - Página inicial">
                <span class="logo__symbol">$</span>afeMoney
            </a>

            <p>
                Educação financeira acessível e acompanhamento inteligente para o seu futuro.
            </p>
        </div>

        <nav class="footer-nav" aria-label="Navegação do rodapé">
            <a class="footer-nav__link <?= ($activePage ?? '') === 'home' ? 'footer-nav__link--active' : '' ?>"
               href="<?= htmlspecialchars($basePath ?? '') ?>index.php">
                Home
            </a>
            <a class="footer-nav__link <?= ($activePage ?? '') === 'sobre' ? 'footer-nav__link--active' : '' ?>"
               href="<?= htmlspecialchars($basePath ?? '') ?>sobre.php">
                Sobre Nós
            </a>
            <a class="footer-nav__link <?= ($activePage ?? '') === 'objetivos' ? 'footer-nav__link--active' : '' ?>"
               href="<?= htmlspecialchars($basePath ?? '') ?>objetivos.php">
                Objetivos
            </a>
            <a class="footer-nav__link <?= ($activePage ?? '') === 'materiais' ? 'footer-nav__link--active' : '' ?>"
               href="<?= htmlspecialchars($basePath ?? '') ?>materiais.php">
                Materiais
            </a>
            <a class="footer-nav__link <?= ($activePage ?? '') === 'tracker' ? 'footer-nav__link--active' : '' ?>"
               href="<?= htmlspecialchars($basePath ?? '') ?>tracker.php">
                InvestmentTracker
            </a>
        </nav>
    </div>

    <div class="site-footer__bottom">
        <div class="container">
            <p>© <?= date('Y') ?> SafeMoney. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>
