<?php

$serverName = "localhost";
$userName = "root";
$password = "CodersLab";
$baseName = "exercises_db";

$conn = new mysqli($serverName, $userName, $password, $baseName);

if($conn->connect_error) {
    die("Blad: ").$conn->connect_error;
}

echo "Polaczono ";

$sql = "CREATE TABLE Product"
        . "("
        . "id int AUTO_INCREMENT, "
        . "name varchar(255), "
        . "description varchar(255), "
        . "price float (5,2), "
        . "PRIMARY KEY(id)"  
        . ")";
$result = $conn->query($sql);
if($result !=FALSE) {
    echo ("zapytanie wykonane poprawnie");
} else {
    echo ("Blad podczas wykonywania zapytania: " . $conn->error);
}
/*
 CREATE TABLE `Order` (
 id int AUTO_INCREMENT
 description varchar(255)
 PRIMARY KEY(id)
 )
 */




/*
 CREATE TABLE `Client` (
 id int AUTO_INCREMENT,
 name varchar(255),
 surname varchar(255),
 PRIMARY KEY(id)
 )
 */
$conn->close();
$conn = null;