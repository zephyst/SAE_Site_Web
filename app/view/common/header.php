<?php

$logo = 'LOGOOFFPOURDEVRAI.png';
$header = [
    'Nos projets' => 'page_projet.php',
    'Boutique' => 'boutique.php',
    'Nous contacter' => 'contact.php',
    'Qui sommes nous ?' => 'trombi.php',
];

?>

<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title><?= $page_title ?></title>
  <link rel="icon" type="image/ico" href="public/images/LOGOOFFPOURDEVRAI.png" />
  <link rel="stylesheet" type="text/css" href="public/css/headerFooter.css">
  <?php if (!empty($css)): ?>
    <link rel="stylesheet" href="<?=$css?>">
  <?php endif ?>
</head>

<body>
<header>
    <a href="quiz.php"><img src="public/images/<?= $logo ?>"></a>
        <ul>
            <?php foreach($header as $title=>$url): ?>
            <li>
            <a href="<?= $url ?>"> <?= $title ?> </a>
            </li>
            <?php endforeach ?>
        </ul>
</header>
<main>
