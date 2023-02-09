<?php

require_once("login.php");

$email = $_GET['email'];

$newStudent = new login();


echo json_encode($newStudent->logIn($email));