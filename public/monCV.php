<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Maxence\OfficialGitHubPortfolio\html\WebPage;

$webpage = new WebPage();
$webpage->setTitle("Maxence CV");
$webpage->appendCssUrl("css/off_portfolio.css");
$webpage->appendCssUrl("css/card-template.css");
$webpage->appendCssUrl("css/navbar.css");
$webpage->appendCssUrl("css/cv.css");

$webpage->appendContent(<<<HTML
<nav class="navbar">
    <span class="brand">MP</span>

    <div class="navbar-links">
        <a class="navbar-item" href="basepage.php">Accueil</a>
        <a class="navbar-item" href="basepage.php#projects">Projets</a>
        <a class="navbar-item" href=autres.php>Passions et autres</a>
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
<div class="card">
    <div class="card-body">
        <h1 class="titre2">Mon CV</h1>
        <p class="txt1">Aperçu en pleine largeur, avec options de téléchargement et d’impression.</p>
        
        <div class="cv">
            <img class="cv-img" src="img/cv.png" alt="CV de Maxence Pequeno" width="707" height="1000">
        </div>
        
        <div class="cv-actions">
            <a class="btn1" href="img/cv.png" download>Télécharger</a>
            <button class="btn2" type="button" onclick="window.print()">Imprimer</button>
            <a class="btn2" href="basepage.php">← Retour</a>
        </div>
        
    </div>
</div>
HTML);  //

echo $webpage->toHtml();