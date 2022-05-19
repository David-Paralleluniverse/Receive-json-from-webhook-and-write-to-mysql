<?php 
  include "functs/connect.php";
  include "functs/tools.php";
  $request = file_get_contents('php://input'); 
  $input = json_decode($request,true); 

  $firstName = $input['payload']; 

  $text = print_r($firstName,true); 
  file_put_contents('output.txt', $text); 
  $query="UPDATE cels SET cels='$text' WHERE Id=1";
  execute($conn,$query);
?>