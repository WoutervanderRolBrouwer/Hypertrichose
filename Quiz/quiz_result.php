<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Resultaat</title>
    <link rel="stylesheet" href="../Quiz/css/quiz.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
<header>
    <nav class="main-menu">
        <img src="logo/logo.svg" height="90px" alt="">
        <ul >
                <li><a class="home" href="index.php" id="home">HOME</a></li>
                <li><a class="information" href="infopage/information.php">INFORMATION</a></li>
                <li><a class="form" href="form/form.php">FORM</a></li>
                <li><a class="contact" href="contact/contact.php">CONTACT</a></li>
                <li><a class="behandelingen" href="behandelingen/behandelingen.php">BEHANDELINGEN</a></li>
        </ul>
    </nav>
</header>

<div class="result">
        <h1>Quiz Resultaat</h1>
        <?php

        $correct_answers = array(
            "A", // Vraag 1
            "B", // Vraag 2
            "A", // Vraag 3
            "D", // Vraag 4
            "B", // Vraag 5
            "A", // Vraag 6
            "C", // Vraag 7
            "A", // Vraag 8
            "D", // Vraag 9
            "A"  // Vraag 10
        );

        $answer1 = isset($_POST['question1']) ? $_POST['question1'] : '';
        $answer2 = isset($_POST['question2']) ? $_POST['question2'] : '';
        $answer3 = isset($_POST['question3']) ? $_POST['question3'] : '';
        $answer4 = isset($_POST['question4']) ? $_POST['question4'] : '';
        $answer5 = isset($_POST['question5']) ? $_POST['question5'] : '';
        $answer6 = isset($_POST['question6']) ? $_POST['question6'] : '';
        $answer7 = isset($_POST['question7']) ? $_POST['question7'] : '';
        $answer8 = isset($_POST['question8']) ? $_POST['question8'] : '';
        $answer9 = isset($_POST['question9']) ? $_POST['question9'] : '';
        $answer10 = isset($_POST['question10']) ? $_POST['question10'] : '';

        $totalCorrect = 0;
        $correctAnswersInfo = array();
        $incorrectAnswersInfo = array();

        if ($answer1 == $correct_answers[0]) {
            $totalCorrect++;
            $correctAnswersInfo[] = "Vraag 1: Juist";
        } else {
            $incorrectAnswersInfo[] = "Vraag 1: Fout (Juist antwoord: " . $correct_answers[0] . ")";
        }

        if ($answer2 == $correct_answers[1]) {
            $totalCorrect++;
            $correctAnswersInfo[] = "Vraag 2: Juist";
        } else {
            $incorrectAnswersInfo[] = "Vraag 2: Fout (Juist antwoord: " . $correct_answers[1] . ")";
        }

        if ($answer3 == $correct_answers[2]) {
            $totalCorrect++;
            $correctAnswersInfo[] = "Vraag 3: Juist";
        } else {
            $incorrectAnswersInfo[] = "Vraag 3: Fout (Juist antwoord: " . $correct_answers[2] . ")";
        }

        if ($answer4 == $correct_answers[3]) {
            $totalCorrect++;
            $correctAnswersInfo[] = "Vraag 4: Juist";
        } else {
            $incorrectAnswersInfo[] = "Vraag 4: Fout (Juist antwoord: " . $correct_answers[3] . ")";
        }

        if ($answer5 == $correct_answers[4]) {
            $totalCorrect++;
            $correctAnswersInfo[] = "Vraag 5: Juist";
        } else {
            $incorrectAnswersInfo[] = "Vraag 5: Fout (Juist antwoord: " . $correct_answers[4] . ")";
        }

        if ($answer6 == $correct_answers[5]) {
            $totalCorrect++;
            $correctAnswersInfo[] = "Vraag 6: Juist";
        } else {
            $incorrectAnswersInfo[] = "Vraag 6: Fout (Juist antwoord: " . $correct_answers[5] . ")";
        }

        if ($answer7 == $correct_answers[6]) {
            $totalCorrect++;
            $correctAnswersInfo[] = "Vraag 7: Juist";
        } else {
            $incorrectAnswersInfo[] = "Vraag 7: Fout (Juist antwoord: " . $correct_answers[6] . ")";
        }

        if ($answer8 == $correct_answers[7]) {
            $totalCorrect++;
            $correctAnswersInfo[] = "Vraag 8: Juist";
        } else {
            $incorrectAnswersInfo[] = "Vraag 8: Fout (Juist antwoord: " . $correct_answers[7] . ")";
        }

        if ($answer9 == $correct_answers[8]) {
            $totalCorrect++;
            $correctAnswersInfo[] = "Vraag 9: Juist";
        } else {
            $incorrectAnswersInfo[] = "Vraag 9: Fout (Juist antwoord: " . $correct_answers[8] . ")";
        }

        if ($answer10 == $correct_answers[9]) {
            $totalCorrect++;
            $correctAnswersInfo[] = "Vraag 10: Juist";
        } else {
            $incorrectAnswersInfo[] = "Vraag 10: Fout (Juist antwoord: " . $correct_answers[9] . ")";
        }

        echo "<div id='results'>$totalCorrect / 10 correct</div>";

        echo "<div id='correct-answers'>Juiste antwoorden:";
        foreach ($correctAnswersInfo as $info) {
            echo "<p>$info</p>";
        }
        echo "</div>";

        echo "<div id='incorrect-answers'>Foute antwoorden:";
        foreach ($incorrectAnswersInfo as $info) {
            echo "<p>$info</p>";
        }
        echo "</div>";
        ?>

    </div>

</body>
</html>

