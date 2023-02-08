<?php

use function PHPSTORM_META\type;

require_once("conexion.php");
class login extends conexion{
  
  public function logIn($email){
    $connection=parent::conexion();
    $pre=mysqli_prepare($connection,"SELECT email, pas, tipo FROM userTable WHERE email = ? ");
    $pre->bind_param("s",$email);
    $pre->execute();
    
    $result=$pre->get_result();
    
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        
        $emailv2=$row["email"];
        $pass=$row["pas"];
        $type=$row["tipo"];
        
      }
    }
    return["email"=>$emailv2,"pas"=>$pass,"tipo"=>$type];
    }


}


if(isset($_POST["email"])&&($_POST["password"])){
  $emailLogin=$_POST["email"];
  $passLogin=$_POST["password"];

  $login=new login();
  $captura=$login->logIn($emailLogin,$passLogin);
  // header('location:index.php?error=incorrect');
  // echo "usuario db :".$captura["email"]."<br>";
  // echo "     el usario ingresado :".$emailLogin."<br>";
  if($emailLogin===$captura["email"] && password_verify($passLogin, $captura["pas"])) {
    if($captura["tipo"] === "Teacher"){
      header("Location:platformTeacher.php");
    } else{
      header("Location:platformStudent.php");
    }
    echo "you are inside";
  // header('Location:indexPlatform.php');
}
// if($email = $_POST["email"]){
//   header('Location: . /test.html');
  
// }
}
