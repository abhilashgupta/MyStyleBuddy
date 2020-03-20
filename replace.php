<?php

$file_contents = file_get_contents('./temp/womenTrousers_output');

$string = $file_contents;
//$pattern = '/src="http:\/\/myntra.myntassets.com\/skin2\/images\/loader_180x240.gif"/';
$pattern = '/src="http:\/\/myntra.myntassets.com\/skin2\/images\/loader_180x240.gif"/';

$replacement = '';
$string_modified = preg_replace($pattern, $replacement, $string);

$string_temp = $string_modified;
$pattern_temp = '/original=/';
$replacement_temp = 'src=';
$final = preg_replace($pattern_temp, $replacement_temp, $string_temp);

$myFile = "TEST_FILE";
$fh = fopen($myFile, 'w');

fwrite($fh, $final);
fclose($fh);





?>
