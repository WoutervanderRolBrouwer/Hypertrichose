<?php
$dsn = "mysql:host=localhost;dbname=hypertrichose";
$DBusername = 'stmakpabot'; /** Vervang dit naar je eigen gebruikersnaam */
$DBpassword = 'zX[LqFHU@rx9rQJT'; /** Vervang dit naar je eigen wachtwoord */
$charset = 'utf8mb4';

$host = 'localhost'; // Replace 'localhost' with the actual host name
$db = 'hypertrichose'; // Replace 'hypertrichose' with the actual database name

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $DBusername, $DBpassword, $opt);

$username = ''; // vervang dit door de daadwerkelijke gebruikersnaam
$correct_answers = 10; // vervang dit door het daadwerkelijke aantal correcte antwoorden
$incorrect_answers = 10; // Replace '10' with the actual number of incorrect answers

$sql = "INSERT INTO quiz_results (username, quiz_date, correct_answers, incorrect_answers) VALUES (?, NOW(), ?, ?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$username, $correct_answers, $incorrect_answers]);
$stmt->setFetchMode(PDO::FETCH_ASSOC);

header("Location: quiz_result.php");

