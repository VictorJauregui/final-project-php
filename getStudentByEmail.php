<?php

require_once("students.php");

$email = $_GET['email'];

$newStudent = new Students();

echo json_encode($newStudent->getStudentByEmail($email));

