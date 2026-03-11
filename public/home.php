<?php
require_once __DIR__ . '/../vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Maxence\OfficialGitHubPortfolio\html\WebPage;

$webpage = new WebPage();
$webpage->setTitle("Maxence Portfolio");

$webpage->appendCssUrl("css/off_portfolio.css"); // link css global
$webpage->appendCssUrl("css/autres_passions.css"); // link css des passions
$webpage->appendCssUrl("css/card-template.css"); // link css des card et de leur contenu
$webpage->appendCssUrl("css/logo-images-grid.css"); // link css des passions
$webpage->appendCssUrl("css/navbar.css"); // link css de la navbar
$webpage->appendCssUrl("css/carrousel.css"); // link css du carrousel

$webpage->appendToHead(<<<HTML
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<meta name="description" content="Ceci site est un portfolio qui me présente (PEQUENO MAXENCE) En tant que développeur web/application junior">
<link rel="icon" type="image/png" href="img/favicon.ico"/>
HTML);

$webpage->appendContent(<<<HTML
<nav class="navbar">
    <span class="brand">MP</span>

    <div class="navbar-links">
        <a class="navbar-item" href="home.php">Accueil</a>
        <a class="navbar-item" href="#projects">Projets</a>
        <a class="navbar-item" href="autres.php">Autres</a>
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
<div class="JusteHereForMakePlace"></div>
<div data-aos="fade-up"
     data-aos-duration="1000"  class="card">
    <div id="home" class="card1">
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
                                <a href="redirected-page/Incoming.php">
                                    <img src="img/logoIndex/laravel.png" loading="lazy" alt="Laravel">
                                </a>
                            </div>
                            <div class="div2">
                                <a href="redirected-page/Incoming.php">
                                    <img src="img/logoIndex/react.png.webp" loading="lazy" alt="React">
                                </a>
                            </div>
                            <div class="div3">
                                <a href="#Symfony">
                                    <img src="img/logoIndex/symfony.png" loading="lazy" alt="Symfony">
                                 </a>
                            </div>
                            <div class="div4">
                                <a href="redirected-page/Incoming.php">
                                    <img src="img/logoIndex/API.png" loading="lazy" alt="API">
                                 </a>
                            </div>
                        </div>
                    </div>
                </p>
        
                <div class="card1-links">
                    <a class="btn1" href="monCV.php">Voir mon CV</a>
                    <a class="btn2" href="https://github.com/MaxencePeq">Projets GitHub</a>
                    <a class="btn2" href="mailto:maxence.pequeno@icloud.com"> Me contacter </a>
                </div>
            </div>
        </div>
    </div>
</div>
HTML); // <- Card 1 : Présentation

$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
    <h3 class="stat-card">
    <h2 class="titre2">Statistiques GitHub</h2>
        <h3 class="in-stat-card">
        
            <img src="https://github-profile-summary-cards.vercel.app/api/cards/profile-details?username=MaxencePeq" alt="Profil github" />
            
            <h3 class="middle">
                <p>Statistique Github</p>
            </h3> 
            
            <img 
              src="https://ghchart.rshah.org/MaxencePeq" 
              alt="Contribution chart"
            />
            
            <h3 class="middle" >
                <p> Statistique Gitlab (local de mon école)  </p>
            </h3>

            <img src="img/gitlab.png" alt="GitLab contributions" class="gitlab-graph">

        </div>
    </div>
</div>
HTML); // <-- Statistiques Github

$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
    <div class="card2">
        <h2 class="titre2">Parcours</h2>
        <p class="txt1">Diplômé d’un baccalauréat général avec spécialités Sciences Numériques et Mathématiques. (Lycée Franklin Roosevelt, Reims — 2024) </p>
        <p class="txt1">Actuellement en 2<sup>e</sup> année d’IUT Informatique à Reims (spécialisation développement C#).</p>
        <p class="txt1">J’explore et j’apprends au travers de projets personnels (voir mon GitHub) : un mini site de référencement de musique, puis un petit jeu web Idle/Autoclicker pendant l’été. Suivi d'un projet académique de réseau social étudiant et un site vitrine pour un artisan.</p>
    </div>

</div>
HTML); // <-- Parcours

