<?php

$footer = [
    "footer_left" =>
    [
        "Instagram" => 'https://www.instagram.com/eh_connard/?igshid=OGQ5ZDc2ODk2ZA%3D%3D',
        "TikTok" => 'https://www.tiktok.com/@eh_connard?_t=8hva9LT0cTI&_r=1',
        "Twitter X" => 'https://x.com/eh_connard?s=21&t=gI8Bnbzdov4wuAo_5X6Yng',
    ],
    "footer_right" =>
    [
        "Nous contacter" => "url fictive",
        "Conditions générales de ventes" => "url fictive",
        "Politique de confidentialité" => "url fictive"
    ]
];
?>



<?php foreach ($footer as $reseaux) : ?>
<?php endforeach ?>


<footer>
    <div id="reseaux" class="div-footer">
        <ul>
            <li><a href="<?= $footer["footer_left"]["Instagram"] ?>"> <img src="" alt="Logo d'Instagram"></a></li>
            <li><a href="<?= $footer["footer_left"]["TikTok"] ?>"> <img src="" alt="Logo de TikTok"></a></li>
            <li><a href="<?= $footer["footer_left"]["Twitter X"] ?>"> <img src="" alt="Logo de Twitter "></a></li>
        </ul>
    </div>




    <div id="reseaux2" class="div-footer">
        <ul>
            <li><a href="<?= $reseaux["Nous contacter"] ?>">Nous contacter</a></li>
            <li><a href="<?= $reseaux["Conditions générales de ventes"] ?>">Conditions générales de ventes</a></li>
            <li><a href="<?= $reseaux["Politique de confidentialité"] ?>">Politique de confidentialité</a></li>
        </ul>
    </div>
</footer>



</body>

</html>