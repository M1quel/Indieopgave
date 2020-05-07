<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart page</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/global.css">
    <link id="style" rel="stylesheet" href="css/cart.css">
    <script src="https://kit.fontawesome.com/69046e919d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1>Madison styles</h1>
    </header>

    <div class="item-container">
        
    </div>

    <div class="cart-footer">
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">$0</span>
        </div>
        <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
    </div>

    <script src="js/cart.js"></script>
    <?php
        require 'components/footer.php';
    ?>
</body>
</html>