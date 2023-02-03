<?php
    require_once "server.php";

    class Conexion {
        public $conn;
        public function conectar(){
            $this->conn = mysqli_connect("localhost", "root", "", "GriffindorHouse");
        }
    }