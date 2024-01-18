<?php

$logo = 'LOGOOFFPOURDEVRAI.png';
$header = [
    'Nous contacter' => 'contact.php',
    'Boutique' => 'boutique.php',
    'Nos projets' => 'page_projet.php',
    'Qui sommes nous ?' => 'trombi.php',
];

?>

<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Page de Gladys</title>
  <link rel="icon" type="image/ico" href="public/images/logo_gladys.png" />
  <link rel="stylesheet" type="text/css" href="public/css/gladys.css">
</head>

<body>
<header>
    <a href="quiz.php"><img src="public/images/logo_gladys.png"></a>
        <ul>
            <?php foreach($header as $title=>$url): ?>
            <li>
            <a href="<?= $url ?>"> <?= $title ?> </a>
            </li>
            <?php endforeach ?>
        </ul>
</header>
<main>
    <section id=presentation>
        <img src="public/images/PhotoGladys.jpg" id="trombi">
        <div>
            <h2>Salut, moi c'est Gladys !</h2>
            <p>Je suis la présidente de notre association. Concrètement je fais pas grand chose, mais sur le papier, je dirige l'équipe, j'évite les conflits et les distractions.<br>Comme le reste de l'équipe, je suis en BUT MMI à l'IUT de Sénart/Fontainebleau. Cette formation me permet d'apprendre énormément sur le monde d'Internet et du multimédia en général. Comme je suis très curieuse, je m'intéresse à tous les aspects de la formation.</p>
        </div>
    </section>
    <section id=passions>
        <h3>Parlons des choses que j'aime bien...</h3>
        <div id=photo>
            <p>J'ai toujours apprécié la photo, et j'adore les retoucher, en faisant des collages ou en jouant avec les couleurs, les contrastes, les lumières, etc.<br>Je tiens une page Instagram où je montre les photos que je réalise avec mon appareil photo de temps en temps. J'ai aussi réalisé quelques petits projets photos, et on peut les retrouver sur la page.</p>
            <a id="compte" href="https://www.instagram.com/glads.camera/"><img src="public/images/insta_gladys.jpg">@glads.camera</a>
        </div>
        <div id="papillons">
            <img src="">
            <p></p>
        </div>
        <div id="space">
            <p></p>
            <img src="">
        </div>
    </section>
</main>