$webpage->appendContent(<<<HTML
<div data-aos="fade-up" data-aos-duration="1000" class="card">
    <div class="card3">
        <h2 class="titre2">Technologies & Stack</h2>

        <h3 class="sous-titre">Frameworks</h3>
        <ul class="icones1">
            <li><a href="#BuddySystem"><img src="img/LanguagesEtOutils/symfony-icon.png" loading="lazy" width="64" height="64" alt="Symfony"><span>Symfony</span></a></li>
            <li><img src="img/LanguagesEtOutils/laravel.png" loading="lazy" width="64" height="64" alt="Laravel"><span>Laravel</span></li>
            <li><img src="img/LanguagesEtOutils/react.png" loading="lazy" width="64" height="64" alt="React"><span>React</span></li>
            <li><img src="img/LanguagesEtOutils/Net.png" loading="lazy" width="64" height="64" alt=".NET"><span>.NET</span></li>
            <li><img src="img/LanguagesEtOutils/api.webp" loading="lazy" width="64" height="64" alt="API Platform"><span>API Platform</span></li>
        </ul>

        <h3 class="sous-titre">Outils & Technologies</h3>
        <ul class="icones1">
            <li><a href="#BuddySystem"><img src="img/LanguagesEtOutils/mysql.png" loading="lazy" width="64" height="64" alt="MySQL"><span>MySQL</span></a></li>
            <li><a href="#BuddySystem"><img src="img/LanguagesEtOutils/serveur-sql.png" loading="lazy" width="64" height="64" alt="SQL"><span>SQL</span></a></li>
            <li><a href="#LebelOuvrage"><img src="img/LanguagesEtOutils/git.png" loading="lazy" width="64" height="64" alt="Git"><span>Git</span></a></li>
            <li><img src="img/LanguagesEtOutils/phpmyadmin.png" loading="lazy" width="64" height="64" alt="phpMyAdmin"><span>phpMyAdmin</span></li>
            <li><a href="#BakerySimulator"><img src="img/LanguagesEtOutils/COMPOSER.png" loading="lazy" width="64" height="64" alt="Composer"><span>Composer</span></a></li>
        </ul>

        <h3 class="sous-titre">Langages</h3>
        <ul class="icones1">
            <li><a href="#BakerySimulator"><img src="img/LanguagesEtOutils/php.png" loading="lazy" width="64" height="64" alt="PHP"><span>PHP</span></a></li>
            <li><a href="#SpaceInvaders"><img src="img/LanguagesEtOutils/js.png" loading="lazy" width="64" height="64" alt="JavaScript"><span>JavaScript</span></a></li>
            <li><img src="img/LanguagesEtOutils/CSHARP.png" loading="lazy" width="64" height="64" alt="C#"><span>C#</span></li>
            <li><img src="img/LanguagesEtOutils/python.png" loading="lazy" width="64" height="64" alt="Python"><span>Python</span></li>
            <li><a href="#BuddySystem"><img src="img/LanguagesEtOutils/twig.png" loading="lazy" width="64" height="64" alt="Twig"><span>Twig</span></a></li>
            <li><img src="img/LanguagesEtOutils/blade.png" loading="lazy" width="64" height="64" alt="Blade"><span>Blade</span></></li>
            <li><img src="img/LanguagesEtOutils/jsx.png" loading="lazy" width="64" height="64" alt="JSX"><span>JSX</span></li>
            <li><img src="img/LanguagesEtOutils/typescript.png" loading="lazy" width="64" height="64" alt="TypeScript"><span>TypeScript</span></li>
            <li><a href="#Colorblind"><img src="img/LanguagesEtOutils/html-5.png" loading="lazy" width="64" height="64" alt="HTML"><span>HTML</span></a></li>
            <li><a href="#Colorblind"><img src="img/LanguagesEtOutils/css-3.png" loading="lazy" width="64" height="64" alt="CSS"><span>CSS</span></a></li>
        </ul>
    </div>
</div>

HTML); // <-- Compétences

