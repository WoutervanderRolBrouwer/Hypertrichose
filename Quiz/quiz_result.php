<?php
    // Controleer of het formulier is ingediend
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Array met de juiste antwoorden
        $correct_answers = array(
            "question1" => "a",
            "question2" => "b",
            "question3" => "a",
            "question4" => "d",
            "question5" => "b",
            "question6" => "a",
            "question7" => "a",
            "question8" => "c",
            "question9" => "b",
            "question10"=> "c",
        );

        // Initialiseer score
        $score = 0;

        // Loop door de ingediende antwoorden en controleer ze met de juiste antwoorden
        foreach ($correct_answers as $question => $correct_answer) {
            if (isset($_POST[$question]) && $_POST[$question] == $correct_answer) {
                $score++;
            }
        }

        // Toon de score aan de gebruiker
        echo "<p>Je score is: $score / " . count($correct_answers) . "</p>";
    } else {
        // Als het formulier niet is ingediend, toon een foutmelding
        echo "<p>Er is een fout opgetreden. Probeer het opnieuw.</p>";
    }
    ?>

    <p><a href="quiz.php">Terug naar de quiz</a></p>