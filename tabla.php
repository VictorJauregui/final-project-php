<?php
 require_once ("./conexions/conexion.php");
 require_once ("./conexions/conexion.php");
 class tabla extends conexion{

    public function registerConnect($tipo,$nombre,$apellido,$email,$pas){
        $connection=parent::conexion();
        $add = mysqli_prepare($connection,"INSERT INTO userTable (tipo,nombre,apellido,email,pas) VALUES(?,?,?,?,?)");
        $add->bind_param("sssss",$tipo,$nombre,$apellido,$email,$pas);
        $add->execute();
        
    }
}

if(isset($_POST["register-btn"])){
    if (empty($_POST["for__select--one"])||empty($_POST["name"])||empty($_POST["last-name"])||empty($_POST["email"])||empty($_POST["pass"])){
        header("location:./index.php?sorry=registeredIncompleted");
    }else{
        $type=$_POST["for__select--one"];
        $name=$_POST["name"];
        $lastName=$_POST["last-name"];
        $mail=$_POST["email"];
        $password=password_hash($_POST["pass"], PASSWORD_DEFAULT); 

        $user=new tabla();

        if($user->registerConnect($type,$name,$lastName,$mail,$password)){
            
        }else{
            header("location:./index.php?register=correct");
        }
    }
}

?>