$webpage->appendContent(<<<HTML
<div id="projects" data-aos="fade-up"
     data-aos-duration="1000" class="card">
    <div id="LebelOuvrage" class="card4">
        <h2 class="titre2">Projets professionels <h5> <em> Les photos des projets sont cliquables, ouvrant un carrousel d'images. Les projets sont sur mon <a href="https://github.com/MaxencePeq">github</a> </em> </h5> </h2> 
        
        <div class="title"> 
            <h2> (2026) <a href="https://lebelouvrage.bzh"> Lebel Ouvrage </a> </h2>
            <p> Est un site vitrine pour un artisan fait en collaboration avec mon collègue <a href="https://calvin-nogueira.fr/"> Calvin Nogueira</a> <br> Lien : <a href="https://lebelouvrage.bzh"> Lebelouvrage.bzh</a> </p>
        </div>
        
        <div style="display:flex; justify-content:center; margin-top:1.5rem;">
            <div class="click-overlay-wrapper"> 
                <div class="spaceinvaders-img">
                    <img src="img/LebelOuvrage/accueil.png" loading="lazy" alt="accueil-lebelouvrage" class="miniature" onclick="ouvrirCarrousel('LebelOuvrage')">
                </div>
            </div>
        </div>
    </div>
    
    <div class="projet-img">
        <h4>Langages et outils utilisés pour ce projet :</h4>
        <ul class="icones1">
            <li><img src="img/LanguagesEtOutils/symfony-icon.png" loading="lazy" width="64" height="64" alt="Symfony"></li>
            <li><img src="img/LanguagesEtOutils/php.png" width="64" loading="lazy" height="64" alt="PHP"></li>
            <li><img src="img/LanguagesEtOutils/twig.png" width="64" loading="lazy" height="64" alt="PHP"></li>
            <li><img src="img/LanguagesEtOutils/COMPOSER.png" width="64" loading="lazy" height="64" alt="Composer"></li>
            <li><img src="img/LanguagesEtOutils/git.png" width="64" loading="lazy" height="64" alt="Git"></li>
        </ul>
    </div>
</div>    
HTML); // <-- LebelOuvrage

$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
    <div id="Colorblind" class="card4">
        <h2 class="titre2">Projets personnels <h5> <em> Les photos des projets sont cliquable, ouvrant un carrousel d'images. Les projets sont sur mon <a href="https://github.com/MaxencePeq">github</a> </em> </h5> </h2> 
        
        <div class="title">
            <h2> (2026) <a href="https://github.com/MaxencePeq/Website-Colorblind-Extension"> Website for Colorblind </a> : </h2>
            <p> Est une extension permettant de modifier la couleur de certains paramètres pour permettre aux daltoniens d'adapter la page en cours. </p>
        </div>
        <div style="display:flex; justify-content:center; margin-top:1.5rem;">
            <div class="click-overlay-wrapper">
                <div class="spaceinvaders-img">
                    <img src="img/WebsiteForColorblind/2.png" loading="lazy" alt="Extension-image" class="miniature" onclick="ouvrirCarrousel('WebForColorblind')">
                </div>
            </div>
        </div>
    </div>
    
    <div class="projet-img">
        <h4>Langages et outils utilisés pour ce projet :</h4>
        <ul class="icones1">
            <li><img src="img/LanguagesEtOutils/js.png" loading="lazy" width="64" height="64" alt="Javascript"></li>
            <li><img src="img/LanguagesEtOutils/html-5.png" loading="lazy" width="64" height="64" alt="HTML"></li>
            <li><img src="img/LanguagesEtOutils/css-3.png" loading="lazy" width="64" height="64" alt="CSS"></li>
        </ul>
    </div>
    
</div> 
HTML); // <-- Premier projet + Website for Colorblind

