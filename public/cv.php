<?php
$year = date('Y');
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>CV · Maxence Pequeno</title>
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

<main class="zone1">
    <section class="card1 bloccv">
        <h1 class="titre2">Mon CV</h1>
        <p class="txt1">Aperçu en pleine largeur, avec options de téléchargement et d’impression.</p>

        <div class="cv-wrap">
            <img class="cv-img" src="img/CVmaxpeq.png" alt="CV de Maxence Pequeno" width="707" height="1000">
        </div>

        <div class="cv-actions">
            <a class="btn1" href="img/CVmaxpeq.png" download>Télécharger</a>
            <button class="btn2" type="button" onclick="window.print()">Imprimer</button>
            <a class="btn2" href="playpage.php">← Retour</a>
        </div>
    </section>
</main>

<footer class="zone9">
    <small>© <?= $year ?> Maxence Pequeno — Portfolio</small>
</footer>
</body>
</html>
