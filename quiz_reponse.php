<?php
$css="public/css/quizReponse.css";
$page_title = 'Accueil/Quiz';

ob_start();
include "app/view/quizReponseView.php";
$content = ob_get_clean();

include "app/view/common/layout.php";