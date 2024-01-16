


<?php foreach ($boutique as $article) : ?>

    <div class= "article"> 
        <p class= "nom" > <?= $article["nom"] ?> </p>
        <p class="prix"><?= $article["prix"] ?></p>
        <p class= "description"><?= $article["description"] ?></p>
        <p class="taille" ><?= $article["taille"] ?> </p>
        <select name="QuantiteTShirt">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select></p>
</div>

<div class="photo">
<p class= "images" >  <img src="<?= $article["image"] ?>" </p>
</div>
<?php endforeach ?> 
