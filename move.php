<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
$org_image='image/a.jpg';
$destination='image12/a.jpg';

if( !rename($org_image,$destination))
   {
    echo 'failed';
   } 
else 
   {
    echo 'move';
   }
?>