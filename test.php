<?php
$ch = curl_init ("http://www.myntra.com/women-dresses#!|colour=brown");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$stringData = curl_exec ($ch);

$myFile = "Brown";
$fh = fopen($myFile, 'w');

fwrite($fh, $stringData);
fclose($fh);

?>