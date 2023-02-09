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
            return $con;
        }
        
    }
   