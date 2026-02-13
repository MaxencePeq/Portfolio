<?php
require_once __DIR__ . '/../vendor/autoload.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


use Maxence\OfficialGitHubPortfolio\html\WebPage;

$webpage = new WebPage();
$webpage->setTitle("Maxence Portfolio");

$webpage->appendCssUrl("css/off_portfolio.css");
$webpage->appendToHead(<<<HTML
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
HTML);

$webpage->appendContent(<<<HTML
<nav class="navbar">
    <a class="navbar-item" href="https://github.com/MaxencePeq"><img src="img/githubIcon.png" width="40" height="40" alt="GitHub"></a>
    <a class="navbar-item" href="monCV.php"><img src="img/cvlogo.png" width="40" height="40" alt="CV"></a>
    <a class="navbar-item" href="https://www.instagram.com/pianomaxence/"><img src="img/instagram.png" width="40" height="40" alt="Instagram"></a>
    <a class="navbar-item" href="https://www.linkedin.com/in/maxence-pequeno-671581329/"><img src="img/linkedin.png" width="40" height="40" alt="LinkedIn"></a>
    <button class="fa-regular fa-moon" id="theme-toggle" aria-label="Basculer le mode sombre"> </button>
</nav>
HTML);  // <- Nav-bar

$webpage->appendContent(<<<HTML
<div class="JusteHereForMakePlace"></div>
<div data-aos="fade-up"
     data-aos-duration="1000"  class="card">
    <div class="card1">
        <div class="card1-img">
                <img src="img/BANANA.png" alt="Photo de Maxence">
        </div>
        <div class="card1-texte">
            <h1 class="titre1">Maxence Pequeno (Étudiant) </h1>
            <div class="card1-split">
                <p class="txt1">
                    <div class="laravelsymfony">
                        <div class="parent">
                            <div class="div1">
                                <a href="https://laravel.com/">
                                    <img src="img/logoIndex/laravel.png" loading="lazy" alt="Laravel">
                                </a>
                            </div>
                            <div class="div2">
                                <a href="https://fr.react.dev/">
                                    <img src="img/logoIndex/react.png.webp" loading="lazy" alt="React">
                                </a>
                            </div>
                            <div class="div3">
                                <a href="redirected-page/Symfony-project.php">
                                    <img src="img/logoIndex/symfony.png" loading="lazy" alt="Symfony">
                                 </a>
                            </div>
                            <div class="div4">
                                <a href="https://api-platform.com/">
                                    <img src="img/logoIndex/API.png" loading="lazy" alt="API">
                                 </a>
                            </div>
                        </div>
                    </div>
                </p>
                <div class="card1-links">
                    <a class="btn1" href="monCV.php">Voir mon CV</a>
                    <a class="btn2" href="https://github.com/MaxencePeq">Projets GitHub</a>
                </div>
            </div>
        </div>
    </div>
</div>
HTML); // <- Card 1 : Présentation

$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
    <div class="card2">
        <h2 class="titre2">Parcours</h2>
        <p class="txt1">Diplômé d’un baccalauréat général avec spécialités Sciences Numériques et Mathématiques. (Lycée Franklin Roosevelt, Reims — 2024) </p>
        <p class="txt1">Actuellement en 2<sup>e</sup> année d’IUT Informatique à Reims (spécialisation développement C#).</p>
        <p class="txt1">J’explore et j’apprends au travers de projets personnels (voir mon GitHub) : un mini site de référencement de musique, puis un petit jeu web Idle/Autoclicker pendant l’été. Suivis d'un projet académique de réseau social étudiant et un site vitrine pour un artisant.</p>
    </div>
</div>
HTML); // <- Card 2 : Parcours

$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
    <div class="card3">
        <h2 class="titre2">Langages et outils</h2>
        <ul class="icones1">
            <li><img src="img/LanguagesEtOutils/html-5.png" loading="lazy" width="96" height="96" alt="HTML5"></li>
            <li><img src="img/LanguagesEtOutils/css-3.png" loading="lazy" width="96" height="96" alt="CSS3"></li>
            <li><img src="img/LanguagesEtOutils/CSHARP.png" loading="lazy" width="96" height="96" alt="C#"></li>
            <li><img src="img/LanguagesEtOutils/Net.jpg" loading="lazy" width="96" height="96" alt=".NET"></li>
            <li><img src="img/LanguagesEtOutils/php.png" loading="lazy" width="96" height="96" alt="PHP"></li>
            <li><img src="img/LanguagesEtOutils/COMPOSER.png" loading="lazy" width="96" height="96" alt="Composer"></li>
            <li><img src="img/LanguagesEtOutils/symfony-icon.png" loading="lazy" width="96" height="96" alt="Symfony"></li>
            <li><img src="img/LanguagesEtOutils/serveur-sql.png" loading="lazy" width="96" height="96" alt="SQL"></li>
            <li><img src="img/LanguagesEtOutils/mysql.png" loading="lazy" width="96" height="96" alt="MySql"></li>
            <li><img src="img/LanguagesEtOutils/git.png" loading="lazy" width="96" height="96" alt="Git"></li>
            <li><img src="img/LanguagesEtOutils/js.png" loading="lazy" width="96" height="96" alt="Javascript"></li>
            <li><img src="img/LanguagesEtOutils/python.png" loading="lazy" width="96" height="96" alt="Python"></li>
        </ul>
    </div>
