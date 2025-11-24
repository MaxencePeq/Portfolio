<?php

use Maxence\OfficialGitHubPortfolio\html\WebPage;

$webpage = new WebPage();
$webpage->setTitle("Maxence Portfolio");

$webpage->appendCssUrl("css/off_portfolio.css");

$webpage->appendContent(<<<HTML
<nav class="navbar">
        <a class="navbar-item" href="https://github.com/MaxencePeq"><img src="img/githubIcon.png" width="40" height="40" alt="GitHub"></a>
        <a class="navbar-item" href="cv.php"><img src="img/cvlogo.png" width="40" height="40" alt="CV"></a>
        <a class="navbar-item" href="https://www.instagram.com/pianomaxence/"><img src="img/instagram.png" width="40" height="40" alt="Instagram"></a>
        <a class="navbar-item" href="https://www.linkedin.com/in/maxence-pequeno-671581329/"><img src="img/linkedin.png" width="40" height="40" alt="LinkedIn"></a>
    </nav>
HTML);  // <- Nav-bar

$webpage->appendContent(<<<HTML
<div class="card">
    <div class="card1-img">
            <img src="img/MaTronche.png" alt="Photo de Maxence">
    </div>
    <div class="card1-texte">
        <h1 class="titre1">Maxence Pequeno</h1>
        <p class="txt1">
            Bonjour ! Je suis Maxence, étudiant en informatique et pianiste. Passionné par le code et baigné dans l’univers de l’industrie depuis petit, je suis curieux, studieux et toujours partant pour apprendre de nouvelles choses.
        </p>
        <div class="card1-links">
            <a class="btn1" href="cv.php">Voir mon CV</a>
            <a class="btn2" href="https://github.com/MaxencePeq">Projets GitHub</a>
        </div>
    </div>
</div>

HTML);


echo($webpage->toHtml());