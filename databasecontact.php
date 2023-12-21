<?php 

include "database_contact.php" ;
 $page_title = 'Contact';

ob_start();
include "app/view/contact.view.php" ;
$content = ob_get_clean() ;

include 'app/view/common/layout.php' ;


 