<?php

require_once '../contact/config/config.php';



// Databaseverbinding parameters
$servername = 'localhost';
// Naam van de database
$dbName = 'projectcontactsql';
// Naam van de gebruiker
$username = 'projectcontact-2024';
// Wachtwoord van de gebruiker
$password = '!T-WJWQA!hTnhxR[';

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

    // Voorbereid de SQL-query om gegevens in te voegen
    $sql = "INSERT INTO gebruikers (firstname, lastname, mail_form, subject, message) VALUES ('$firstname', '$lastname', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Doorsturen naar de pagina waar de gegevens worden weergegeven
        header("Location: view_contact.php");
        exit(); // Stop verdere uitvoering van het script
    } else {
        echo "Er is een fout opgetreden bij het verzenden van het bericht: " . $conn->error;
    }
}


// Sluit de databaseverbinding
$conn->close();
?>