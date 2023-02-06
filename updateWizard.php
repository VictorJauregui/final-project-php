<?php
require_once("students.php");

$name = $_REQUEST["nameWizardUpdate"];
$lastName = $_REQUEST["lastNameWizardUpdate"];
$email = $_REQUEST["emailWizardUpdate"];
$firstCalification = $_REQUEST["firstCalificationUpdate"];
$secondCalification = $_REQUEST["secondCalificationUpdate"];
$thirdCalification = $_REQUEST["thirdCalificationUpdate"];

$newStudent = new Students();
$newStudent->update($name, $lastName, $email, $firstCalification, $secondCalification,$thirdCalification);

echo json_encode([
    'ok' => true,
    'nameWizard' => $name,
    'lastName' => $lastName,
    'email' => $email,
    'firstCalification' => $firstCalification, 
    'secondCalification' => $secondCalification,
    'thirdCalification' => $thirdCalification 
]);
