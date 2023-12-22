<?php
$css="public/css/quiz.reponse.css";
$page_title = 'Accueil/Quiz';

ob_start();
include "app/view/quiz.reponse.view.php";
$content = ob_get_clean();

include "app/view/common/layout.php";