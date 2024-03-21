<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<header>
    <nav class="main-menu">
        <img src="../logo/logo.svg" class="logo" height="90px" alt="">
        <ul>
                    <li><a class="home" href="../index.php" id="home">HOME</a></li>
                    <li><a class="information" href="../infopage/information.php">INFORMATION</a></li>
                    <li><a class="contact" href="../contact/contact.php">CONTACT</a></li>
                    <li><a class="behandelingen" href="../behandelingen/behandeling.php">BEHANDELINGEN</a></li>
                    <li><a class="FAQ" href="../FAQ/FAQ.php">FAQ</a></li>
                </ul>
                <ul class="login">
                <li class="login"><a class="form active" href="../form/form.php">Inloggen</a></li>

            </ul>
        </nav>
    </header>
    <div class="loginForm">
        <h1>Login</h1>
        <form action="authenticate.php" method="post">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Gebruikersnaam" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Wachtwoord" id="password" required>
            <a href="Register.php">Nog geen account? Registreer!</a>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>