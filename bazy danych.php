<?php

$servername = "localhost";
$username = "root";
$password = "CodersLab";
$basename = "sql_cwiczenia";
$conn = new mysqli($servername, $username, $password, $basename);

if ($conn->connect_error) {
    die("Polaczenie nieudane. Blad: " . $conn->connect_error);
}
echo ("Polaczenie udane.");

$sql = "CREATE TABLE users
(
user_id int AUTO_INCREMENT,
user_name varchar(255),
user_email varchar(255) UNIQUE,
PRIMARY KEY(user_id)
)";

$result = $conn->query($sql);

if ($result != FALSE) {
    echo ("zapytanie wykonanie poprawnie");
} else {
    echo("blad podczas wykonywania zapytania " . $conn->error);
}

$conn->close();
$conn = null;
