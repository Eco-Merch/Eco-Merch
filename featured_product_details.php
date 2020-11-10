<!DOCTYPE html>
<?php
    session_start();
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
    
   <?php
        //-----------------------Product Details------------------------------------------
        include('Template/_featured_product_details.php');

        //----------------------Grocery Products | Related Products------------------------
        include('Template/_related-products.php');
   ?>


<!--------------------------------FOOTER----------------------------------------------->

<?php
    include('footer.php');
?>

