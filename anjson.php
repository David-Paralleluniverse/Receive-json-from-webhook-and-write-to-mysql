<?php 
  include "functs/connect.php";
  include "functs/tools.php";
  $request = file_get_contents('php://input'); 
  $input = json_decode($request,true); 

  $firstName = $input['payload']; 
  //$text = print_r($firstName,true); 
  $text=json_decode($firstName,true);//加true保证真正转成php数组
  file_put_contents('output.txt', $text["tmp"].$text["humi"]); 
  $tmp=$text["tmp"]; $humi=$text["humi"];
  //$query="UPDATE cels SET cels='$text' WHERE Id=1";
  $query="INSERT INTO cels(cels,humi) VALUES('$tmp','$humi')";
  execute($conn,$query);
?>