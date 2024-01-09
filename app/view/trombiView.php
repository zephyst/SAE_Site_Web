<h1>Qui sommes nous ?</h1>

<p id="presentation">EH CONNARD !, est un collectif féministe qui lutte contre le harcèlement de rue, pour changer les regards et les mentalités, pour que les femmes regagnent l’espace public que ces conn*rds leur ont volé. Notre but : sensibiliser les jeunes sur le sujet, pour éviter qu’ils finissent par agir de la pire manière possible.</p>

<h2>Les gonzesses :</h2>


    <div id="trombinoscope">
        <?php foreach ($equipe as $membre) : ?>
            <div class="membre">
                <a href="<?= $membre['link'] ?>" class="ficheMembre">
                    <img src="<?= $membre['photo'] ?>">
                    <div class="text">
                        <p class="prenom"><?= $membre["prenom"] ?> </p>
                        <p class="role"><?= $membre["role"] ?> </p>
                    </div>

                </a>
            </div>
        <?php endforeach ?>
    </div>