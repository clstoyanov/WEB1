<?php
require "Extras/header.php";
?>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="main">
        <div class="row">
            <div class="new-releases">
                <h1>New Releases</h1>
                <div class="flex-nr">
                    <div class="flex-nr-pic">
                        <img src="Game Covers/NR/resident evil 2.png" alt="Resident Evil 2 Pic" width="151" height="165">
                    </div>
                    <div class="flex-nr-info">
                        <h2>Resident Evil 2</h2>
                        <div class="price-buy">
                            <div class="price">
                                <h3>$59.99</h3>
                            </div>
                            <button class="buybtn" type="button">BUY</button>
                        </div>
                        <div id="re2-info">
                            <button id="game-more-info" type="button" onclick="loadRE2Doc()">More Info</button>
                        </div>
                    </div>
                </div>
                <div class="flex-nr">
                    <div class="flex-nr-pic">
                        <img src="Game Covers/NR/Red_Dead_Redemption_II.jpg" alt="Red Dead Redemption II" width="151" height="186">
                    </div>
                    <div class="flex-nr-info">
                        <h2>Red Dead Redemption II</h2>
                        <div class="price-buy">
                            <div class="price">
                                <h3>$59.99</h3>
                            </div>
                            <button class="buybtn" type="button">BUY</button>
                        </div>
                        <div id="rdr2-info">
                            <button id="game-more-info" type="button" onclick="loadRDR2Doc()">More Info</button>
                        </div>
                    </div>
                </div>
                <div class="flex-nr">
                    <div class="flex-nr-pic">
                        <img src="Game Covers/NR/Battlefield_V.jpg" alt="Battlefield V" width="151" height="206">
                    </div>
                    <div class="flex-nr-info">
                        <h2>Battlefield V</h2>
                        <div class="price-buy">
                            <div class="price">
                                <h3>$59.99</h3>
                            </div>
                            <button class="buybtn" type="button">BUY</button>
                        </div>
                        <div id="bf5-info">
                            <button id="game-more-info" type="button" onclick="loadBF5Doc()">More Info</button>
                        </div>
                    </div>
                </div>
                <div class="flex-nr">
                    <div class="flex-nr-pic">
                        <img src="Game Covers/NR/Forza_Horizon_4.jpg" alt="Forza Horizon 4" width="151" height="192">
                    </div>
                    <div class="flex-nr-info">
                        <h2>Forza Horizon 4</h2>
                        <div class="price-buy">
                            <div class="price">
                                <h3>$59.99</h3>
                            </div>
                            <button class="buybtn" type="button">BUY</button>
                        </div>
                        <div id="fh4-info">
                            <button id="game-more-info" type="button" onclick="loadFH4Doc()">More Info</button>
                        </div>
                    </div>
                </div>
                <div class="flex-nr">
                    <div class="flex-nr-pic">
                        <img src="Game Covers/NR/Fallout_76_cover.jpg" alt="Fallout 76" width="151" height="185">
                    </div>
                    <div class="flex-nr-info">
                        <h2>Fallout 76</h2>
                        <div class="price-buy">
                            <div class="price">
                                <h3>$59.99</h3>
                            </div>
                            <button class="buybtn" type="button">BUY</button>
                        </div>
                        <div id="f76-info">
                            <button id="game-more-info" type="button" onclick="loadF76Doc()">More Info</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="upcoming-games">
                <h1>Upcoming Games</h1>
                <div class="flex-ug">
                    <div class="flex-ug-pic">
                        <img src="Game Covers/UG/division 2.jpg" alt="Division 2" width="151" height="171">
                    </div>
                    <div class="flex-game-info">
                        <h2>Tom Clancy's The Division 2</h2>
                        <h5>March 15th 2019</h5>
                        <div class="price-buy">
                            <div class="price">
                                <h3>$59.99</h3>
                            </div>
                            <button class="preorderbtn" type="button">PREORDER</button>
                        </div>
                        <div id="d2-info">
                            <button id="game-more-info" type="button" onclick="loadD2Doc()">More Info</button>
                        </div>
                    </div>
                </div>
                <div class="flex-ug">
                    <div class="flex-ug-pic">
                        <img src="Game Covers/UG/Mortal_Kombat_11.png" alt="Mortal Kombat 11" width="151" height="181">
                    </div>
                    <div class="flex-game-info">
                        <h2>Mortal Kombat 11</h2>
                        <h5>April 23rd 2019</h5>
                        <div class="price-buy">
                            <div class="price">
                                <h3>$59.99</h3>
                            </div>
                            <button class="preorderbtn" type="button">PREORDER</button>
                        </div>
                        <div id="mk11-info">
                            <button id="game-more-info" type="button" onclick="loadMK11Doc()">More Info</button>
                        </div>
                    </div>
                </div>
                <div class="flex-ug">
                    <div class="flex-ug-pic">
                        <img src="Game Covers/UG/anthem.jpg" alt="Anthem" width="151" height="226.5">
                    </div>
                    <div class="flex-game-info">
                        <h2>Anthem</h2>
                        <h5>February 22nd 2019</h5>
                        <div class="price-buy">
                            <div class="price">
                                <h3>$59.99</h3>
                            </div>
                            <button class="preorderbtn" type="button">PREORDER</button>
                        </div>
                        <div id="anth-info">
                            <button id="game-more-info" type="button" onclick="loadANTHDoc()">More Info</button>
                        </div>
                    </div>
                </div>
                <div class="flex-ug">
                    <div class="flex-ug-pic">
                        <img src="Game Covers/UG/FC_New_Dawn_cover_art.jpg" alt="Far Cry New Dawn" width="151" height="165.5">
                    </div>
                    <div class="flex-game-info">
                        <h2>Far Cry New Dawn</h2>
                        <h5>February 15th 2019</h5>
                        <div class="price-buy">
                            <div class="price">
                                <h3>$59.99</h3>
                            </div>
                            <button class="preorderbtn" type="button">PREORDER</button>
                        </div>
                        <div id="fcnd-info">
                            <button id="game-more-info" type="button" onclick="loadFCNDDoc()">More Info</button>
                        </div>
                    </div>
                </div>
                <div class="flex-ug">
                    <div class="flex-ug-pic">
                        <img src="Game Covers/UG/Days_Gone.jpg" alt="Days Gone" width="151" height="165.5">
                    </div>
                    <div class="flex-game-info">
                        <h2>Days Gone</h2>
                        <h5>April 26th 2019</h5>
                        <div class="price-buy">
                            <div class="price">
                                <h3>$59.99</h3>
                            </div>
                            <button class="preorderbtn" type="button">PREORDER</button>
                        </div>
                        <div id="dg-info">
                            <button id="game-more-info" type="button" onclick="loadDGDoc()">More Info</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="best-sellers">
                <h1>Best Sellers</h1>
                <div class="flex-bs">
                    <div class="flex-spade">
                        <img src="bs_spades/bs_1.jpg" alt="bs 1">
                    </div>
                    <div class="flex-bs-pic">
                        <img src="Game Covers/BS/The_Elder_Scrolls_V_Skyrim_cover.png" alt="Skyrim" width="151" height="206.5">
                    </div>
                    <div class="flex-game-info">
                        <h2>The Elder Scrolls V: Skyrim</h2>
                        <div class="price-buy">
                            <div class="price">
                                <h3>$14.99</h3>
                            </div>
                            <button class="buybtn" type="button">BUY</button>
                        </div>
                        <div id="skyrim-info">
                            <button id="game-more-info" type="button" onclick="loadSKYRIMDoc()">More Info</button>
                        </div>
                    </div>
                </div>
                <div class="flex-bs">
                    <div class="flex-spade">
                        <img src="bs_spades/bs_2.jpg" alt="bs 2">
                    </div>
                    <div class="flex-bs-pic">
                        <img src="Game Covers/BS/Grand_Theft_Auto_V.png" alt="GTA V" width="151" height="185.5">
                    </div>
                    <div class="flex-game-info">
                        <h2>Grand Theft Auto V</h2>
                        <div class="price-buy">
                            <div class="price">
                                <h3>$29.99</h3>
                            </div>
                            <button class="buybtn" type="button">BUY</button>
                        </div>
                        <div id="gta5-info">
                            <button id="game-more-info" type="button" onclick="loadGTA5Doc()">More Info</button>
                        </div>
                    </div>
                </div>
                <div class="flex-bs">
                    <div class="flex-spade">
                        <img src="bs_spades/bs_3.jpg" alt="bs 1">
                    </div>
                    <div class="flex-bs-pic">
                        <img src="Game Covers/BS/Witcher_3_cover.jpg" alt="Witcher 3" width="151" height="214">
                    </div>
                    <div class="flex-game-info">
                        <h2>The Witcher 3: Wild Hunt</h2>
                        <div class="price-buy">
                            <div class="price">
                                <h3>$29.99</h3>
                            </div>
                            <button class="buybtn" type="button">BUY</button>
                        </div>
                        <div id="w3-info">
                            <button id="game-more-info" type="button" onclick="loadW3Doc()">More Info</button>
                        </div>
                    </div>
                </div>
                <div class="flex-bs">
                    <div class="flex-spade">
                        <img src="bs_spades/bs_4.jpg" alt="bs 1">
                    </div>
                    <div class="flex-bs-pic">
                        <img src="Game Covers/BS/Just_Cause_4_cover.jpg" alt="Just Cause 4" width="151" height="191">
                    </div>
                    <div class="flex-game-info">
                        <h2>Just Cause 4</h2>
                        <div class="price-buy">
                            <div class="price">
                                <h3>$59.99</h3>
                            </div>
                            <button class="buybtn" type="button">BUY</button>
                        </div>
                        <div id="jc4-info">
                            <button id="game-more-info" type="button" onclick="loadJC4Doc()">More Info</button>
                        </div>
                    </div>
                </div>
                <div class="flex-bs">
                    <div class="flex-spade">
                        <img src="bs_spades/bs_5.jpg" alt="bs 1">
                    </div>
                    <div class="flex-bs-pic">
                        <img src="Game Covers/BS/NBA_2K19_cover_art.jpg" alt="NBA 2K19" width="151" height="183">
                    </div>
                    <div class="flex-game-info">
                        <h2>NBA 2K19</h2>
                        <div class="price-buy">
                            <div class="price">
                                <h3>$49.99</h3>
                            </div>
                            <button class="buybtn" type="button">BUY</button>
                        </div>
                        <div id="nba-info">
                            <button id="game-more-info" type="button" onclick="loadNBADoc()">More Info</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--login successful message-->
    <?php
    if (isset($_GET['login'])) {
        if ($_GET['login'] == "success") {
            echo '<script>alert("Successfully logged in!");</script>';
        }
    }
    ?>
</body>

<?php
require "Extras/footer.php";
?> 