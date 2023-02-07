<?php
require_once("./conexion.php");
class login extends conexion{
public $id;
public function logIn($usernameemail,$password){
$result=mysqli_query($this->con,"SELECT * FROM userTable WHERE email = $usernameemail ");
$row = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) > 0){
   if($pass==$row["pas"]) {
$this->id=$row["id"];
return 1;
   }
else{
return 10;
}
}
}else {
    return 100;
}
    public function idUser(){
        return $this->id;
    }
}

