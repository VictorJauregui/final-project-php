<?php
session_start();

$userID="1";
$passN="1";
if($userID===$_POST["user"]&&$passN===$_POST["pass"]){
  
    header("location:panel.php");
}
else if ($passN!==$_POST["pass"]) {
   
   
    header("location:index.php?error=incorrectPassword");
}else if ($userID!==$_POST["user"]) {
   
   
    header("location:index.php?error=incorrectUserName");
}


?>