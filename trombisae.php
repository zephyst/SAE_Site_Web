<?php

include "database.php" ;
$page_title = 'trombinoscope';

ob_start();
include "app/view/trombinoscope.view.php/trombisae.view.php" ;
$content = ob_get_clean() ;

include 'www/view/trombinoscope.view.php/layout.php' ;
