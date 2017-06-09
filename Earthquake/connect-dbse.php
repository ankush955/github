<?php

$dbUsername= "Earthquake";
$dbPassword = "Earthquake";
$dbServer= "localhost";
$dbName ="Earthquake";

$connection = new mysqli($dbServer, $dbUsername, $dbPassword, $dbName);

if ($connection -> connect_errno) {
    exit("Database connection failed with reason: ".$connection->connect_errno);
}