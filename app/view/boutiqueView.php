


<?php foreach ($boutique as $article) : ?>
    <div class="article">
        <img src="<?= $article["image"] ?>"
        <div class= "content">
            <div class="content">
                <p class= "nom" > <?= $article["nom"] ?> </p>
                <p class="prix"><?= $article["prix"] ?></p>
                <p class= "description"><?= $article["description"] ?></p>
                <div class="selecteurs">
                    <div class="selecteurs">
                        <?= $article["taille"] ?>
                        <select name="Quantite">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

            </div>

        </div>
    </div>
<?php endforeach ?>