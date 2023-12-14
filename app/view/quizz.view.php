<h1>Quel type de personne es-tu dans la rue ?</h1>

<div class="form-group">
    <?php foreach ($questionnaire as $questions) :?>
    <p><?= $questions['question']?></p>
        <?php foreach ($questions['réponses'] as $name => $rep) :?>
            <?php if ($questions['nom'] == 'Quizz3') :?>
                <div class="form-group">
                        <div>
                            <input type="checkbox" id='<?= $name ?>' name='<?= $name ?>'/>
                            <label for=<?= $name ?>><?= $rep ?></label>
                        </div>
                </div>
            <?php else :?>
                <label>
                    <input
                        name="user-recommend"
                        value=<?= $name ?>
                        type="radio"
                        class="input-radio"
                    />
                    <?= $rep ?>
                    <br>
                </label>
            <?php endif?>
        <?php endforeach ?>
    <?php endforeach ?>