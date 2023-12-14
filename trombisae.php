<?php
$css=null;
include "database.trombi.php" ;
$page_title = 'trombinoscope';

ob_start();
include "app/view/trombisae.view.php" ;
$content = ob_get_clean() ;

include 'app/view/common/layout.php' ;
