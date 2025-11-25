<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Maxence\OfficialGitHubPortfolio\html\WebPage;

$webpage = new WebPage();
$webpage->setTitle("Maxence CV");
$webpage->appendCssUrl("css/off_portfolio.css");

$webpage->appendContent(<<<HTML
<nav class="navbar">
        <a class="navbar-item" href="https://github.com/MaxencePeq"><img src="img/githubIcon.png" width="40" height="40" alt="GitHub"></a>
        <a class="navbar-item" href="monCV.php"><img src="img/cvlogo.png" width="40" height="40" alt="CV"></a>
        <a class="navbar-item" href="https://www.instagram.com/pianomaxence/"><img src="img/instagram.png" width="40" height="40" alt="Instagram"></a>
        <a class="navbar-item" href="https://www.linkedin.com/in/maxence-pequeno-671581329/"><img src="img/linkedin.png" width="40" height="40" alt="LinkedIn"></a>
    </nav>
HTML); // <- Nav-bar

$webpage->appendContent(<<<HTML
<div class="card">
    <div class="card-body">
        <h1 class="titre2">Mon CV</h1>
        <p class="txt1">Aperçu en pleine largeur, avec options de téléchargement et d’impression.</p>
        
        <div class="cv">
            <img class="cv-img" src="img/CVmax.png" alt="CV de Maxence Pequeno" width="707" height="1000">
        </div>
        
        <div class="cv-actions">
            <a class="btn1" href="img/CVmaxpeq.png" download>Télécharger</a>
            <button class="btn2" type="button" onclick="window.print()">Imprimer</button>
            <a class="btn2" href="basepage.php">← Retour</a>
        </div>
        
    </div>
</div>
HTML);  //

echo $webpage->toHtml();