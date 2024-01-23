<?php
$css="public/css/liteyastyle.css";
$page_title = 'FicheLiteya';

ob_start();
include "app/view/FicheLiteya.php";
$content = ob_get_clean();

include "app/view/common/layout.php";