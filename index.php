<?php
ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', true );
include 'app/Phora.php';
$sample = new Phora();

$data = "";

$results = $sample->toArray($data);
var_dump($results[0]);

 ?>