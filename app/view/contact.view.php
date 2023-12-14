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

        <section id="contact"> 
            <h1>BESOIN DE NOUS CONTACTER ? </h1>
            <h2 class="soustitre">NOUS ECRIRE</h2>
            <p class="description">Merci de nous écrire que par ce moyen de communication.</p>
            <p class="information">par mail : contact@ehconnard.org </p>
    
            <h2 class="soustitre">NOUS APPELER</h2>
            <p class="description"> Appelez nous si vous voulez une intervention, une idée de projet…</p>
            <p class="information"> numéro de téléphone : 06 xx xx xx 76</p>
    
            <h2 class="soustitre">NOUS TROUVER</h2>
            <p class="description"> Voici où vous pouvez nous trouver.</p>
            <p class="information"> adresse postale : 240 rue de la motte, Moissy-Cramayel 77550 France</p>
    
            <h2 class="soustitre">NOS RÉSEAUX SOCIAUX   </h2>
            <p class="description"> Pour plus de fun, suivez nous sur nos réseaux</p>
            <p class="information"> Instagram : <a href="https://www.instagram.com/eh_connard/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==">@ehconnard</a> <br> Twitter X : <a href="https://x.com/eh_connard?s=20">@eh_connard</a> <br> TikTok : <a href="https://www.tiktok.com/@eh_connard?is_from_webapp=1&sender_device=pc">@ehconnard</a> </p>
    
        </section>

        <?php 
        $contacts = [
           1 => [
              'intitulé' => 'NOUS ECRIRE',
              'message' => 'Merci de nous écrire que par ce moyen de communication.',
              'adresse1' => 'par mail : contact@ehconnard.org',
           ],

           2 => [
            'intitulé' => 'NOUS APPELER',
              'message' => 'Appelez nous si vous voulez une intervention, une idée de projet…',
              'adresse1' => 'numéro de téléphone : 06 xx xx xx 76',
           ],

          3 => [
            'intitulé' => 'NOS RÉSEAUX SOCIAUX',
            'message' => 'Pour plus de fun, suivez nous sur nos réseaux',
            'adresse1' => 'Instagram :' ,
            'adresse2' => 'Twitter X : ' , 
            'adresse3' => 'TikTok : ',
           ]
           
         ];