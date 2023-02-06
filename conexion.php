<?php
    class conexion{
       private $server;
       private $userName;
       private $pass;
       private $db;
        
        public function __construct(){
            $this->server="localhost";
            $this->userName="root";
            $this->pass="";
            $this->db="userlist";
        }
        public function conexion(){
            $con=mysqli_connect($this->server,$this->userName,$this->pass,$this->db);
        }
        
    }
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="userlist"
    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?>
    ?>