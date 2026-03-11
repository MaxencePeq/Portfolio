<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Maxence\OfficialGitHubPortfolio\html\WebPage;

$webpage = new WebPage();
$webpage->setTitle("Mes projets Symfony");

$webpage->appendCssUrl("../css/off_portfolio.css");
$webpage->appendCssUrl("../css/card-templates.css");
$webpage->appendCssUrl("../css/navbar.css");


$webpage->appendToHead(<<<HTML
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
HTML);

$webpage->appendContent(<<<HTML
<nav class="navbar">
    <span class="brand">MP</span>

    <div class="navbar-links">
        <a class="navbar-item" href="#home">Accueil</a>
        <a class="navbar-item" href="#projects">Projets</a>
        <a class="navbar-item" href="autres.php">Passions et autres</a>
        <a class="navbar-item" href="monCV.php">CV</a>
    </div>

    <div class="navbar-socials">
        <a class="navbar-icon" href="https://github.com/MaxencePeq" target="_blank"><img src="img/githubIcon.png" width="20" height="20" alt="GitHub"></a>
        <a class="navbar-icon" href="https://www.instagram.com/pianomaxence/" target="_blank"><img src="img/instagram.png" width="20" height="20" alt="Instagram"></a>
        <a class="navbar-icon" href="https://www.linkedin.com/in/maxence-pequeno-671581329/" target="_blank"><img src="img/linkedin.png" width="20" height="20" alt="LinkedIn"></a>
        <button class="fa-regular fa-moon" id="theme-toggle" aria-label="Basculer le mode sombre"></button>
    </div>
</nav>

HTML);  // <- Nav-bar

$webpage->appendContent(<<<HTML
<div class="spacement" style="margin-top: 8rem">
    <div data-aos="fade-up"
         data-aos-duration="1000" class="z">
        <div class="card">
            <h2 class="titre2">Ces projets sont en développement...</h2>
            <p> <a href="../basepage.php"> Retour à la page d'accueil</a></p>
        </div>
    </div>  
</div>
HTML); // TEXTE



$year = date('Y');
$webpage->appendContent(<<<HTML
<footer class="footer">
    <small>© $year Maxence Pequeno — Portfolio</small>
</footer>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="../script/carrousel.js"></script>
<script>
  AOS.init();
</script>
HTML
); // <- Footer + SCRIPT (AOS, JS)


echo($webpage->toHtml());