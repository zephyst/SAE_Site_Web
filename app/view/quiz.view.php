
    <h1>Quel type de personne es-tu dans la rue ?</h1>

    <div id="form">
        <div class="topper"></div>
        <div class="form-group">
            <?php foreach ($questionnaire as $nom => $questions) :?>
                <div class="question" id="<?= $nom ?>">
                    <p><?= $questions['question']?></p>
                    <?php foreach ($questions['réponses'] as $name => $rep) :?>
                        <?php if ($questions['nom'] == 'Quizz3') :?>
                            <div class="reponse">
                                <input type="checkbox" id='<?= $name ?>' name='<?= $name ?>'/>
                                <label for=<?= $name ?>><?= $rep ?></label>
                            </div>

                        <?php else :?>
                            <label class="reponse">
                                <input
                                        name="<?= $questions['nom'] ?>"
                                        value="<?= $name ?>"
                                        type="radio"
                                        class="input-radio"
                                />
                                <?= $rep ?>
                                <br>
                            </label>
                        <?php endif?>
                    <?php endforeach ?>
                </div>
            <?php endforeach ?>
        </div>
        <div class="downer">
            <a class="finir" href="../../../SAE_Site_Web/quiz.reponse.php">Finir le quiz</a>
        </div>
    </div>




