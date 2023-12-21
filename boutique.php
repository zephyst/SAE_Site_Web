<?php
include "databaseboutique.php";
$css="public/css/boutique.css";
$page_title = 'Boutique';

ob_start();
include "app/view/boutique.view.php";
$content = ob_get_clean();

include "app/view/common/layout.php";