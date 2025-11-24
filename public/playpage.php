<?php
$year = date('Y');
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Portfolio · Maxence Pequeno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/portfolio.css" rel="stylesheet">
</head>
<body>
<header class="zone0">
    <nav class="z0-links">
        <a class="z0-item" href="https://github.com/MaxencePeq"><img src="img/githubIcon.png" width="40" height="40" alt="GitHub"></a>
        <a class="z0-item" href="cv.php"><img src="img/cvlogo.png" width="40" height="40" alt="CV"></a>
        <a class="z0-item" href="https://www.instagram.com/pianomaxence/"><img src="img/instagram.png" width="40" height="40" alt="Instagram"></a>
        <a class="z0-item" href="https://www.linkedin.com/in/maxence-pequeno-671581329/"><img src="img/linkedin.png" width="40" height="40" alt="LinkedIn"></a>
    </nav>
</header>

<main class="zone1">s
    <!-- Bloc 1 : “hero” -->
    <section class="card1 bloc1">
        <div class="bloc1-img">
            <img src="img/MaTronche.png" alt="Photo de Maxence">
        </div>
        <div class="bloc1-texte">
            <h1 class="titre1">Maxence Pequeno</h1>
            <p class="txt1">
                Bonjour ! Je suis Maxence, étudiant en informatique et pianiste. Passionné par le code et baigné dans l’univers de l’industrie depuis petit, je suis curieux, studieux et toujours partant pour apprendre de nouvelles choses.
            </p>
            <div class="actions1">
                <a class="btn1" href="cv.php">Voir mon CV</a>
                <a class="btn2" href="https://github.com/MaxencePeq">Projets GitHub</a>
            </div>
        </div>
    </section>

    <!-- Bloc 2 : Parcours -->
    <section class="card1 bloc2">
        <h2 class="titre2">Parcours</h2>
        <p>Diplômé d’un baccalauréat général (Lycée Franklin Roosevelt, Reims — 2024) avec spécialités NSI et Mathématiques.</p>
        <p>Actuellement en 2<sup>e</sup> année d’IUT Informatique à Reims (spécialisation développement C#).</p>
        <p>J’explore et j’apprends au travers de projets personnels (voir mon GitHub) : un mini site de référencement de musique en début d’année, puis un petit jeu web Idle/Autoclicker pendant l’été.</p>
    </section>

    <!-- Bloc 3 : Langages / outils -->
    <section class="card1 bloc3">
        <h2 class="titre2">Langages et outils</h2>
        <ul class="icones1">
            <li><img src="img/html-5.png" width="96" height="96" alt="HTML5"></li>
            <li><img src="img/css-3.png" width="96" height="96" alt="CSS3"></li>
            <li><img src="img/CSHARP.png" width="96" height="96" alt="C#"></li>
            <li><img src="img/php.png" width="96" height="96" alt="PHP"></li>
            <li><img src="img/python.png" width="96" height="96" alt="Python"></li>
            <li><img src="img/serveur-sql.png" width="96" height="96" alt="SQL"></li>
            <li><img src="img/symfony_black_03.png" width="96" height="96" alt="Symfony"></li>
            <li><img src="img/git.png" width="96" height="96" alt="Git"></li>
        </ul>
    </section>
</main>

<footer class="zone9">
    <small>© <?= $year ?> Maxence Pequeno — Portfolio</small>
</footer>
</body>
</html>