</div>
HTML); // <- card 3 : Compétences

$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
    <div class="card4">
        <h2 class="titre2">Projets personnels <h4>(Les photos des projets sont cliquable, ouvrant un carrousel d'images. Les projets sont sur mon <a href="https://github.com/MaxencePeq">github</a>)</h4 </h2> 
        
        <p class="txt1"> (2026) <a href=""> Website for Colorblind </a> : Est une extension permettant de modifier la couleur de certains paramètres pour permettre au daltonien d'adapter la page en cours. </p>
        
        <div class="spaceinvaders-img">
            <img src="img/WebsiteForColorblind/3.png" loading="lazy" alt="Extension-image" class="miniature" onclick="ouvrirCarrousel('WebForColorblind')">
        </div>
    </div>
    
    <div class="projet-img">
        <h4>Langages et outils utilisé pour ce projet :</h4>
        <ul class="icones1">
            <li><img src="img/LanguagesEtOutils/js.png" loading="lazy" width="64" height="64" alt="Javascript"></li>
            <li><img src="img/LanguagesEtOutils/html-5.png" loading="lazy" width="64" height="64" alt="HTML"></li>
            <li><img src="img/LanguagesEtOutils/css-3.png" loading="lazy" width="64" height="64" alt="CSS"></li>
        </ul>
    </div>
    
</div> 
HTML); // <-- Premier projet + BASE TEXTE

$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
    <div class="card4">
        <p class="txt1"> (2026) <a href="https://lebelouvrage.bzh"> Lebel Ouvrage </a> : Est un site vitrine pour un artisan fait en collaboration avec mon collègue <a href="https://calvin-nogueira.fr/"> Calvin Nogueira</a> </p>
        
        <div class="spaceinvaders-img">
            <img src="img/LebelOuvrage/accueil.png" loading="lazy" alt="accueil-lebelouvrage" class="miniature" onclick="ouvrirCarrousel('LebelOuvrage')">
        </div>
    </div>
    
    <div class="projet-img">
        <h4>Langages et outils utilisé pour ce projet :</h4>
        <ul class="icones1">
            <li><img src="img/LanguagesEtOutils/symfony-icon.png" loading="lazy" width="64" height="64" alt="Symfony"></li>
            <li><img src="img/LanguagesEtOutils/php.png" width="64" loading="lazy" height="64" alt="PHP"></li>
            <li><img src="img/LanguagesEtOutils/COMPOSER.png" width="64" loading="lazy" height="64" alt="Composer"></li>
            <li><img src="img/LanguagesEtOutils/git.png" width="64" loading="lazy" height="64" alt="Git"></li>
        </ul>
    </div>
</div>    
HTML); // <-- LebelOuvrage

$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
    <div class="card6">
        <p class="txt1"> (2026) <a href="https://buddysystem.calvin-nogueira.fr/"> Buddy System </a> : Un projet universitaire de réseau social étudiant. Les membres inscrits peuvent chatter, ajouter des amies <br>
        Créer des événements, modifier leur profil, rejoindre des groupes et plus encore. <br>
        N'hésitez pas à vous inscrire <a href="https://buddysystem.calvin-nogueira.fr/"> ici </a> !
        </p>
        
        <div class="spaceinvaders-img">
            <img src="img/buddysystem/accueil.png" loading="lazy" alt="accueil-buddysystem" class="miniature" onclick="ouvrirCarrousel('BuddySystem')">
        </div>
    </div>
    <div class="projet-img">
        <h4>Langages et outils utilisé pour ce projet :</h4>
        <ul class="icones1">
            <li><img src="img/LanguagesEtOutils/symfony-icon.png" loading="lazy" width="64" height="64" alt="Symfony"></li>
            <li><img src="img/LanguagesEtOutils/php.png" loading="lazy" width="64" height="64" alt="PHP"></li>
            <li><img src="img/LanguagesEtOutils/js.png" loading="lazy" width="64" height="64" alt="Javascript"></li>
            <li><img src="img/LanguagesEtOutils/COMPOSER.png" loading="lazy" width="64" height="64" alt="Composer"></li>
            <li><img src="img/LanguagesEtOutils/serveur-sql.png" loading="lazy" width="64" height="64" alt="SQL"></li>
            <li><img src="img/LanguagesEtOutils/mysql.png" loading="lazy" width="64" height="64" alt="MySql"></li>
            <li><img src="img/LanguagesEtOutils/git.png" loading="lazy" width="64" height="64" alt="Git"></li>
        </ul>
    </div>
