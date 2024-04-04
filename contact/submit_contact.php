<?php

require_once '../contact/config/config.php';

// Databaseverbinding parameters
$servername = 'localhost';
// Naam van de database
$dbName = 'hypertrichose';
// Naam van de gebruiker
$username = 'root';
// Wachtwoord van de gebruiker
$password = '';

// Maak verbinding met de database
$conn = new mysqli($servername, $username, $password, $dbName);

// Controleer op connectiefouten
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Controleer of het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Haal de ingediende gegevens op
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['mail_form'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Controleer of het e-mailadres al 3 keer is verzonden vandaag
    $today = date("Y-m-d");
    $email = $conn->real_escape_string($email);
    $check_sql = "SELECT COUNT(*) AS count FROM gebruikers WHERE mail_form = '$email' AND DATE(timestamp) = '$today'";
    $check_result = $conn->query($check_sql);
    $count = $check_result->fetch_assoc()['count'];

    if ($count < 3) {
        // Voorbereid de SQL-query om gegevens in te voegen
        $sql = "INSERT INTO gebruikers (firstname, lastname, mail_form, subject, message) VALUES ('$firstname', '$lastname', '$email', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {
            // Doorsturen naar de pagina waar de gegevens worden weergegeven
            header("Location: view_contact.php");
            exit(); // Stop verdere uitvoering van het script
        } else {
            echo "Er is een fout opgetreden bij het verzenden van het bericht: " . $conn->error;
        }
    } else {
        echo "Je hebt vandaag al 3 berichten verzonden met dit e-mailadres.";
    }
}

// Sluit de databaseverbinding
$conn->close();
?>
