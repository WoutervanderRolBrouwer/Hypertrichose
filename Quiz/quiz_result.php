<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Resultaat</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../Quiz/Styling/quiz.css">
    <link rel="stylesheet" href="../Quiz\Styling\quiz_result.css">
</head>
<body>

    <div class="result">
        <h1>Quiz Resultaat</h1>
        <?php
        // Controleer of de quiz is ingediend
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Simuleer de correcte antwoorden (normaal gesproken zou dit uit een database komen of elders worden opgeslagen)
            $correct_answers = array(
                "a", // Vraag 1
                "b", // Vraag 2
                "a", // Vraag 3
                "d", // Vraag 4
                "b", // Vraag 5
                "a", // Vraag 6
                "a", // Vraag 7
                "c", // Vraag 8
                "b", // Vraag 9
                "c"  // Vraag 10
            );

           // Array om de antwoorden van de gebruiker op te slaan
$user_answers = array();

// Controleer of de array-sleutels zijn ingesteld voordat je ze gebruikt
if(isset($_POST["question1"])) {
    $user_answers[] = $_POST["question1"];
}
if(isset($_POST["question2"])) {
    $user_answers[] = $_POST["question2"];
}
if(isset($_POST["question3"])) {
    $user_answers[] = $_POST["question3"];
}
if(isset($_POST["question4"])) {
    $user_answers[] = $_POST["question4"];
}
if(isset($_POST["question5"])) {
    $user_answers[] = $_POST["question5"];
}
if(isset($_POST["question6"])) {
    $user_answers[] = $_POST["question6"];
}
if(isset($_POST["question7"])) {
    $user_answers[] = $_POST["question8"];
}
if(isset($_POST["question8"])) {
    $user_answers[] = $_POST["question8"];
}
if(isset($_POST["question9"])) {
    $user_answers[] = $_POST["question9"];
}
if(isset($_POST["question10"])) {
    $user_answers[] = $_POST["question10"];
}
// Voeg vergelijkbare controles toe voor de andere vragen...

// Loop door de vragen en vergelijk de antwoorden
for ($i = 0; $i < count($correct_answers); $i++) {
    $question_number = $i + 1;
    echo "<p>Vraag $question_number: ";
    if (isset($user_answers[$i])) {
        if ($user_answers[$i] === $correct_answers[$i]) {
            echo "<span class='correct-answer'>Jouw antwoord is correct!</span>";
        } else {
            echo "<span class='incorrect-answer'>Jouw antwoord is fout. Het juiste antwoord is: " . $correct_answers[$i] . "</span>";
        }
    } else {
        echo "<span class='incorrect-answer'>Je hebt deze vraag niet beantwoord.</span>";
    }
    echo "</p>";
}

        } else {
            echo "<p>De quiz is niet ingediend.</p>";
        }
        ?>

</body>
</html>
