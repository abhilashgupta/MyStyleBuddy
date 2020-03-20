<?php

$colorarray = array ("BEIGE","BLACK","BLUE","BRONZE","BROWN","COPPER","GOLD","GREEN","GREY","GUNMETAL","KHAKI","MAROON","MULTI",
"NAVY","ORANGE","PEACH","PINK","PURPLE","RED","SILVER","TAN","TURQUOISE","WHITE","YELLOW",
);
$genre_array = array("women-sandals","women-sandals-heels","women-slippers-flip-flops","women-boots");
//$ARRAY1 = array ("CASUAL","FORMAL");
$occa_array = array ("CASUAL","FORMAL",);

function domNodeList_to_string($DomNodeList) {
    $output = '';
    $i=0;
    $doc = new DOMDocument;
    while ( $node = $DomNodeList->item($i) ) {
        // import node
        $domNode = $doc->importNode($node, true);
        // append node
        $doc->appendChild($domNode);
        $i++;
    }
    $output = $doc->saveXML();
    $output = print_r($output, 1);
    // I added this because xml output and ajax do not like each others
   // $output = htmlspecialchars($output);
    return $output;
}

/* Use internal libxml errors -- turn on in production, off for debugging */
libxml_use_internal_errors(true);
/* Createa a new DomDocument object */

$dir = "./shoes/";

foreach($genre_array as $k) {
	//mkdir ("./abhi/$k",0777);
	$path_dir = $dir.$k."/";
	foreach($colorarray as $j) {
		foreach($occa_array as $i) {
			$dom = new DomDocument;
			/* Load the HTML */
			//$dom->loadHTMLFile("http://www.myntra.com/women-dresses");
			$file_data=strtolower($i)."_".strtolower($j);
			$file_path=$path_dir.$file_data; // the whole path till the current file
			$dom->loadHTMLFile($file_path);
			/* Create a new XPath object */
			$xpath = new DomXPath($dom);
			/* Query all <td> nodes containing specified class name */
			$nodes = $xpath->query('//*[@id="mk-search-results"]/ul');
			/* Set HTTP response header to plain text for debugging output */
			header("Content-type: text/plain");

			//Test File 
			$file_write_output = $file_path."_output";
			$fh = fopen($file_write_output, 'w') or die("can't open file");
			//print_r($nodes);

			/* Traverse the DOMNodeList object to output each DomNode's nodeValue */
			foreach ($nodes as $i => $node) {
				echo "Node($i): ", $node->nodeValue, "\n";	
				//print_r($node->attributes);
				$output = domNodeList_to_string($nodes);
				 fwrite($fh, $output);
			}


			//}
			fclose($fh);
		}
		echo "first loop done!";
	}
	echo "second loop done!";
}
echo "third loop done!";
//$directory_file = scandir($dir);
//print_r($directory_file);

//foreach ($directory_file as $file_data) {

?>
