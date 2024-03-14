<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="login">
        <h1>Login</h1>
        <form action="../index.php" method="post">
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