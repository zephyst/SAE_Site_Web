<?php 

$css='public/css/contact.css';
include "databaseContact.php";
$page_title = 'Contact';

ob_start();
include "app/view/contactView.php";
$content = ob_get_clean() ;

include 'app/view/common/layout.php' ;


 