</div>
HTML); // <-- Buddy System

$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
    <div class="card6">
        <p class="txt1"> (2025) <a href="https://github.com/MaxencePeq/Space-Invaders.git"> Space-Invaders</a> : Un petit jeu codé en Phaser - Javascript pour nous apprendre Phaser et les callbacks. <br> Cliquez sur le jeu ! (Q - D pour le déplacement ; ESPACE pour shooté)</p>
        
        <div>
            <iframe
              id="inlineFrameExample"
              title="Exemple de cadre intégré"
              height="550"
              src="https://bakerysimulator.alwaysdata.net/SpaceInvader/"
              loading="lazy">
            </iframe>
        </div>
    </div>
    <div class="projet-img">
        <h4>Langages et outils utilisé pour ce projet :</h4>
        <ul class="icones1">
            <li><img src="img/LanguagesEtOutils/js.png" loading="lazy" width="64" height="64" alt="Javascript"></li>
            <li><img src="img/LanguagesEtOutils/git.png" loading="lazy" width="64" height="64" alt="Git"></li>
            
        </ul>
    </div>
</div>
HTML); // <-- Space Invader

$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
        <div class="card4">
            <p class="txt1"> (2025) <a href="https://github.com/MaxencePeq/BakerySimulator"> BakerySimulator</a> : Est un simulateur de gestion de boulangerie de type "Idle / Autoclicker" ! Jouable sur : <a href="https://bakerysimulator.alwaysdata.net/BakerySimulator/public/index.php"> bakerysimulator </a> <br> Un debug-mode a été ajouté en plus du système de compte (à l'époque fait par ia) pour modérer les comptes.  </p>
           
           <div class="BakerySim-img">
                <img src="img/BakerySim-img/intro.png" loading="lazy" alt="intro-BakerySimulator" class="miniature" onclick="ouvrirCarrousel('BakerySimulator')">
           </div>
           <div class="projet-img">
            <h4>Langages et outils utilisé pour ce projet :</h4>
                <ul class="icones1">
                    <li><img src="img/LanguagesEtOutils/php.png" loading="lazy" width="64" height="64" alt="PHP"></li>
                    <li><img src="img/LanguagesEtOutils/COMPOSER.png" loading="lazy" width="64" height="64" alt="Composer"></li>
                    <li><img src="img/LanguagesEtOutils/git.png" loading="lazy" width="64" height="64" alt="Git"></li>
                </ul>
            </div>
    </div>
</div>
HTML); // <-- Bakery Simulator

$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
    <div class="card5">
        <p class="txt1"> (2024) <a href="https://github.com/MaxencePeq/WebMusic"> WebMusic</a> : Une petite application qui répertorie des genres / albums / artistes de musique et crée des liens Youtube <br> automatique pour retrouver les musiques.  </p>
        
        <div class="webmusic-img">
            <img src="img/webmusic-img/index.png" loading="lazy" alt="index-webmusic" class="miniature" onclick="ouvrirCarrousel('WebMusic')">
        </div>
    </div>
    <div class="projet-img">
        <h4>Langages et outils utilisé pour ce projet :</h4>
        <ul class="icones1">
            <li><img src="img/LanguagesEtOutils/php.png" loading="lazy" width="64" height="64" alt="PHP"></li>
            <li><img src="img/LanguagesEtOutils/COMPOSER.png" loading="lazy" width="64" height="64" alt="Composer"></li>
            <li><img src="img/LanguagesEtOutils/git.png" loading="lazy" width="64" height="64" alt="Git"></li>
        </ul>
    </div>
</div>
HTML); // <- Web Music

$webpage->appendContent(<<<HTML
<div id="carrousel" class="carrousel">
    <span class="fermer" onclick="fermer()">×</span>
    <button class="fleche" onclick="precedent()">←</button>
    <img id="image" src="" alt="Photo">
    <button class="fleche" onclick="suivant()">→</button>
</div>
HTML); // <- Carrousel

$year = date('Y');
$webpage->appendContent(<<<HTML
<footer class="footer">
    <small>© $year Maxence Pequeno — Portfolio</small>
</footer>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="script/carrousel.js"></script>
<script src="script/darkmode.js"></script>
<script>
  AOS.init();
</script>
HTML
); // <- Footer + SCRIPT (AOS, JS)


echo($webpage->toHtml());