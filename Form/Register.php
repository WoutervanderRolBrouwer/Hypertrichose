<?php

?>
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
                    <li><a class="behandelingen" href="../behandelingen/behandelingen.php">BEHANDELINGEN</a></li>
                    <li><a class="FAQ " href="../FAQ/FAQ.php">FAQ</a></li>
                </ul>
                <ul class="login">
                <li class="login"><a class="form active" href="../form/form.php">Inloggen</a></li>

            </ul>
        </nav>
    </header>
    <div class="loginForm">
        <h1>Login</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Handle registration form submission
            $username = $_POST["username"];
            $email = $_POST["email"];
            $passwordHash = $_POST["password"]  ;
        
            // Perform database insertion (ensure you have a database connection)
        
            // Sample connection code using PDO
            $dsn = "mysql:host=localhost;dbname=hypertrichose";
            $DBusername = "Wvdrb";
            $DBpassword = '5t$xBA4inc_S?pf';
            $emailDupe = false;
            $userDupe = false;
            
            try {
                $pdo = new PDO($dsn, $DBusername, $DBpassword);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $passwordHash);
        
                $stmt->execute();
        
                echo "<div class='succes'> <p class='succesmessage'> Registration successful!</p> </div>";
            } catch (PDOException $exception ) {
                // echo $exception->getMessage() . "<br>";
                
                echo "<div class='errorcontainer'> <p class='errorcode'> Er is een fout opgetreden bij het registeren. Probeer opnieuw!</p> </div>";
            }
        }
        
    
        ?>
        <form action="register.php" method="post">
            <label for="email">
                <i class="fas fa-envelope"></i>
            </label>
            <input type="email" name="email" placeholder="E-mail" id="email" required>

            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Gebruikersnaam" id="username" required>
            
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Wachtwoord" id="password" required>
            
            <a href="form.php">Al een account? Log in</a>
            <input type="submit" value="Aanmelden">
        </form>
    </div>
</body>

</html>