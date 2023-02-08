<?php
    require_once "./conexions/conexionWizards.php";

    class Students extends Conexion{
        public $id;
        public $name;
        public $lastName;
        public $email;
        public $firstTrimester;
        public $secondTrimester;
        public $thirdTrimester;

        // CREATE
        public function createStudent($name, $lastName, $email, $firstTrimester, $secondTrimester,$thirdTrimester){
            $this->conectar();
            $pre = mysqli_prepare($this->conn, "INSERT INTO students (name, lastName, email, firstTrimester,secondTrimester, thirdTrimester) VALUES (?,?,?,?,?,?)");
            $pre->bind_param("sssiii", $name, $lastName, $email, $firstTrimester, $secondTrimester, $thirdTrimester);
            $pre->execute();
            
        }

        //READ 
        public static function allStudents(){
            $conexion = new Conexion();
            $conexion->conectar();
            $pre = mysqli_prepare($conexion->conn, "SELECT * FROM students");
            $pre->execute();
            $res = $pre->get_result();
            $students = [];

            while($student = $res->fetch_object(Students::class))
                array_push($students, $student);
                return $students;
        }
        
        // UPDATE
        public function update($name, $lastName, $email, $firstTrimester, $secondTrimester,$thirdTrimester, $id){
            $this->conectar();
            $pre = mysqli_prepare($this->conn, "UPDATE students SET name=?, lastName=?, email=?, firstTrimester=?,secondTrimester=?, thirdTrimester=? WHERE id = ?") ;
            $pre->bind_param("sssiiii", $name, $lastName, $email, $firstTrimester, $secondTrimester, $thirdTrimester, $id);
            $pre->execute();

        }

        
        public function delete(){
            $this->conectar();
            $pre = mysqli_prepare($this->conn, "DELETE FROM students WHERE id = ?");
            $pre->bind_param("i", $this->id);
            $pre->execute();

        }

        public static function getId($id){
            $conexion = new Conexion();
            $conexion->conectar();
            $pre = mysqli_prepare($conexion->conn, "SELECT * FROM Students WHERE id = ?");
            $pre->bind_param("i", $id);
            $pre->execute();
            $res = $pre -> get_result();

            return $res->fetch_object(Students::class);
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