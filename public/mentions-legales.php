<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Maxence\OfficialGitHubPortfolio\html\WebPage;

$webpage = new WebPage();
$webpage->setTitle("Mentions Légales — Maxence Portfolio");

$webpage->appendCssUrl("css/off_portfolio.css");
$webpage->appendCssUrl("css/mentions-legales.css");
$webpage->appendToHead(<<<HTML
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
HTML);

$webpage->appendContent(<<<HTML
<nav class="navbar">
    <span class="brand">MP</span>

    <div class="navbar-links">
        <a class="navbar-item" href="home.php">Accueil</a>
        <a class="navbar-item" href="home.php#projects">Projets</a>
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

<div data-aos="fade-up" data-aos-duration="1000" class="card mentions-card">
    <div class="mentions-header">
        <a href="index.php" class="mentions-back">← Retour au portfolio</a>
        <h1 class="titre1">Mentions Légales</h1>
        <p class="txt1 mentions-subtitle">Conformément à la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique.</p>
    </div>

    <div class="mentions-section">
        <h2 class="titre2">1. Éditeur du site</h2>
        <ul class="mentions-list">
            <li><strong>Nom :</strong> Maxence Pequeno</li>
            <li><strong>Statut :</strong> Particulier (site personnel / portfolio)</li>
            <li><strong>Email :</strong> <a href="mailto:maxence.pequeno@icloud.com">maxence.pequeno@icloud.com</a></li>
            <li><strong>Adresse :</strong> Reims, France</li>
        </ul>
    </div>

    <div class="mentions-section">
        <h2 class="titre2">2. Hébergement</h2>
        <ul class="mentions-list">
            <li><strong>Hébergeur :</strong> AlwaysData </li>
            <li><strong>Adresse :</strong> 91 RUE DU FAUBOURG SAINT-HONORE 75008 PARIS</li>
            <li><strong>Téléphone :</strong> +33 1 84 16 23 40</li>
            <li><strong>Site web :</strong> <a href="#">https://www.alwaysdata.com/fr/</a></li>
        </ul>
    </div>

    <div class="mentions-section">
        <h2 class="titre2">3. Propriété intellectuelle</h2>
        <p class="txt1">
            L'ensemble du contenu de ce site (textes, images, code source, logos, mises en page) est la propriété 
            exclusive de <strong>Maxence Pequeno</strong>, sauf mention contraire. Toute reproduction, représentation, 
            modification, publication ou adaptation de tout ou partie des éléments du site, quel que soit le moyen 
            ou le procédé utilisé, est interdite sans autorisation écrite préalable.
        </p>
        <p class="txt1">
            Les logos et marques de technologies tierces (Symfony, Laravel, React, etc.) présents sur ce site 
            sont la propriété de leurs détenteurs respectifs et sont utilisés à titre informatif uniquement.
        </p>
    </div>

    <div class="mentions-section">
        <h2 class="titre2">4. Données personnelles</h2>
        <p class="txt1">
            Ce site ne collecte <strong>aucune donnée personnelle</strong> de ses visiteurs. Aucun formulaire de 
            collecte, cookie de suivi ou outil d'analyse n'est mis en place. La navigation sur ce site est 
            entièrement anonyme.
        </p>
        <p class="txt1">
            Si vous contactez l'éditeur par email, les informations transmises (adresse email, contenu du message) 
            sont utilisées uniquement dans le cadre de la réponse à votre demande et ne sont ni stockées dans une 
            base de données, ni transmises à des tiers.
        </p>
    </div>

    <div class="mentions-section">
        <h2 class="titre2">5. Cookies</h2>
        <p class="txt1">
            Ce site utilise uniquement un <strong>cookie fonctionnel</strong> pour mémoriser votre préférence de 
            thème (mode clair / mode sombre). Ce cookie est strictement nécessaire au bon fonctionnement du site.
        </p>
        <div class="mentions-cookie-table">
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Finalité</th>
                        <th>Durée</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>theme</code></td>
                        <td>Mémoriser le mode sombre/clair</td>
                        <td>1 an</td>
                        <td>Fonctionnel</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="mentions-section">
        <h2 class="titre2">6. Responsabilité</h2>
        <p class="txt1">
            L'éditeur s'efforce de fournir des informations aussi précises que possible. Toutefois, il ne pourra 
            être tenu responsable des omissions, inexactitudes ou carences dans la mise à jour, qu'elles soient 
            de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.
        </p>
        <p class="txt1">
            Les liens hypertextes mis en place dans le cadre de ce site en direction d'autres ressources sur 
            Internet ne sauraient engager la responsabilité de l'éditeur.
        </p>
    </div>

    <div class="mentions-section">
        <h2 class="titre2">7. Droit applicable</h2>
        <p class="txt1">
            Le présent site et ses mentions légales sont régis par le <strong>droit français</strong>. En cas de 
            litige, et après tentative de résolution amiable, les tribunaux français seront compétents.
        </p>
    </div>

    <div class="mentions-footer-note">
        <p class="txt1"><em>Dernière mise à jour : 9 mars 2026</em></p>
    </div>
</div>
HTML); // <-- content

$year = date('Y');
$webpage->appendContent(<<<HTML
<footer class="footer">
    <small>© $year Maxence Pequeno — Portfolio · <a href="mentions-legales.php">Mentions légales</a></small>
</footer>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="script/darkmode.js"></script>
<script>
  AOS.init();
</script>
HTML); // <-- footer

echo($webpage->toHtml());
