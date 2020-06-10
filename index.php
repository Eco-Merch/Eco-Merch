<?php
ob_start();
include('header.php');
?>
<!-- ---------------------small-nav---------------------------------------------------->
        <div class="nav-container">
            <div class="small-nav-bar">
                <nav>
                    <div class="dropdown">
                        <button class="dropbtn">Reusable Products</button>
                        <div class="dropdown-content">
                            <a href="grocery_bag.php">Grocery Bags</a>
                            <a href="#">Lunch Box</a>
                            <a href="#">Water Bottles</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Plastic Free Products</button>
                        <div class="dropdown-content">
                            <a href="#">Jute Products</a>
                            <a href="#">Jute Products</a>
                            <a href="#">Jute Products</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Recycled Products</button>
                        <div class="dropdown-content">
                            <a href="#">Jute Products</a>
                            <a href="#">Jute Products</a>
                            <a href="#">Jute Products</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>


<!-- ------------------------image-slider--------------------------------- -->

    <div class="image">
        <div class="slideshow-container">
            <div class="myslides fade">
                <img src="images/image-1.jpeg" />
            </div>
            <div class="myslides fade">
                <img src="images/image-2.jpeg" />
            </div>
            <!--<div class="myslides fade">
                <img src="images/category-1.png"/>
            </div>-->

        </div>
        <br />
    </div>

    <?php
        // -----------------------Features-Categories---------------------------
        include('Template/_featured-categories.php');

        // -----------------------Features-Products-----------------------------
        include('scripts.php'); //Alert box
        include('Template/_featured-products.php');
    ?>

    <!-----------------------------HOME BOTTOM--------------------------------->

    <div class="home-bottom">
        <p>
            <i>
                The world's annual consumption of plastic materials has increased from around 5 million tons in the 1950s to nearly 100 million tones today.<br />
                EnviGreen's mission is to replace plastic used in day to day use with a sustainable eco-friendly alternative.
            </i>
        </p>
        <div class="container-2">
            <div class="row">
                <div class="wrap">
                    <div style="display:inline-block;">
                        <img src="images/quote.png" />
                    </div>
                    <div style="display:inline-block;">
                        <h2>100% Plastic free </h2>
                        <p>All our products and packaging are absolutely plastic-free!</p>
                    </div>
                </div>
                <div class="wrap">
                    <div style="display:inline-block;">
                        <img src="images/quote.png" />
                    </div>
                    <div style="display:inline-block;">
                        <h2>Cruelty-free</h2>
                        <p>None of our products are tested on animals and harm no one.</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
    
    <!--------------------------------FOOTER----------------------------------------------->
    <?php 
        include('footer.php');
    ?>