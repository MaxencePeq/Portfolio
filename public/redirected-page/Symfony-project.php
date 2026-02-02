<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Maxence\OfficialGitHubPortfolio\html\WebPage;

$webpage = new WebPage();
$webpage->setTitle("Mes projets Symfony");

$webpage->appendCssUrl("../css/off_portfolio.css");
$webpage->appendToHead(<<<HTML
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
HTML);

$webpage->appendContent(<<<HTML
<nav class="navbar">
        <a class="navbar-item" href="https://github.com/MaxencePeq"><img src="../img/githubIcon.png" width="40" height="40" alt="GitHub"></a>
        <a class="navbar-item" href="../monCV.php"><img src="../img/cvlogo.png" width="40" height="40" alt="CV"></a>
        <a class="navbar-item" href="https://www.instagram.com/pianomaxence/"><img src="../img/instagram.png" width="40" height="40" alt="Instagram"></a>
        <a class="navbar-item" href="https://www.linkedin.com/in/maxence-pequeno-671581329/"><img src="../img/linkedin.png" width="40" height="40" alt="LinkedIn"></a>
    </nav>
HTML);  // <- Nav-bar

$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
    <div class="card4">
        <h2 class="titre2">Voici mes projets personnels fait avec Symfony </h2> 
    </div>
</div>  
HTML); // HEADER

$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
    <div class="card4">
        <h2 class="titre2">Projets personnels <h4>(Photo cliquable ouvrant un carrousel d'images)</h4 </h2> 
        
        <p class="txt1"> (2026) <a href="https://lebelouvrage.bzh"> Lebel Ouvrage </a> : Est un site vitrine pour un artisan fait en collaboration avec mon collègue <a href="https://calvintestprod.alwaysdata.net"> Calvin Nogueira Ferraz </a> </p>
        
        <div class="spaceinvaders-img">
            <img src="../img/LebelOuvrage/accueil.png" alt="accueil-lebelouvrage" class="miniature" onclick="ouvrirCarrousel('LebelOuvrage')">
        </div>
    </div>
</div>  
HTML); // <- LEBEL OUVRAGE
$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
    <div class="card6">
        <p class="txt1"> (2026) <a href="https://github.com/MaxencePeq/Space-Invaders.git"> Buddy System</a> : Un projet universitaire de réseau social étudiant. Les membres inscrits peuvent chatter, ajouter des amies <br>
        Créer des événements, modifier leur profil, rejoindre des groupes et plus encore.</p>
        
        <div class="spaceinvaders-img">
            <img src="../img/buddysystem/accueil.png"  alt="accueil-buddysystem" class="miniature" onclick="ouvrirCarrousel('BuddySystem')">
        </div>
    </div>
</div>  
HTML); // <- BUDDY SYSTEM


$webpage->appendContent(<<<HTML
<div id="carrousel" class="carrousel">
    <span class="fermer" onclick="fermer()">&times;</span>
    <button class="fleche" onclick="precedent()">&larr;</button>
    <img id="image" src="" alt="Photo">
    <button class="fleche" onclick="suivant()">&rarr;</button>
</div>
HTML
); // <- Carrousel

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