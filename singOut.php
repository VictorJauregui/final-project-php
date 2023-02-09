<?php

require_once("login.php");
session_start();

$newStudent = new login();
$singOut = $newStudent->singOut("victor");


echo json_encode($singOut);


