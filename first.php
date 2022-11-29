<?php
$xml=simplexml_load_file("l.xml") or die("Error: Cannot create object");
$jsondata = json_encode($xml);
echo "<pre>";
print_r($jsondata);

?>      