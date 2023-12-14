<?php

$logo = 'LOGOOFFPOURDEVRAI.png';
$header = [
    'Nous contacter' => 'contact.php',
    'Boutique' => 'boutique.php',
    'Nos projets' => 'projets.php',
    'Qui sommes nous ?' => 'trombi.php',
];

?>

<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title><?= $page_title ?></title>



  <link rel="stylesheet" type="text/css" href="public/css/stylesheet.css">
  <?php if ($mpty($css)): ?>
    <link rel="stylesheet" href="public/css/<?= $css ?>">
<?php endif ?>
</head>

<header>
    <a href="accueil.html"><img src="public/images/<?php $logo ?>"></a>
    <section>
        <ul>
            <?php foreach($header as $title=>$url): ?>
            <li>
            <a href="<?php $url ?>"> <?php $title ?> </a>
            </li>
            <?php endforeach ?>
        </ul>
    </section>
</header>