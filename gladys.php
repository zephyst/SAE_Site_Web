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
  <title><?= $page_title ?></title>
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
        <img src="public/images/PhotoGladys.jpg">
        <div>
            <h2>Salut, moi c'est Gladys !</h2>
            <p>Je suis la présidente de notre association. Concrètement je fais pas grand chose, mais sur le papier, je dirige l'équipe, j'évite les conflits et les distractions.<br>Comme le reste de l'équipe, je suis en BUT MMI à l'IUT de Sénart/Fontainebleau. Cette formation me permet d'apprendre énormément sur le monde d'Internet et du multimédia en général. Comme je suis très curieuse, je m'intéresse à tous les aspects de la formation.</p>
        </div>
    </section>
    <section id=passions>
        <h3>Parlons des choses que j'aime bien...</h3>
        <div id=photo></div>
        <div id="papillons"></div>
        <div id="space"></div>
    </section>
</main>
