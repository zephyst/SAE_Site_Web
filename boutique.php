<body>
    <section>
        <img src="" alt="Sweat Eh Connard!">
        <h2>Sweat "Les Gonzesses sont de sortie."</h2>
        <h2>30€</h2>
        <select name="TailleSweat">
            <option value="xs">XS</option>
            <option value="s">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
        <select name="QuantiteSweat">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <p>Sweat capuche floqué avec cordons.<br>Poche kangourou.<br>Logo "LES GONZESSES SONT DE SORTIE" sur le devant.<br>Lavable en machine à 40°.</p>
    </section>

    <section>
        <img src="" alt="T-Shirt 'Les Gonzesses sont de sortie'">
        <h2>T-Shirt "Les Gonzesses sont de sortie."</h2>
        <h2>15€</h2>
        <select name="TailleTShirt">
            <option value="xs">XS</option>
            <option value="s">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
        <select name="QuantiteTShirt">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <p>T-Shirt floqué.<br>Logo "LES GONZESSES SONT DE SORTIE" sur le devant.<br>Lavable en machine à 40°.</p>
    </section>
<section>
        <img src="" alt="ToteBag 'Les Gonzesses sont de sortie'">
        <h2>ToteBag "Les Gonzesses sont de sortie."</h2>
        <h2>10€</h2>
        <select name="QuantiteToteBag">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <p>ToteBag floqué<br>Logo "LES GONZESSES SONT DE SORTIE" sur le devant.<br>Lavable en machine à 40°.</p>
    </section>
</body>


<?php foreach ($boutique as $article) : ?>

    <div class= "article">
        <p class= "nom"><?= $article["nom"] ?> </p>
        <p class="prix"><?= $article["prix"] ?> </p>
        <p class= "description"><?= $article["description"] ?> </p>
        <p class= "images" ><?= $article["images"] ?> </p>
   
        <select name="Quantite">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>



    </div>
