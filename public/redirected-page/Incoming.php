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
     data-aos-duration="1000" class="z">
    <div class="card4">
        <h2 class="titre2">Ces projets sont en développement... </h2> 
    </div>
</div>  
HTML); // HEADER



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