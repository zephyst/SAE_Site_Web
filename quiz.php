<?php
include "databaseQuiz.php";
$css="public/css/quiz.css";
$page_title = 'Accueil/Quiz';

ob_start();
include "app/view/quiz.view.php";
$content = ob_get_clean();

include "app/view/common/layout.php";