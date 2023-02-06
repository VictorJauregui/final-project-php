<?php
require_once("students.php");

$id = $_GET["studentId"];
$name = $_REQUEST["nameWizard"];
$lastName = $_REQUEST["lastNameWizard"];
$email = $_REQUEST["emailWizard"];
$firstCalification = $_REQUEST["firstCalification"];
$secondCalification = $_REQUEST["secondCalification"];
$thirdCalification = $_REQUEST["thirdCalification"];


$newStudent = Students::getId($id);
$updateStudents = $newStudent->update($name, $lastName, $email, $firstCalification, $secondCalification, $thirdCalification, $id);

echo json_encode($updateStudents);