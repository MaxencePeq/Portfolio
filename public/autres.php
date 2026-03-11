<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Maxence\OfficialGitHubPortfolio\html\WebPage;

$webpage = new WebPage();
$webpage->setTitle("Maxence CV");
$webpage->appendCssUrl("css/off_portfolio.css");
$webpage->appendCssUrl("css/card-template.css");
$webpage->appendCssUrl("css/autres_passions.css");
$webpage->appendCssUrl("css/navbar.css");
$webpage->appendCssUrl("css/cv.css");

$webpage->appendContent(<<<HTML
<nav class="navbar">
    <span class="brand">MP</span>

    <div class="navbar-links">
        <a class="navbar-item" href="basepage.php">Accueil</a>
        <a class="navbar-item" href="basepage.php#projects">Projets</a>
        <a class="navbar-item" href="">Passions et autres</a>
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
<div data-aos="fade-up"
     data-aos-duration="1000" class="card"
     style="margin-top: 6rem"
     >
    <div class="card5">
    
        <div id="autres" class="title">
            <h2> Autres </h2> 
        </div>
        
        <div class="autres-intro">
            <p>Au-delà de ma passion évidente pour le développement informatique, je cultive depuis 6 ans mon amour pour la musique et plus particulièrement pour le piano. </p>
            <p>J'aime aussi tout ce qui touche à l'art : la lecture avec ma passion dévorante pour les classiques français et l'horreur fantastique, mais aussi la peinture aquarelle. </p>
            <p>Pour les intéressé·es, voici une petite sélection de mes lectures favorites :</p>
        </div>
             
         <div class="livre-list">
            <div class="livre-item">
                <img src="img/livres/bojangles.jpg" loading="lazy" alt="livres En attendant bojangles ">
                <span class="livre-titre">En attendant bojangles</span>
            </div>
            <div class="livre-item">
                <img src="img/livres/lmdf.jpg" loading="lazy" alt="livres La maison des feuilles ">
                <span class="livre-titre">La Maison des Feuilles</span>
            </div>
            <div class="livre-item">
                <img src="img/livres/wager.jpg" loading="lazy" alt="livres Les naufragées du Wager">
                <span class="livre-titre">Les naufragées du Wager</span>
            </div>
            
            <div class="livre-item">
                <img src="img/livres/lotr.jpg" loading="lazy" alt="livres Le seigneur des anneaux">
                <span class="livre-titre">Le seigneur des anneaux</span>
            </div>
            
            <div class="livre-item">
                <img src="img/livres/witcher.jpg" loading="lazy" alt="livres the witcher ">
                <span class="livre-titre">The witcher</span>
            </div>
            
            <div class="livre-item">
                <img src="img/livres/petitprince.jpg" loading="lazy" alt="livres Le petit prince">
                <span class="livre-titre">Le petit prince</span>
            </div>
            
            <div class="livre-item">
                <img src="img/livres/foret.jpg" loading="lazy" alt="livres L'appel de la fôret">
                <span class="livre-titre">L'appel de la fôret</span>
            </div>
            
            <div class="livre-item">
                <img src="img/livres/gary.jpg" loading="lazy" alt="livres La promesse de l'aube ">
                <span class="livre-titre">La promesse de l'aube</span>
            </div>
        </div>
    </div>
</div>
HTML); // <- Autres, passion

echo $webpage->toHtml();