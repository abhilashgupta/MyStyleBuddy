<?php

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

$dir = "./Data";
//$directory_file = scandir($dir);
//print_r($directory_file);

//foreach ($directory_file as $file_data) {
$dom = new DomDocument;
/* Load the HTML */
//$dom->loadHTMLFile("http://www.myntra.com/women-dresses");
$file_data="Brown";
$file_path=$dir."/".$file_data;
$dom->loadHTMLFile($file_path);
/* Create a new XPath object */
$xpath = new DomXPath($dom);
/* Query all <td> nodes containing specified class name */
$nodes = $xpath->query('//*[@id="mk-search-results"]/ul');
/* Set HTTP response header to plain text for debugging output */
header("Content-type: text/plain");

//Test File 
$file_write_output = $file_data."_output";
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
?>
