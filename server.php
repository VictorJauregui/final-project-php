<?php

$server = "localhost";
$user = "root";
$pass = "";

$con = new mysqli($server, $user, $pass);

if($con->connect_error){
    die("Connection failed");
}

$createBd = "CREATE DATABASE IF NOT EXISTS GriffindorHouse";
// if($con->query($createBd) === TRUE){
//     echo "DB is created";
// }

$useDb = "USE GriffindorHouse";
$con->query($useDb);

$createStudentTable = "CREATE TABLE IF NOT EXISTS students  
(id int unsigned auto_increment not null PRIMARY KEY,
Name varchar(30) NOT NULL,
LastName varchar(40) NOT NULL,
Email varchar(40) NOT NULL,
firstTrimester int(3) NOT NULL,
secondTrimester int(3) NOT NULL,
thirdTrimester int(3) NOT NULL)";

$con->query($createStudentTable);
$con->close();


?>
