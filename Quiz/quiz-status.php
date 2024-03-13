<?php
require '../config/config.php';

// Query om het aantal mensen dat de quiz heeft ingevuld op te halen
$stmt = $pdo->query("SELECT COUNT(DISTINCT user_id) as total_users FROM quiz_results");
$row = $stmt->fetch();
$total_users = $row['total_users'];
echo "Totaal aantal gebruikers die de quiz hebben ingevuld: $total_users\n";

// Query om het totaal aantal correcte en incorrecte antwoorden op te halen
$stmt = $pdo->query("SELECT SUM(correct_answers) as total_correct, SUM(incorrect_answers) as total_incorrect FROM quiz_results");
$row = $stmt->fetch();
$total_correct = $row['total_correct'];
$total_incorrect = $row['total_incorrect'];
echo "Totaal aantal correcte antwoorden: $total_correct\n";
echo "Totaal aantal incorrecte antwoorden: $total_incorrect\n";
