<?php
include "databaseBoutique.php";
$css="public/css/boutique.css";
$page_title = 'Boutique';

ob_start();
include "app/view/boutiqueView.php";
$content = ob_get_clean();

include "app/view/common/layout.php";