<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
include 'app/Phora.php';
$sample = new Phora();
$string_name = "acheampong lord Offei Banks";

$results = $sample::WordCap($string_name);
 echo "$results";
 ?>