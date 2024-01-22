<?php

$logo = 'logomariana.png';
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
  <link rel="icon" type="image/ico" href="public/images/logomariana.png" />
  <link rel="stylesheet" type="text/css" href="public/css/mariana.css">
  
</head>

<body>
<header>
    <nav>
      <ul>
        <li class="menu"><a href="page_projet.php">NOS PROJETS</a></li>
        <li class="menu"><a href="contact.php">NOUS CONTACTER</a></li>
        <li id="img"><img src="public/images/logoMariana.svg" alt="logo personnel 'eh connard'" ></li>
        <li class="menu"><a href="boutique.php">BOUTIQUE</a></li>
        <li class="menu"><a href="trombi.php">QUI SOMMES-NOUS ?</a></li>
      </ul>
    </nav>
</header>

<main>

<section id="identité">
  <h1>Mariana, la graphiste</h1>
  <img src="public/images/photo1Mariana.jepg" alt="photo de Mariana"> 
  
  <h2>alias l'animatrice</h2>

</section>

<section id="description">
  <div class="idee">
    <h3>Qui je suis ?</h3>
  <p class="texte">Je me présente, je suis Mariana GONCALVES LIMA et je suis la graphiste de l'équipe. Bon souvent on dit plus que je suis l'animatrice. C'est vrai que j'ai tendance à toujours vouloir trouver des jeux pour nous occuper mais toujours en travaillant. Je n'ai pas passé mon BAFA sans raison. </p>

  </div>

  <div class="idee">
    <h3>Ce que j'aime :</h3>
    <p>
      <ul>
        <li>J'aime beaucoup le maquillage, il y a un univers où j'en aurai fait mon métier je pense.</li>
        <li>J'aime TOUT organiser. C'est bien pour ça que je veux travailler dans l'évenementiel. Par exemple, quand je pars en vacances avec des amis je vais crée un diaporama sur notre voyage.</li>
        <li>J'aime les souvenirs, les photos. Etant quelqu'un de nostalgie j'aime garder des souvenirs. J'en reviens à faire des vidéos souvenirs annuelles à chaque mois décembre. </li>
    
      </ul>
    </p>

  </div>
</section>

<section id="contact">


</section>
</main>
