<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madison styles</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/69046e919d.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1>Madison styles</h1>
    </header>



    <main>
        <section id="shop-grid">


            <article class="shop-item">
                <div class="left-side">
                    <img class="item-img"src="img/tshirt.jpg" alt="">
                </div>
                <div class="right-side">
                    <div class="vareinfo">
                        <h2 class="vare-navn">T-shirt</h2>
                        <h3 class="vare-pris">$15</h3>
                    </div>
                    <div class="add-to-cart-wrapper">
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>
            </article>



            <article class="shop-item">
                <div class="left-side">
                    <img class="item-img"src="img/chinoBukser.jpg" alt="">
                </div>
                <div class="right-side">
                    <div class="vareinfo">
                        <h2 class="vare-navn">Chino bukser</h2>
                        <h3 class="vare-pris">$25</h3>
                    </div>
                    <div class="add-to-cart-wrapper">
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>
            </article>




            <article class="shop-item">
                <div class="left-side">
                    <img class="item-img"src="img/jackAndJonesShorts.jpg" alt="">
                </div>
                <div class="right-side">
                    <div class="vareinfo">
                        <h2 class="vare-navn">Jack and Jones shorts</h2>
                        <h3 class="vare-pris">$27</h3>
                    </div>
                    <div class="add-to-cart-wrapper">
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>
            </article>



            <article class="shop-item">
                <div class="left-side">
                    <img class="item-img"src="img/NikeShorts.jpg" alt="">
                </div>
                <div class="right-side">
                    <div class="vareinfo">
                        <h2 class="vare-navn">Nike performance shorts</h2>
                        <h3 class="vare-pris">$23</h3>
                    </div>
                    <div class="add-to-cart-wrapper">
                        <button class="add-to-cart-btn">Add to cart</button>
                    </div>
                </div>
            </article>
            
        </section>






    </main>


    <?php 
        require 'components/footer.php'
    ?>


    <script src="js/js.js"></script>
</body>
</html>