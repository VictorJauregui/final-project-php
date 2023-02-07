<?php
    class conexion{
        public $con;
        public function connection(){
            $this->con = mysqli_connect("localhost", "root", "", "griffindor");
        }
    }

    $servername = "localhost";
    $username = "username";
    $password = "password";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";


    
    ?>





