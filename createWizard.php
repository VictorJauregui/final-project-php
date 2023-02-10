<?php

require_once("students.php");

$name = $_REQUEST["nameWizard"];
$lastName = $_REQUEST["lastNameWizard"];
$email = $_REQUEST["emailWizard"];
$firstCalification = $_REQUEST["firstCalification"];
$secondCalification = $_REQUEST["secondCalification"];
$thirdCalification = $_REQUEST["thirdCalification"];

$newStudent = new Students();
$newStudent->createStudent($name, $lastName, $email, $firstCalification, $secondCalification,$thirdCalification);

echo json_encode([
    'ok' => true,
    'nameWizard' => $name,
    'lastName' => $lastName,
    'email' => $email,
    'firstCalification' => $firstCalification, 
    'secondCalification' => $secondCalification,
    'thirdCalification' => $thirdCalification 
]);