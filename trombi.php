<?php
$css="public/css/trombi.css";
include "database.trombi.php" ;
$page_title = 'Trombinoscope';

ob_start();
include "app/view/trombi.view.php";
$content = ob_get_clean() ;

include 'app/view/common/layout.php' ;
