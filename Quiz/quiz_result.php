<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Resultaat</title>
    <link rel="stylesheet" href="../Quiz/css/result.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/main.css">

    <header>
  <nav class="main-menu">
      <img src="../logo/logo.svg" height="90px" alt="">
      <ul>
              <li><a class="home" href="../index.php" id="home">HOME</a></li>
              <li><a class="information" href="../InfoPage/information.php">INFORMATION</a></li>
              <li><a class="form" href="../Form/form.php">FORM</a></li>
              <li><a class="contact" href="../contact/contact.php">CONTACT</a></li>
              <li><a class="behandelingen" href="../behandelingen/behandeling.php">BEHANDELINGEN</a></li>
              <li><a class="FAQ" href="../FAQ/FAQ.php">FAQ</a></li>
              
      </ul>
</nav>
</header>
</head>
<body>
<div class="quiz">
    <h1>Quiz Resultaat</h1>

    <?php
    function getDbConnection() {
        $host = 'localhost';
        $dbname = 'hypertrichose'; /**Pas deze naam niet aan */
        $DBusername = 'stmakpabot'; /**Pas deze naam niet aan */
        $DBpassword = 'zX[LqFHU@rx9rQJT';
        return new PDO("mysql:host=$host;dbname=$dbname", $DBusername, $DBpassword);
    }

    function handleQuizResult($pdo, $username, $userAnswers, $correctAnswers) {
        $totalCorrect = 0;
        $correctAnswersInfo = [];
        $incorrectAnswersInfo = [];
        $correctAnswersExplanations = [
            "Hypertrichose is de medische term voor overmatige haargroei op plaatsen waar normaal haar groeit.",
            "Een virusinfectie kan leiden tot hypertrichose door het verstoren van de normale werking van de haarfollikels.",
            "De rug is een van de meest voorkomende plaatsen voor hypertrichose.",
            "Melatonine is een hormoon dat de haargroei kan beïnvloeden.",
            "Hormoontherapie kan worden gebruikt om hypertrichose te behandelen door het beïnvloeden van de hormonen die de haargroei reguleren.",
            "Hoge bloeddruk is een mogelijke bijwerking van sommige behandelingen voor hypertrichose.",
            "Ongeveer 10% van de mensen met hypertrichose heeft een familiegeschiedenis van de aandoening.",
            "Hypertrichosis lanuginosa is een zeldzame vorm van hypertrichose die wordt gekenmerkt door de groei van lang, dun, lichtgekleurd haar.",
            "De term 'wolf' wordt soms gebruikt om mensen met hypertrichose te beschrijven vanwege de overmatige haargroei die de aandoening veroorzaakt.",
            "De congenitale vorm van hypertrichose is aanwezig bij de geboorte."
        ];

        foreach ($correctAnswers as $index => $correctAnswer) {
            $questionNumber = $index + 1;
            $userAnswer = $userAnswers[$index] ?? '';

            if ($userAnswer == $correctAnswer) {
                $totalCorrect++;
                $correctAnswersInfo[] = ["Vraag $questionNumber", "Juist"];
            } else {
                $incorrectAnswersInfo[] = ["Vraag $questionNumber", "Fout", $correctAnswer, $correctAnswersExplanations[$index]];
            }
        }


        $sql = "INSERT INTO quiz_results (username, quiz_date, correct_answers, incorrect_answers) VALUES (?, NOW(), ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username, $totalCorrect, count($correctAnswers) - $totalCorrect]);

        return [$totalCorrect, $correctAnswersInfo, $incorrectAnswersInfo];
    }

    $pdo = getDbConnection();
    $username = $_SESSION['username'] ?? '';

    $correctAnswers = ["Hypertrichose", "Virusinfectie", "Rug", "Melatonine", "Hormoontherapie", "Hoge bloeddruk", "Ongeveer 10%", "Hypertrichosis lanuginosa", "Wolf", "Congenitale vorm"];
    $userAnswers = [
        $_POST['question1'] ?? '',
        $_POST['question2'] ?? '',
        $_POST['question3'] ?? '',
        $_POST['question4'] ?? '',
        $_POST['question5'] ?? '',
        $_POST['question6'] ?? '',
        $_POST['question7'] ?? '',
        $_POST['question8'] ?? '',
        $_POST['question9'] ?? '',
        $_POST['question10'] ?? ''
    ];

    list($totalCorrect, $correctAnswersInfo, $incorrectAnswersInfo) = handleQuizResult($pdo, $username, $userAnswers, $correctAnswers);

    echo "<div id='results'>$totalCorrect / 10 correct</div>";

    echo "<h2>Juiste antwoorden</h2>";
    echo "<table border='0'>
    <tr>
    <th>Vraag</th>
    <th>Status</th>
        </tr>";
    foreach ($correctAnswersInfo as $info) {
        echo "<tr>";
        foreach ($info as $item) {
            echo "<td>$item</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<h2>Foute antwoorden</h2>";
    echo "<table>";
    echo "<tr><th>Vraag</th><th>Status</th><th>Correct antwoord</th><th>Uitleg</th></tr>";
    foreach ($incorrectAnswersInfo as $info) {
        echo "<tr>";
        foreach ($info as $item) {
            echo "<td>$item</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</div>

</body>
</html>













        