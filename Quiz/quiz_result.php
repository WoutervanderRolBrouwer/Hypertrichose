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

<div class="result">
    
        <h1>Quiz Resultaat</h1>

        <?php
function getDbConnection() {
    $host = 'localhost';
    $dbname = 'hypertrichose';
    $DBusername = 'stmakpabot';
    $DBpassword = 'zX[LqFHU@rx9rQJT';
    return new PDO("mysql:host=$host;dbname=$dbname", $DBusername, $DBpassword);
}

function handleQuizResult($pdo, $username, $userAnswers, $correctAnswers) {
    $totalCorrect = 0;
    $correctAnswersInfo = [];
    $incorrectAnswersInfo = [];

    foreach ($correctAnswers as $index => $correctAnswer) {
        $questionNumber = $index + 1;
        $userAnswer = $userAnswers[$index] ?? '';

        if ($userAnswer == $correctAnswer) {
            $totalCorrect++;
            $correctAnswersInfo[] = "Vraag $questionNumber: Juist";
        } else {
            $incorrectAnswersInfo[] = "Vraag $questionNumber: Fout (Juist antwoord: $correctAnswer)";
        }
    }

    $sql = "INSERT INTO quiz_results (username, quiz_date, correct_answers, incorrect_answers) VALUES (?, NOW(), ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username, $totalCorrect, count($correctAnswers) - $totalCorrect]);

    return [$totalCorrect, $correctAnswersInfo, $incorrectAnswersInfo];
}

$pdo = getDbConnection();
$username = $_SESSION['username'] ?? '';

$correctAnswers = ["A", "B", "A", "D", "B", "A", "C", "A", "D", "A"];
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





