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

/*
 create table `Kino` (
 id int AUTO_INCREMENT,
 name varchar(255),
 address varchar(255),
 PRIMARY KEY(id)
 )
 */

/*
 create table `Film` (
 id int AUTO_INCREMENT,
 name varchar(255),
 opis varchar(255)
 PRIMARY KEY(id)
 )
 */

/*
 create table `Bilet` (
 id int AUTO_INCREMENT,
 ilość int,
 cena float(5,2),
 PRIMARY KEY(id)
 )
 */

/*
 create table `Płatność` (
 id int AUTO_INCREMENT,
 typ varchar(255),
 data data(2016-08-31),
 PRIMARY KEY(id)
 )
 */

$conn->close();
$conn = null;

