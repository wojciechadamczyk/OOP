<?php

$serverName = "localhost";
$userName = "root";
$password = "CodersLab";
$baseName = "exercises_db";

$conn = new mysqli($serverName, $userName, $password, $baseName);

if($conn->connect_error) {
    die("polaczenie nieudane. Blad: " . $conn->connect_error);
}

echo "Polaczenie udane ";


$sql = "INSERT INTO `Product` (`name`,`description`,`price`)"
        . "VALUES ('kolejna nazwa','inny opis',55)";    


$result = $conn->query($sql);
if($result !=FALSE) {
    echo ("zapytanie wykonane poprawnie");
} else {
    echo ("Blad podczas wykonywania zapytania: " . $conn->error);
}

$last_id = $conn->insert_id;
echo "nowy rekord o id " . $last_id. "zostal wstawiony.";

$conn->close();
$conn = null;
