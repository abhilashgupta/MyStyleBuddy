<?php
//Data Scraping - Flipkart


$array_theme = array(
"Shirts", 
"Dresses", 
"Ethnic", 
"Polos",
"Jeans",
"Leggings",
"Trousers",
"Jackets",
"Formal",
"Sports",
"Winter"
);


$array_link= array(
"http://www.flipkart.com/shirts-tops-tunics/pr?sid=2oq%2Cc1r%2Ccck", 
"http://www.flipkart.com/womens-clothing/dresses-skirts", 
"http://www.flipkart.com/womens-clothing/ethnic-wear", 
"http://www.flipkart.com/shirts-tops-tunics/dresses-skirts/ethnic-wear/polos-t-shirts/pr?sid=2oq%2Cc1r%2Cfpt",
"http://www.flipkart.com/shirts-tops-tunics/dresses-skirts/ethnic-wear/polos-t-shirts/jeans-shorts/pr?sid=2oq%2Cc1r%2Cuuk",
"http://www.flipkart.com/shirts-tops-tunics/dresses-skirts/ethnic-wear/polos-t-shirts/jeans-shorts/leggings-jeggings/pr?sid=2oq%2Cc1r%2Cq7g",
"http://www.flipkart.com/shirts-tops-tunics/dresses-skirts/ethnic-wear/polos-t-shirts/jeans-shorts/leggings-jeggings/trousers-capris/pr?sid=2oq%2Cc1r%2Cuo8",
"http://www.flipkart.com/shirts-tops-tunics/dresses-skirts/ethnic-wear/polos-t-shirts/jeans-shorts/leggings-jeggings/trousers-capris/shrugs-jackets/pr?sid=2oq%2Cc1r%2Cpyo",
"http://www.flipkart.com/shirts-tops-tunics/dresses-skirts/ethnic-wear/polos-t-shirts/jeans-shorts/leggings-jeggings/trousers-capris/shrugs-jackets/formal-wear/pr?sid=2oq%2Cc1r%2Cf4y",
"http://www.flipkart.com/shirts-tops-tunics/dresses-skirts/ethnic-wear/polos-t-shirts/jeans-shorts/leggings-jeggings/trousers-capris/shrugs-jackets/formal-wear/sports-gym-wear/pr?sid=2oq%2Cc1r%2C6p8",
"http://www.flipkart.com/shirts-tops-tunics/dresses-skirts/ethnic-wear/polos-t-shirts/jeans-shorts/leggings-jeggings/trousers-capris/shrugs-jackets/formal-wear/sports-gym-wear/lingerie-sleepwear/accessories/winter-seasonal-wear/pr?sid=2oq%2Cc1r%2C67x"
);

$count_array = sizeof($array_theme);

for ($i = 0; $i < $count_array ; $i++){

	$command_exec = "wget -O ".$array_theme[$i]." ".$array_link[$i];
	shell_exec($command_exec);
	echo "Done Extracting: $array_theme";

}




//$exec("http://www.flipkart.com/womens-clothing/dresses-skirts");
//echo $variablee;



?>