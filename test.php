<?php 

$request = file_get_contents('php://input'); 
$input = json_decode($request,true); 

$firstName = $input['payload']; 

$text = print_r($firstName,true); 
file_put_contents('output.txt', var_export($text, TRUE)); 

?>