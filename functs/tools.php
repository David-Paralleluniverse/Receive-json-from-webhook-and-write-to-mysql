<?php
   function execute($conn,$query){
       $result=mysqli_query($conn,$query);
       return $result;
   }

   function trans($result){
     $result=mysqli_num_rows($result);
     return $result;

   }
   function check_in($link,$query){
     $result=mysqli_num_rows(execute($link,$query));
     return $result;
   }

   function skip($ce,$location){ //信息，跳转地址
    echo "<script type='text/javascript'> alert('{$ce}');location=('{$dizhi}');</script>";
    exit();
   }
?>