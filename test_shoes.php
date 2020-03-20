<?php


$colorarray = array ("BEIGE","BLACK","BLUE","BRONZE","BROWN","COPPER","GOLD","GREEN","GREY","GUNMETAL","KHAKI","MAROON","MULTI",
"NAVY","ORANGE","PEACH","PINK","PURPLE","RED","SILVER","TAN","TURQUOISE","WHITE","YELLOW",
);
$genre_array = array("women-sandals","women-sandals-heels","women-slippers-flip-flops","women-boots");
//$ARRAY1 = array ("CASUAL","FORMAL");
$occa_array = array ("CASUAL","FORMAL",);
mkdir ("./shoes",0777);
foreach($genre_array as $k) {
	
	mkdir ("./shoes/".$k,0777);
	$path_dir = "./shoes/".$k."/";
	foreach($colorarray as $j) {
		foreach($occa_array as $i) {
		$ch = curl_init ("http://www.myntra.com/".$k."#!|colour=".strtolower($i)."|Occasion_article_attr=".strtolower($j));
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
		$stringData = curl_exec ($ch);
		$myFile = $path_dir.strtolower($i)."_".strtolower($j);
		$fh = fopen($myFile, 'w') or die("can't open file");

		fwrite($fh, $stringData);
		fclose($fh);
		}
		echo "first loop done!";
	}
	echo "second loop done!";
}
echo "third loop done!";
/*
foreach($occa_array as $j) {
	foreach($colorarray as $i) {
	$ch = curl_init ("http://www.myntra.com/women-dresses#!|colour=".strtolower($i)."|Occasion_article_attr=".strtolower($j));
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
	$stringData = curl_exec ($ch);
	$myFile = "abhi/".strtolower($i)."_".strtolower($j);
	$fh = fopen($myFile, 'w');

	fwrite($fh, $stringData);
	fclose($fh);
	}
}*/

?>

