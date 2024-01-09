<?php
$css="public/css/alexandre.css";
$page_title = 'Présentation Alexandre Meux';

ob_start();
include "app/view/ficheAlexandre.view.php";
$content = ob_get_clean();

include "app/view/common/layout.php";