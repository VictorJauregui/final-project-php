<?php
require_once("students.php");

$id = $_GET["studentId"];
$name = $_REQUEST["nameWizardUpdate"];
$lastName = $_REQUEST["lastNameWizardUpdate"];
$email = $_REQUEST["emailWizardUpdate"];
$firstCalification = $_REQUEST["firstCalificationUpdate"];
$secondCalification = $_REQUEST["secondCalificationUpdate"];
$thirdCalification = $_REQUEST["thirdCalificationUpdate"];



$newStudent = new Students();
$updateStudents = $newStudent->update($name, $lastName, $email, $firstCalification, $secondCalification, $thirdCalification, $id);


echo json_encode([
    'ok' => true
]);