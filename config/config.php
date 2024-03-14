<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbname = "hypertrichose";

// Maak verbinding met de database
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
  die("Verbinding mislukt: " . $conn->connect_error);
}

return $conn;