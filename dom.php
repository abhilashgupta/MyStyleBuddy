<?php

include_once "simple_html_dom.php";
include "./include/config.inc.php";
include "./include/db.connect.php";

$colorarray = array ("BEIGE","BLACK","BLUE","BROWN","GOLD","GREEN","GREY","MAROON","MULTI",
"NAVY","ORANGE","PEACH","PINK","PURPLE","RED","SILVER","TURQUOISE","WHITE","YELLOW",
);
/*$genre_array = array("women-trousers","women-dresses","women-shrugs-jackets","women-shirts-tops-tees", 
"women-sweaters-sweatshirts","women-jeans-jeggings","women-shorts-skirts","women-leggings-capris",
"women-sarees","women-kurtas-kurtis-suits","women-salwars-churidars");*/

$genre_array = array("women-shirts-tops-tees","women-sweaters-sweatshirts","women-jeans-jeggings",);
//$ARRAY1 = array ("CASUAL","FORMAL");
$occa_array = array ("CASUAL","FORMAL","ETHNIC",);

$dir = "./abhi/";

foreach($genre_array as $k) {
	//mkdir ("./abhi/$k",0777);
	$table_name = str_replace("-", "_", $k);
	
	$path_dir = $dir.$k."/";
	foreach($colorarray as $j) {
		foreach($occa_array as $i) {
				$file_data=strtolower($i)."_".strtolower($j)."_output";
				$file_path=$path_dir.$file_data; // the whole path till the current file
				$file_contents_source = file_get_contents($file_path);
				echo "$file_path";
				$string = $file_contents_source;
				//$pattern = '/src="http:\/\/myntra.myntassets.com\/skin2\/images\/loader_180x240.gif"/';
				$pattern = '/src="http:\/\/myntra.myntassets.com\/skin2\/images\/loader_180x240.gif"/';

				$replacement = '';
				$string_modified = preg_replace($pattern, $replacement, $string);

				$string_temp = $string_modified;
				$pattern_temp = '/original=/';
				$replacement_temp = 'src=';
				$file_contents = preg_replace($pattern_temp, $replacement_temp, $string_temp);

				//echo $file_contents;
				// Create a DOM object from a string
				$html = str_get_html($file_contents);

				$image = $html->find('div[class="mk-prod-img"]'); 
				//$image2 = $html->find('div[class="jquery-lazyload"]'); 
				$name = $html->find('span[class="mk-prod-name"]'); 

				//$ret = $html->find('li')->find('img');


				$imagesize = sizeof($image);
				for ($count =0 ; $count < $imagesize; $count++){
				if (strpos($name[$count], 'Men') == FALSE|| strpos($name[$count], 'Sandal') == FALSE|| strpos($name[$count], 'Juttis') == FALSE|| strpos($name[$count], 'Clutch') == FALSE|| strpos($name[$count], 'Brief') == FALSE|| strpos($name[$count], 'Brief')== FALSE||strpos($name[$count], 'Shoe')== FALSE||strpos($name[$count], 'Toes')== FALSE||strpos($name[$count], 'Heel')== FALSE||strpos($name[$count], 'Wedge')== FALSE||
				strpos($name[$count], 'Pump')== FALSE||strpos($name[$count], 'Bra')== FALSE||strpos($name[$count], 'Sandals') == FALSE){
					 
					 $name_dress = $name[$count];
					 $image_dress = $image[$count];
					 $occasion = strtolower($i);
					 $color = strtolower($j);
					 $insert_query="INSERT INTO `".$table_name."`(`dressid`, `name`, `image`, `occasion`, `color`) VALUES ('','$name_dress','$image_dress','$occasion','$color')";
				$query_insert_db=mysql_query($insert_query);
				echo $name[$count]."</br>".$image[$count]."</br>";
				}
				}
		echo "first loop done!";
	}
	echo "second loop done!";
}
echo "third loop done!";


}






?>
