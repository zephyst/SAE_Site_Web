<?php

$footer_left = [
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


$footer_right = [
    1 => [
        "titre" => "Nous contacter",
        "href" => "url fictive",
    ],
    2 => [
        "titre" => "Conditions générales de ventes",
        "href" => "url fictive",
    ],
    3 => [
        "titre" => "Politique de confidentialité",
        "href" => "url fictive",
    ],
];




?>

<footer>
    <div class="footer-left">
        <ul>
            <?php foreach ($footer_left as $reseaux) : ?>
                <li><a href="<?= $reseaux["href"] ?>"> <img src="<?= $reseaux["chemin"] ?>" alt="<?= $reseaux["alt"] ?>"><?= $reseaux["titre"] ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>


    <div class="footer-right">
        <ul>
            <?php foreach ($footer_right as $contact) : ?>
                <li><a href="<?= $contact["href"] ?>"> <?= $contact["titre"] ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>


</footer>
</body>
</html>