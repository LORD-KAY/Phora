<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
include 'app/Phora.php';
$sample = new Phora();

$data = "I am Going to school";

$results = $sample->toArray($data);
var_dump($results[0]);

 ?>
