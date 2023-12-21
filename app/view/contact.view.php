<section class="formulaire">
            <h3>Vous voulez qu'on intervienne pour sensibiliser sur le harcèlement de rue ? Utilisez notre formulaire au-dessous ! </h3>
            <div class="statue">
                <p>Qui êtes-vous ?</p>
                <select id="dropdown" name="role" class="form-control" required>
                  <option disabled selected value>Sélectionner une catégorie</option>
                  <option value="student">lycée</option>
                  <option value="job">entreprise</option>
                  <option value="jeunesse">service jeunesse</option>
                  <option value="other">autres</option>
                </select>
            </div>
    
            <div class="commentaire">
                <p>Votre demande :</p>
                <textarea
                  id="comments"
                  class="input-textarea"
                  name="comment"
                  placeholder="Veuillez taper votre commentaire ..."
                ></textarea>
              </div>
    
              <div class="mail">
                <p>Votre mail : </p>
                <textarea
                  id="comments"
                  class="input-textarea"
                  name="comment"
                  placeholder="Insérer votre mail..."
                ></textarea>
              </div>
</section>

  <section class="contact">
  <h1>BESOIN DE NOUS CONTACTER ? </h1>

<?php foreach ($contacts as $methode) : ?>
<p class="intitulé"> <?= $methode["intitulé"] ?> </p>
<p class="message"> <?= $methode["message"] ?></p>
<p class="groupe"> <?= $methode["adresse"] ?> </p>
</section>

<?php endforeach ?> 