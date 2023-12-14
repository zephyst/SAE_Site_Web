<h1>
        Qui sommes nous ?
    </h1>

    <p>EH CONNARD !, est un collectif féministe qui lutte contre le harcèlement de rue, pour changer les regards et les
        mentalités, pour que les femmes regagnent l’espace public que ces conn*rds leur ont volé. Notre but :
        sensibiliser les jeunes sur le sujet, pour éviter qu’ils finissent par agir de la pire manière possible.</p>

    <h1>
        Les gonzesses :
    </h1>

    <main>

<?php foreach ($trombinoscope as $membre) : ?>

    <div class= "membre">
        <a href="fiche.html">
        <p class="prenom"><?= $membre["prenom"] ?> </p>
        <p class="role"><?= $membre["role"] ?> </p>
        <p class="images"
</a>
    </div>
    <?php endforeach ?> 
