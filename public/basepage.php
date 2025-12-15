<?php
require_once __DIR__ . '/../vendor/autoload.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


use Maxence\OfficialGitHubPortfolio\html\WebPage;

$webpage = new WebPage();
$webpage->setTitle("Maxence Portfolio");

$webpage->appendCssUrl("css/off_portfolio.css");

$webpage->appendContent(<<<HTML
<nav class="navbar">
        <a class="navbar-item" href="https://github.com/MaxencePeq"><img src="img/githubIcon.png" width="40" height="40" alt="GitHub"></a>
        <a class="navbar-item" href="monCV.php"><img src="img/cvlogo.png" width="40" height="40" alt="CV"></a>
        <a class="navbar-item" href="https://www.instagram.com/pianomaxence/"><img src="img/instagram.png" width="40" height="40" alt="Instagram"></a>
        <a class="navbar-item" href="https://www.linkedin.com/in/maxence-pequeno-671581329/"><img src="img/linkedin.png" width="40" height="40" alt="LinkedIn"></a>
    </nav>
HTML);  // <- Nav-bar

$webpage->appendContent(<<<HTML
<div class="JusteHereForMakePlace"></div>
<div class="card">
    <div class="card1">
        <div class="card1-img">
                <img src="img/BANANA.png" alt="Photo de Maxence">
        </div>
        <div class="card1-texte">
            <h1 class="titre1">Maxence Pequeno</h1>
            <div class="card1-split">
                <p class="txt1">
                    Bonjour ! Je suis Maxence, étudiant en informatique et pianiste. Passionné par le code et baigné dans l’univers de l’industrie depuis petit, je suis curieux, studieux et toujours partant pour apprendre de nouvelles choses.
                </p>
                <div class="card1-links">
                    <a class="btn1" href="monCV.php">Voir mon CV</a>
                    <a class="btn2" href="https://github.com/MaxencePeq">Projets GitHub</a>
                </div>
            </div>
        </div>
    </div>
</div>

HTML); // <- Card 1

$webpage->appendContent(<<<HTML
<div class="card">
    <div class="card2">
        <h2 class="titre2">Parcours</h2>
        <p class="txt1">Diplômé d’un baccalauréat général (Lycée Franklin Roosevelt, Reims — 2024) avec spécialités NSI et Mathématiques.</p>
        <p class="txt1">Actuellement en 2<sup>e</sup> année d’IUT Informatique à Reims (spécialisation développement C#).</p>
        <p class="txt1">J’explore et j’apprends au travers de projets personnels (voir mon GitHub) : un mini site de référencement de musique en début d’année, puis un petit jeu web Idle/Autoclicker pendant l’été.</p>
    </div>
</div>
HTML); // <- Card 2

$webpage->appendContent(<<<HTML
<div class="card">
    <div class="card3">
        <h2 class="titre2">Langages et outils</h2>
        <ul class="icones1">
            <li><img src="img/html-5.png" width="96" height="96" alt="HTML5"></li>
            <li><img src="img/css-3.png" width="96" height="96" alt="CSS3"></li>
            <li><img src="img/CSHARP.png" width="96" height="96" alt="C#"></li>
            <li><img src="img/Net.jpg" width="96" height="96" alt=".NET"></li>
            <li><img src="img/php.png" width="96" height="96" alt="PHP"></li>
            <li><img src="img/COMPOSER.png" width="96" height="96" alt="Composer"></li>
            <li><img src="img/symfony-icon.png" width="96" height="96" alt="Symfony"></li>
            <li><img src="img/serveur-sql.png" width="96" height="96" alt="SQL"></li>
            <li><img src="img/mysql.png" width="96" height="96" alt="MySql"></li>
            <li><img src="img/git.png" width="96" height="96" alt="Git"></li>
            <li><img src="img/js.png" width="96" height="96" alt="Javascript"></li>
            <li><img src="img/python.png" width="96" height="96" alt="Python"></li>
        </ul>
    </div>
</div>
HTML); // <- card 3 // images

$webpage->appendContent(<<<HTML
<div class="card">
    <div class="card4">
        <h2 class="titre2">Projets personnel </h2>  
        
        <p class="txt1"> (2025) <a href="https://github.com/MaxencePeq/BakerySimulator"> BakerySimulator</a> : Est un simulateur de gestion de boulangerie de type "Idle / Autoclicker" ! Jouable sur : <a href="https://bakerysimulator.alwaysdata.net/BakerySimulator/public/index.php"> bakerysimulator </a> <br> Un debug-mode a été ajouté en plus du système de compte (à l'époque fait par ia) pour modérer les comptes.  </p>
       
       <div class="BakerySim-img">
            <img src="img/BakerySim-img/intro.png" width="450" height="230" alt="intro-BakerySimulator">
            <img src="img/BakerySim-img/full.png" width="450" height="230" alt="full-webmusic">
            <img src="img/BakerySim-img/debug.png" width="450" height="230" alt="debug-webmusic">
       </div>
    </div>
</div>

<div class="card">
    <div class="card5">
        <p class="txt1"> (2024) <a href="https://github.com/MaxencePeq/WebMusic"> WebMusic</a> : Une petite application qui répertorie des genres / albums / artistes de musique et crée des liens Youtube <br> automatique pour retrouver les musiques.  </p>
        
        <div class="webmusic-img">
            <img src="img/webmusic-img/index.png" width="367" height="194" alt="index-webmusic">
            <img src="img/webmusic-img/album.png" width="367" height="194" alt="album-webmusic">
            <img src="img/webmusic-img/album-track.png" width="367" height="194" alt="albumTrack-webmusic">
            <img src="img/webmusic-img/song.png" width="367" height="194" alt="song-webmusic">
        </div>
    </div>
</div>
<div class="card">
    <div class="card6">
        <p class="txt1"> (2024) <a href="https://github.com/MaxencePeq/Space-Invaders.git"> Space-Invaders</a> : Un petit jeu codé en Phaser - Javascript pour nous apprendre Phaser et les callback ! <br></p>
        
        <div class="spaceinvaders-img">
            <img src="img/SpaceInvader-img/tir.png" width="367" height="194" alt="tir-SpaceInvader">
            <img src="img/SpaceInvader-img/GameOVer.png" width="367" height="194" alt="gameover-SpaceInvader">
            <img src="img/SpaceInvader-img/Bonus.png" width="367" height="194" alt="Bonus-SpaceInvader">
        </div>
    </div>
</div>
HTML);

$year = date('Y');
$webpage->appendContent(<<<HTML
<footer class="footer">
    <small>© $year Maxence Pequeno — Portfolio</small>
</footer>
HTML); // <- Footer

echo($webpage->toHtml());