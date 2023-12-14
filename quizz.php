<?php
include "databaseQuizz.php";

ob_start();
include "app/view/quizz.view.php";
$content = ob_get_clean();

include "app/view/common/layout.php";