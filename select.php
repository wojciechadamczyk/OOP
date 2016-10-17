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


$sql = "SELECT * FROM `Product`";

$result = $conn->query($sql);
if($result !=FALSE) {
    echo ("zapytanie wykonane poprawnie ");
} else {
    echo ("Blad podczas wykonywania zapytania: " . $conn->error);
}

//var_dump($result);
//echo $result->num_rows;
echo "<br>";
//echo $result->field_count;

if($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
        echo "Produkt o nazwie ".$row['name']." i id ".$row['id'];
        var_dump($row);
    }
    } else {
        echo ("brak wynikow ");
    }

$conn->close();
$conn = null;

