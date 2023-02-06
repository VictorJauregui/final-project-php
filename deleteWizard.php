<?php

require_once("students.php");

$id = $_GET["studentId"];

$newStudent = Students::getId($id);
$deleteStudent = $newStudent->delete();

echo json_encode($deleteStudent);
