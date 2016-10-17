<?php

$serverName = "localhost";
$userName = "root";
$password = "CodersLab";
$baseName = "exercises_db";

$conn = new mysqli($serverName, $userName, $password, $baseName);


// DELETE FROM `Product` WHERE `id` = 5;


if ($conn->connect_error) {
    die("polaczenie nieudane. Blad: " . $conn->connect_error);
}

echo "Polaczenie udane ";


$sql = "UPDATE `Product` SET `name` = "Zmieniona nazwa",'
. ' `description` = "zmieniony opis"
WHERE `id` = 5";


$result = $conn->query($sql);
if ($result != FALSE) {
    echo ("zapytanie wykonane poprawnie");
} else {
    echo ("Blad podczas wykonywania zapytania: " . $conn->error);
}

$conn->close();
$conn = null;

