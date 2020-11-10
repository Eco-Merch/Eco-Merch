    <?php
    session_start();
    include("header.php");
    require('scripts.php');

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['place_order_submit'])){
            $sum=$_POST['sum'];
        }
        if(isset($_POST['confirm_submit'])){
            if($_POST['name']!=null && $_POST['mobile']!=null && $_POST['address']!=null && $_POST['pincode']!=null && $_POST['city']!=null){
                $user_id=$_SESSION['user_id'];    
                $cart->placeOrder($user_id,$_POST['name'],$_POST['sum'],$_POST['mobile'],$_POST['address'],$_POST['pincode'],$_POST['city']);
            }else{
                echo '<script>showAlert("Order","Fill all details","warning");</script>';
            }
        }
    }
?>
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


<div id="checkout-container">
    <div class="checkout-details">
        <div id="address-container">
            <div id="addr-title">
                DELIVERY ADDRESS
            </div>
            <div>
                <form method="post">
                    <div>
                    <input type="text" name="name" placeholder="Enter your name">
                    <input type="number" name="mobile" placeholder="Mobile number">
                    </div>
                    <div id="addr">
                    <textarea rows="4" cols="40" name="address" placeholder="Address Area/Society"></textarea>
                    <!--<input type="text" name="address" placeholder="Address (Area/Society)">-->
                    </div>
                    <div>
                    <input type="number" name="pincode" placeholder="Pincode">
                    <input type="text" name="city" placeholder="City">
                    </div>
                    <input type="hidden" name="sum" value="<?php echo $sum ?>"/>
                    <button type="submit" name="confirm_submit" class="place-order place-order-btn">CONFIRM ORDER </button>
                </form>
             </div>
         </div> 
    </div>
    <div class="price-section">
        <div class="title">
            <p>Price Details</p>
        </div>
        <div class="price-detail">
            <div class="subtotal">
                <p>Price (<span><?php echo count($product->getCartTableDataUser('cart',$_SESSION['user_id'] ?? 0)); ?></span> items)</p>
                <span><i class="fas fa-rupee-sign"></i><?php echo $sum ?? 0; ?></span>
            </div>
            <div class="dlvry-charges">
                <p>Delivery Charges</p>
                <p>Free</p>
            </div>
            <div class="total-amount">
                <p>Total Amount</p>
                <span><i class="fas fa-rupee-sign"></i><?php echo $sum ?? 0; ?></span>
            </div>
        </div>
    </div>
</div>
<?php
    include("footer.php");
?>
