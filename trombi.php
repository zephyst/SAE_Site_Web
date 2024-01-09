<?php
$css="public/css/trombi.css";
include "databaseTrombi.php";
$page_title = 'Trombinoscope';

ob_start();
include "app/view/trombiView.php";
$content = ob_get_clean() ;

include 'app/view/common/layout.php' ;
