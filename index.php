<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
include 'app/Phora.php';
$sample = new Phora();

$data = "acheampong lord, offei";

$results = $sample->WordUpper($data);
echo "$results";

 ?>