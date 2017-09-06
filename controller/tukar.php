<?php
require_once '../function/Tukar.php';
/**
* 
*/
$a = $_POST["a"];
$b = $_POST["b"];

$function = new Tukar();
echo json_encode($function->change($a, $b));

