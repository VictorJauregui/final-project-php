<?php

session_start();


class Connection{

    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $db_name = "userlist";
    public $conn;

    public function__construct(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
    }
}

class Register extends Connection{
    public function registration($name, $username, $email, $password, $confirmpassword){
        $duplicate = mysqli_query($this->conn, "SELECT * FROM tb_usertable WHERE username = '$username' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
            return 10;
            //USERNAME TAKEN
        }
        else{
            if($password == $confirmpassword){
                $query = "INSERT INTO tb_ustertable VALUES('', '$name', '$username', '$email', '$password')";
                mysqli_query($this->conn, $query);
                return 1;

            //REGISTRATION SUCCES
            }
            
        else{
            return 100;
        }    
        }

    }
}





?>