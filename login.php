<?php
require_once("conexion.php");
class login extends conexion{
  
  public function logIn($email,$pas){
    $connection=parent::conexion();
    $result=mysqli_query($connection,"SELECT * FROM userTable WHERE email = ? ");
    $result->bind_param("ss",$email,$pas);
    $result->execute();
    $this->email="email";
    echo $result;
  }


}
if(isset($_POST["btn-login"])){

if($email = $_POST["email-login"]){
  header('Location: . /test.html');
  
}
}
