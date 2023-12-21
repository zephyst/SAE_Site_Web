<?php
$css=null;
$page_title = 'Projets';

// A la place du code html, mettre le code qui permet de générer la page HTML (à partir du ob_start()).
ob_start();
include 'app/view/proj.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';

?>