$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
    <div id="BuddySystem" class="card6">
    
    <div class="title">
        <h2> (2026) <a href="https://buddysystem.calvin-nogueira.fr/"> Buddy System </a>  </h2>
        
        <p> Un projet universitaire de réseau social étudiant. Les membres inscrits peuvent chatter, ajouter des amies <br>
        Créer des événements, modifier leur profil, rejoindre des groupes et plus encore. <br>
        N'hésitez pas à vous inscrire <a href="https://buddysystem.calvin-nogueira.fr/"> ici </a> ! Le site est utilisable juste en dessous.
        </p>
                
    </div>
        <div class="iframe-wrapper">
            <div class="iframe-container">
                <div class="click-overlay-wrapper">
                    <iframe
                      src="https://buddysystem.calvin-nogueira.fr/"
                      loading="lazy"
                      title="Buddy System">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="iframe-open-link">
            <a href="https://buddysystem.calvin-nogueira.fr/" target="_blank">
                ↗ Ouvrir en plein écran
            </a>
        </div>
    </div>
    <div class="projet-img">
        <h4>Langages et outils utilisés pour ce projet :</h4>
        <ul class="icones1">
            <li><img src="img/LanguagesEtOutils/symfony-icon.png" loading="lazy" width="64" height="64" alt="Symfony"></li>
            <li><img src="img/LanguagesEtOutils/php.png" loading="lazy" width="64" height="64" alt="PHP"></li>
            <li><img src="img/LanguagesEtOutils/twig.png" width="64" loading="lazy" height="64" alt="PHP"></li>
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
    <div id="SpaceInvaders" class="card6">
    
    <div class="title">
        <h2> (2025) <a href="https://github.com/MaxencePeq/Space-Invaders.git"> Space-Invaders</a> </h2>  
        <p> Un petit jeu codé en Phaser - Javascript pour nous apprendre Phaser et les callbacks. <br> Cliquez sur le jeu ! (Q - D pour le déplacement ; ESPACE pour shooté)</p>
    </div>
       
        <div>
            <iframe
              id="inlineFrameExample"
              title="Exemple de cadre intégré"
              height="550"
              src="https://pequeno-maxence.alwaysdata.net/SpaceInvader/"
              loading="lazy">
            </iframe>
        </div>
    </div>
    <div class="projet-img">
        <h4>Langages et outils utilisés pour ce projet :</h4>
        <ul class="icones1">
            <li><img src="img/LanguagesEtOutils/phaser.webp" loading="lazy" width="64" height="64" alt="phaser"></li>
            <li><img src="img/LanguagesEtOutils/js.png" loading="lazy" width="64" height="64" alt="Javascript"></li>
            <li><img src="img/LanguagesEtOutils/git.png" loading="lazy" width="64" height="64" alt="Git"></li>
        </ul>
    </div>
</div>
HTML); // <-- Space Invader

$webpage->appendContent(<<<HTML
<div data-aos="fade-up"
     data-aos-duration="1000" class="card">
        <div id="BakerySimulator" class="card4">
        
        <div class="title">
            <h2> (2025) <a href="https://github.com/MaxencePeq/BakerySimulator"> BakerySimulator (Arrêt temporaire)</a> </h2>
            <p> Est un simulateur de gestion de boulangerie de type "Idle / Autoclicker" ! Jouable sur : <a href="https://bakerysimulator.alwaysdata.net/BakerySimulator/public/index.php"> bakerysimulator </a> <br> Un debug-mode a été ajouté en plus du système de compte pour modérer les comptes.  </p>
        </div>
        
        <div style="display:flex; justify-content:center; margin-top:1.5rem;">
            <div class="click-overlay-wrapper">
               <div class="BakerySim-img">
                    <img src="img/BakerySim-img/intro.png" loading="lazy" alt="intro-BakerySimulator" class="miniature" onclick="ouvrirCarrousel('BakerySimulator')">
               </div>
            </div>
        </div>
        
           <div class="projet-img">
            <h4>Langages et outils utilisés pour ce projet :</h4>
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
    <div id="WebMusic" class="card5">
    
    <div class="title">
        <h2> (2024) <a href="https://github.com/MaxencePeq/WebMusic"> WebMusic</a> </h2> 
        <p> Une petite application qui répertorie des genres / albums / artistes de musique et crée des liens Youtube <br> automatique pour retrouver les musiques.  </p>
    </div>
        <div style="display:flex; justify-content:center; margin-top:1.5rem;">
            <div class="click-overlay-wrapper">
                <div class="webmusic-img">
                    <img src="img/webmusic-img/index.png" loading="lazy" alt="index-webmusic" class="miniature" onclick="ouvrirCarrousel('WebMusic')">
                </div>
            </div>
        </div>
    </div>
    <div class="projet-img">
        <h4>Langages et outils utilisés pour ce projet :</h4>
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
        <small>© $year Maxence Pequeno — Portfolio · <a href="mentions-legales.php">Mentions légales</a></small>
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