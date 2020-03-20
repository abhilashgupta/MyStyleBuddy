<?php


$colorarray = array ("BEIGE","BLACK","BLUE","BROWN","GOLD","GREEN","GREY","MAROON","MULTI",
"NAVY","ORANGE","PEACH","PINK","PURPLE","RED","SILVER","TURQUOISE","WHITE","YELLOW",
);
$genre_array = array("women-trousers","women-dresses","women-shrugs-jackets","women-shirts-tops-tees", 
"women-sweaters-sweatshirts","women-jeans-jeggings","women-shorts-skirts","women-leggings-capris",
"women-sarees","women-kurtas-kurtis-suits","women-salwars-churidars");
//$ARRAY1 = array ("CASUAL","FORMAL");
$occa_array = array ("CASUAL","FORMAL","ETHNIC",);
foreach($genre_array as $k) {
	mkdir ("./abhi/".$k,0777);
	$path_dir = "./abhi/".$k."/";
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

