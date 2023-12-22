<section class="formulaire">
    <h2>Vous voulez qu'on intervienne pour sensibiliser sur le harcèlement de rue ? <br>
        Utilisez notre formulaire ci-dessous ! </h2>
    <form name="comment">
        <div class="statut">
            <p>Quel est votre statut</p>
            <?php foreach ($statut as $rep) :?>
                <label class="reponse">
                    <input
                            name="status"
                            value="<?= $rep ?>"
                            type="radio"
                            class="input-radio"
                    />
                    <?= $rep ?>
                    <br>
                </label>
            <?php endforeach ?>
            <label class="reponse">
                <input name="status" type="radio" class="input-radio"/>
                <input type="text" name="status" placeholder="Autre"/>
                <br>
            </label>
        </div>
        <div class="commentaire">
            <p>Votre demande :</p>
            <textarea
                    id="comments"
                    class="input-textarea"
                    name="comment"
                    placeholder="Veuillez taper votre commentaire ... (250 caractères max)"
                    maxlength="250"
                    wrap="hard"
                    cols="50"
                    rows="6"
            ></textarea>
        </div>

        <div class="mail">
            <p>Votre mail : </p>
            <textarea
                    id="comments"
                    class="input-textarea"
                    name="comment"
                    placeholder="Insérez votre mail..."
                    cols="50"
                    rows="1"
            ></textarea>
        </div>
        <div id="envoyer">
            <button type="submit" class="submit" form="comment">Envoyer</button>
        </div>

    </form>



</section>

<section class="contact">
  <h1>BESOIN DE NOUS CONTACTER ?</h1>
    <div id="methodes">
        <?php foreach ($contacts as $methode) : ?>
            <div class="method">
                <p class="intitulé"> <?= $methode["intitulé"] ?> : </p>
                <p class="message"> <?= $methode["message"] ?></p>
                <p class="groupe"> <?= $methode["adresse"] ?> </p>
            </div>
        <?php endforeach ?>
    </div>
</section>

