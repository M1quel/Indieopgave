<?php 
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login page</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/user.css">
        <link rel="stylesheet" href="css/login.css">
        <script src="https://kit.fontawesome.com/69046e919d.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            if (isset($_SESSION['userId'])) {
                $userID = $_SESSION['userUid'];
                echo '<section class="profile-head">
                <div class="profile-img-wrapper"></div>';
                echo "<h1>Hej, ".$userID."</h1>";
                echo '</section>
                    <section class="menu-grid">
                    <article class="menu-item">Favoritter</article>
                    <article class="menu-item">tidligere køb</article>
                    </section>
                    <form class="logout-section"action="php/logout-inc.php" method="POST">
                    <button type="submit" name="logout-submit">Log ud</button>
                    </form>';
                ;
            }
            else {
                echo '<header><h1>Madison styles</h1></header>
                <main>
                <h1>Login</h1>
                <form class="login-form"action="php/login-inc.php" method="POST">
                <input type="text" name="mailuid" placeholder="username/email...">
                <input type="password" name="pwd" placeholder="password...">
                <button type="submit" name="login-submit">Login</button>
                </form>
                <p>Har du ikke en konto?</p>
                <a href="signup.php">Opret en</a>
                </main>';
            }
        ?>

        <?php 
            require 'components/footer.php'
        ?>
    </body>
</html>