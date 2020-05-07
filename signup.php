<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up page</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/signup.css">
    <script src="https://kit.fontawesome.com/69046e919d.js" crossorigin="anonymous"></script>
</head>
<header>
    <h1>Madison styles</h1>
</header>
<body>
    <main>
        <h1>Signup</h1>
        <form class="signup-form"action="php/signup-inc.php" method="POST">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat Password">
            <button type="submit" name="signup-submit">Signup</button>
        </form>
    </main>
    <?php
        require 'components/footer.php'
    ?>
</body>
</html>