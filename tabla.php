<?php
 require_once ("./proces.php");
 require_once ("./conexion.php");
 class tabla extends conexion{
    // public $tipo;
    // public $nombre;
    // public $apellido;
    // public $email;
    // public $pas;
    // public function create($tipo,$nombre,$apellido,$email,$pas){
    //     $this->connection();
    //     $add = mysqli_prepare($this->con,"INSERT INTO userTable (tipo,nombre,apellido,email,pas) VALUES(?,?,?,?,?)");
    //     $add->bind_param("sssss",$tipo,$nombre,$apellido,$email,$pas);
    //     $add->execute();
    
    
    // }
    public function registerConnect($tipo,$nombre,$apellido,$email,$pas){
        $connection=parent::conexion();
        //  $sql="INSERT INTO usertable (tipo,nombre,apellido,email,pas) VALUES(?,?,?,?,?)";
        // $query=$connection->prepare($sql);
        // $query->bind_param("sssss",$tipo,$nombre,$apellido,$email,$pas);
        // return $query->execute();
        $add = mysqli_prepare($connection,"INSERT INTO userTable (tipo,nombre,apellido,email,pas) VALUES(?,?,?,?,?)");
        $add->bind_param("sssss",$tipo,$nombre,$apellido,$email,$pas);
        $add->execute();
        
    }
}

if(isset($_POST["register-btn"])){
    if (empty($_POST["for__select--one"])||empty($_POST["name"])||empty($_POST["last-name"])||empty($_POST["email"])||empty($_POST["pass"])){
        echo "<p>can t be empty </p>";
    }else{
        $type=$_POST["for__select--one"];
        $name=$_POST["name"];
        $lastName=$_POST["last-name"];
        $mail=$_POST["email"];
        $password=password_hash($_POST["pass"], PASSWORD_DEFAULT);

        
    
        $user=new tabla();

        if($user->registerConnect($type,$name,$lastName,$mail,$password)){
            
        }else{
            header("location:./index.php");
        }
    }
}

