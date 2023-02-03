<?php
    class conexion{
        public $con;
        public function connection(){
            $this->con = mysqli_connect("localhost", "root", "", "final-project-php");
        }
    }

    ?>