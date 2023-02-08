<?php
require_once("conexion.php");
class login extends conexion{
  
  public function logIn($email,$pas){
    $connection=parent::conexion();
    $pre=mysqli_prepare($connection,"SELECT * FROM userTable WHERE email = ? ");
    $pre->bind_param("s",$email);
    $pre->execute();
    $this->email="email";
    
    $result=$pre->get_result();
    
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        
        $emailv2=$row["email"];
        $pass=$row["pas"];
        
      }
    }
    return["email"=>$emailv2,"pas"=>$pass];
    }

    public function type($tipo){
      $connection=parent::conexion();
      $pre=mysqli_prepare($connection,"SELECT * FROM userTable WHERE tipo = ? ");
      $pre->bind_param("s",$tipo);
      $pre->execute();
      $this->tipo="tipo";
    }

}



if(isset($_POST["email"])&&($_POST["password"])){
  $emailLogin=$_POST["email"];
  $passLogin=$_POST["password"];

  $login=new login();
  $captura=$login->logIn($emailLogin,$passLogin);
  header('location:index.php?error=incorrect');
  // echo "usuario db :".$captura["email"]."<br>";
  // echo "     el usario ingresado :".$emailLogin."<br>";
  if($emailLogin===$captura["email"]){
  header('Location:indexPlatform.php');
}
// if($email = $_POST["email"]){
//   header('Location: . /test.html');
  
// }
}
