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





<footer>
    <?php foreach ($footer as $side) : ?>
        <div id="reseaux" class="div-footer">
            <ul>
                <?php foreach ($side as $title => $url) : ?>
                    <li><a href="<?= $url ?>">
                            <img src="<?php if ($title == "Instagram"):?>public/pictogramme/instagram.svg 
                     <?php elseif ($title == "TikTok"):?>public/pictogramme/tiktok.svg
                     <?php elseif ($title == "Twitter X"):?>public/pictogramme/twitter-x.svg 
                    <?php else:?>
                      <?php endif ?>" alt="<?php if ($title == "Instagram"):?>Logo de Instagram
                     <?php elseif ($title == "TikTok") :?>Logo de TikTok
                     <?php elseif ($title == "Twitter X") :?>Logo de Twitter
                    <?php else:?>
                      <?php endif ?>">
                            <?= $title ?></a> </li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endforeach ?>
</footer>








</body>

</html>