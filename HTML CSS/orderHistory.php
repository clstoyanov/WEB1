<?php
require "Extras/header.php";
?>

    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

<body>
    <div class="ohistory-page">
        <div class="heading">
            <h2 class="ohistory-title">Order History</h2>
        </div>
        <div class="ohistory-main">
            <div class="ohistory-main-heading">
                <h1>Order Number</h1>
                <h1>Order Date</h1>
                <h1>Order Total</h1>
            </div>
            <div class="ohistory-ex2">
                <div class="ohistory-ex-head">
                    <h2>123456789</h2>
                    <h2>02/12/2018</h2>
                    <h2>€119.98</h2>
                    <button class="ohistory-show" type="button" onclick="show1()">Show Details</button>
                </div>
                <section id="games-ex2">
                    <article class="game-ex">
                        <img src="Game Covers/Battlefield_V.jpg" alt="Battlefield V" width="151" height="206">
                        <h3>Battlefield V</h3>
                        <h3>€59.99</h3>
                    </article>
                    <article class="game-ex">
                        <img src="Game Covers/Forza_Horizon_4.jpg" alt="Forza Horizon 4" width="151" height="192">
                        <h3>Forza Horizon 4</h3>
                        <h3>€59.99</h3>
                    </article>
                    <article class="ohistory-btnhide">
                        <button class="ohistory-hide" type="button" onclick="hide1()">Hide Details</button>
                    </article>
                </section>
            </div>
            <div class="ohistory-ex3">
                <div class="ohistory-ex-head">
                    <h2>987654321</h2>
                    <h2>25/01/2019</h2>
                    <h2>€14.99</h2>
                    <button class="ohistory-show" type="button" onclick="show2()">Show Details</button>
                </div>
                <section id="games-ex3">
                    <article class="game-ex-S">
                        <img src="Game Covers/The_Elder_Scrolls_V_Skyrim_cover.png" alt="Skyrim" width="151"
                            height="206.5">
                        <h3>The Elder Scrolls V: Skyrim</h3>
                        <h3>€14.99</h3>
                    </article>
                    <article class="ohistory-btnhide">
                        <button class="ohistory-hide" type="button" onclick="hide2()">Hide Details</button>
                    </article>
                </section>
            </div>

        </div>
    </div>
</body>

<?php
require "Extras/footer.php";
?>