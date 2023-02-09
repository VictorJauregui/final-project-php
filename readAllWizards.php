<?php
require_once("students.php");

$newStudent = new Students();
$allStudents = $newStudent->allStudents();

echo json_encode($allStudents);



