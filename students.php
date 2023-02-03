<?php
    require_once "conexion.php";

    class Students extends Conexion{
        public $id;
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
        // UPDATE
        public function update(){
            $this->conectar();
            $pre = mysqli_prepare($this->conn, "UPDATE Students set name=?, lastName=?, email=?, firstTrimester=?,secondTrimester=?, thirdTrimester=? where id = ?") ;
            $pre->bind_param("sssiiii", $this->name, $this->lastName, $this->email, $this->firstTrimester, $this->secondTrimester, $this->thirdTrimester,$this->id);
            $pre->execute();

        }
            

        public static function getId($id){
            $conexion = new Conexion();
            $conexion->conectar();
            $pre = mysqli_prepare($conexion->conn, "SELECT * FROM Students WHERE id = ?");
            $pre->bind_param("i", $id);
            $pre->execute();
            $res = $pre -> get_result();

            return $res->fetch_object(students::class);
    }
}


    // $newStudent = new Students();
    // $newStudent->name = "Victor";
    // $newStudent->lastName = "Más tieso";
    // $newStudent->email = "victormastieso@hotmail.com";
    // $newStudent->firstTrimester = 10;
    // $newStudent->secondTrimester = 10;
    // $newStudent->thirdTrimester = 10;
    // $newStudent->createStudent();




    ?>