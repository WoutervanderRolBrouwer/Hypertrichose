<?php
require_once '../contact/config/config.php';

// Je overige
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

// Voer een query uit om gegevens op te halen
$sql = "SELECT * FROM gebruikers";
$result = $conn->query($sql);

// Controleer of er rijen zijn teruggegeven
if ($result->num_rows > 0) {
    // Output de gegevens in een tabel
    echo "<table border='0'>
    <tr>
    <th>ID</th>
    <th>Voornaam</th>
    <th>Achternaam</th>
    <th>E-mail</th>
    <th>Onderwerp</th>
    <th>Bericht</th>
    </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['mail_form'] . "</td>";
        echo "<td>" . $row['subject'] . "</td>";
        echo "<td>" . $row['message'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>Het bericht is verstuurd";
} else {
    echo "Geen gegevens gevonden.";
}

// Sluit de databaseverbinding
$conn->close();
?>
