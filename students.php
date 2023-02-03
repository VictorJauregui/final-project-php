<?php
    require_once "conexion.php";

    class Students extends Conexion{
        public $name;
        public $lastName;
        public $email;
        public $firstTrimester;
        public $secondTrimester;
        public $thirdTrimester;

        // CREATE
        public function createStudent(){
            $this->conectar();
            $pre = mysqli_prepare($this->conn, "INSERT INTO Students (name, lastName, email, firstTrimester,secondTrimester, thirdTrimester) VALUES (?,?,?,?,?,?)");
            $pre->bind_param("sssiii", $this->name, $this->lastName, $this->email, $this->firstTrimester, $this->secondTrimester, $this->thirdTrimester);
            $pre->execute();
            
        }

        public function update(){
            
        }


    }


    $newStudent = new Students();
    $newStudent->name = "Victor";
    $newStudent->lastName = "Más tieso";
    $newStudent->email = "victormastieso@hotmail.com";
    $newStudent->firstTrimester = 10;
    $newStudent->secondTrimester = 10;
    $newStudent->thirdTrimester = 10;
    $newStudent->createStudent();

    ?>