<?php
include "./include/config.inc.php";
include "./include/db.connect.php";

$name ="A";
$image="B";
$occasion="C";
$color="D";


$insert_query="INSERT INTO `women_dresses`(`dressid`, `name`, `image`, `occasion`, `color`) VALUES ('','$name','$image','$occasion','$color')";
$query_insert_db=mysql_query($insert_query);



?>