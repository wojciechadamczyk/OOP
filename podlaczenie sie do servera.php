<?php

$serverName = "localhost";
$userName = "root";
$password = "CodersLab";
$baseName = "exercises_db";

$conn = new mysqli($serverName, $userName, $password, $baseName);

if($conn->connect_error) {
    die("polaczenie nieudane. Blad: " . $conn->connect_error);
}

$sql = "";


$result = $conn->query($sql);
if($result == false) {
    echo ("zapytanie wykonane poprawnie");
} else {
    echo ("Blad podczas wykonywania zapytania: " . $conn->error);
}

$conn->close();
$conn = null;