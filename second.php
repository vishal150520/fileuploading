<?php
require('db.php');
$xmlDoc = new DOMDocument();
$xmlDoc->load("l.xml");

$x = $xmlDoc->documentElement;

foreach ($x->childNodes AS $item) 
   {
    echo "name"."<br>";
    echo $item->product->display-name. " = " . $item->nodeValue . "<br>";
   }
foreach ($x->childNodes AS $item) 
   {  
    echo "short-description"."<br>";
     print "".$item->product->short-description. " = " . $item->nodeValue . "<br>";
   }
foreach ($x->childNodes AS $item) 
   {  
     echo "images"."<br>";
     print $item->product->images. " = " . $item->nodeValue . ",<br>";
   }  

foreach ($x->childNodes AS $item) 
   {  
     echo "language code en and ar "."<br>";
     print $item->product->ean. " = " . $item->nodeValue . "<br>";
   } 
?>