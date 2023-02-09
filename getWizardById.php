<?php

require_once("students.php");
session_start();

$newStudent = new Students();


echo json_encode($newStudent->getId(137));

