<?php

$server = "localhost";
$user = "root";
$pass = "";

$con = new mysqli($server, $user, $pass);

if($con->connect_error){
    die("Connection failed");
}

$createBd = "CREATE DATABASE IF NOT EXISTS GriffindorHouse";
if($con->query($createBd) === TRUE){
    echo "DB is created";
}

$useDb = "USE GriffindorHouse";
$con->query($useDb);

$createStudentTable = "CREATE TABLE IF NOT EXISTS students  
(id int unsigned auto_increment not null PRIMARY KEY,
Name varchar(30) not null,
LastName varchar(40) not null,
Email varchar(40) not null,
firstTrimester float(3) not null,
secondTrimester float(3) not null,
thirdTrimester float(3) not null)";

$con->query($createStudentTable);
$con->close();


