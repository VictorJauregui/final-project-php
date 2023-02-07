<?php

require_once("students.php");
session_start();

// $id = $_SESSION["id"];
$newStudent = new Students();


echo json_encode($newStudent->getId(133));

