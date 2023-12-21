<?php foreach ($students as $student) : ?>
  <div class="carte">
    <a href="fiche.html">
      <?php if (isset($student['photo'])) {
        $photo = 'groupe' . $student['group'] . '/small/' . $student['photo'];
      } else {
        $photo = 'defaut.png';
      }
      ?>
      <figure class="photo"><img src="Public/images/<?= $photo ?>" alt="photo de Aimé Mihi">
      </figure>
      <div class="infos">
        <p class="nom"><?php echo $student['firstname'] ?> <span><?php echo $student['lastname'] ?></span></p>
        <p class="ddn"><?php echo $student['birthdate'] ?></p>
        <p class="groupe">groupe <span><?php echo $student['group'] ?></span></p>
      </div>
    </a>
  </div>
<?php endforeach ?>