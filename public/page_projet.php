<?php
$css="public/css/projets.css";
$page_title = 'Projets';

ob_start();
include 'app/view/projetsView.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';

?>