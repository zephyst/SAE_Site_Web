<?php
$rsxEC = [
    "instagram" =>
        [
            "titre" => "Instagram",
            "chemin" => "public/pictogramme/instagram.svg ",
            "alt" => "Logo de Instagram",
            "href" => "https://www.instagram.com/eh_connard/?igshid=OGQ5ZDc2ODk2ZA%3D%3D"
        ],
    "tiktok" => [
        "titre" => "TikTok",
        "chemin" => "public/pictogramme/tiktok.svg ",
        "alt" => "Logo de TikTok",
        "href" => "https://www.tiktok.com/@eh_connard?_t=8hva9LT0cTI&_r=1",
    ],
    "twitter" => [
        "titre" => "Twitter X",
        "chemin" => "public/pictogramme/twitter-x.svg  ",
        "alt" => "Logo de Twitter",
        "href" => "https://x.com/eh_connard?s=21&t=gI8Bnbzdov4wuAo_5X6Yng"
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linus Blairon | Eh Connard !</title>
    <link rel="icon" type="image/ico" href="public/images/LOGOOFFPOURDEVRAI.png" />
    <link rel="stylesheet" href="public/css/linus.css">
</head>
<body>
<header>
    <div class="navbar-left">
        <img src="public/images/LOGOOFFPOURDEVRAI.png" alt="logoEhConnard">
        <h3>Linus Blairon</h3>
    </div>

    <div class="navbar-right">
        <a href="./trombi.php">Revenir au site principal</a>
    </div>
</header>
<main>
    <section id="heroBanner">

        <div class="circle"></div>
        <div class="circle" id="fixedCircle"></div>
        <div class="hero-content">
            <div class="moi">
                <img src="public/images/PhotoLinus.jpeg" alt="photo de linus">
                <h1>Linus Blairon <br><span>Développeur</span></h1>
            </div>
        </div>
    </section>
    <a href="#content" class="descendre">
        <img src="public/pictogramme/chevron-down.svg" alt="descendre">
    </a>
    <section id="content">
        <div class="cards">
            <card>
                <h2>Qui suis-je ?</h2>
                <p>
                    Je suis un développeur et designer web pour l'association Eh Connard !. J'ai anciennement travaillé sur
                    plusieurs projets, par exemple un escape game numérique pour le CNFPT, où j'ai fais l'UI design et participé au
                    game design. Je suis étudiant en BUT MMI à l'IUT de Sénart Fontainebleau et je vis ma meilleure vie.
                    J'aime beaucoup l'UI/UX design et j'aimerais en faire mon métier.
                </p>
            </card>
            <card>
                <h2>Mes passions :</h2>
                <ul>
                    <li>J'adore faire du VTT, que ce soit en forêt ou en montagne, cross country ou trail, c'est le sport que
                        j'ai fais qui m'a le plus plu de tous. Quand j'en fais je me sens super bien.
                    </li>
                    <li>Je suis aussi passionné par les véhicules de combat terrestres (les blindés), la technologie derrière
                        chaque composant, pourquoi et comment les véhicules sont créés, comment ils fonctionnent, etc.
                    </li>
                    <li>Toujours dans les véhicules de guerre, les avions de chasse aussi me fascinent, pareil que pour les
                        chars et autres blindés, sauf que là ils volent.
                    </li>
                </ul>
            </card>
        </div>

        <card id="deuceCard">
            <h2>Une photo que j'aime bien</h2>
            <img src="public/images/chatLinus.jpeg" alt="photoDeMonChat">
            <p>C'est ma chatte de quand j'étais petit, elle est malheureusement morte d'une maladie incurable à 2 ans</p>
        </card>
    </section>
</main>
<footer>
    <ul>
        <li>Mes réseaux :</li>
        <li>
            <a href="https://www.instagram.com/zephyr_cmonblaz/">
                <img src="public/pictogramme/instagram.svg" alt="Logo Instagram" style="filter: invert(100%) sepia(5%) saturate(7500%) hue-rotate(302deg) brightness(114%) contrast(102%);">
                Instagram
            </a>
        </li>
        <li>
            <a href="https://www.linkedin.com/in/linus-blairon-873995294/">
                <img src="public/pictogramme/linkedin.svg" alt="Logo LinkedIn" style="filter: invert(100%) sepia(5%) saturate(7500%) hue-rotate(302deg) brightness(114%) contrast(102%);">
                LinkedIn
            </a>
        </li>
    </ul>
    <ul>
        <li>Réseaux de Eh ! Connard :</li>
        <?php foreach ($rsxEC as $item) :?>
            <li>
                <a href="<?=$item["href"]?>">
                    <img src="<?=$item["chemin"]?>" alt="Logo <?=$item["titre"]?>" style="filter: invert(100%) sepia(5%) saturate(7500%) hue-rotate(302deg) brightness(114%) contrast(102%);">
                    <?=$item["titre"]?>
                </a>
            </li>
        <?php endforeach?>
    </ul>
</footer>
</body>
</html>