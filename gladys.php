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
            <div>
                <h3>La photo...</h3>
                <p>J'ai toujours apprécié la photo, et j'adore les retoucher, en faisant des collages ou en jouant avec les couleurs, les contrastes, les lumières, etc. J'ai même fait mon stage de troisième chez une photographe, et c'était une expérience très enrichissante.<br>Je tiens une page Instagram où je montre les photos que je réalise avec mon appareil photo de temps en temps. J'ai aussi réalisé quelques petits projets photos, et on peut les retrouver sur cette page. Cliquez à droite pour voir mon compte !</p>
            </div>
            <a id="compte" href="https://www.instagram.com/glads.camera/"><img src="public/images/insta_gladys.jpg">@glads.camera</a>
        </div>
        <div id="space">
            <img src="public/images/papillon.jpeg">
            <div>
                <h3>L'espace...</h3>
                <p>Quand j'étais petite, je rêvais de devenir astrophysicienne, mais mes résultats en physique à partir de la 1ère m'ont bien fait comprendre que c'était un amour qui n'était pas réciproque.<br>Je suis FASCINÉE par l'espace, mais surtout par les étoiles. Je connais pas mal de constellation, et un de mes plus grands rêves serait de réussir à voir la Voie Lactée de mes propres yeux.<br>L'été dernier, j'ai adoré observer la Lune avec mes meilleurs amis en forêt grâce à notre lunette astronomique, et j'ai hâte de recommencer cette année.</p>
            </div>
        </div>
        <div id="papillons">
            <div>
                <h3>Les papillons...</h3>
                <p>Si vous pensiez qu'il est impossible d'être amoureux.se des papillons, et bien vous vous trompez !<br>J'adore par dessus tout cet animal (ou cet insecte, si vous préférez), déjà parce que je le trouve très beau, mais aussi parce que j'ai beaucoup de souvenirs personnels liés à celui-ci depuis toute petite. Je connais pas mal de noms d'espèces différentes et je pourrais passer des journées entières à les observer !</p>
            </div>
            <img src="public/images/telescope.jpeg">
        </div>
    </section>
</main>
