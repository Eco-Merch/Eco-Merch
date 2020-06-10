<?php
    include("header.php");
?>
<div id="checkout-container">
    <div class="checkout-details">
        asdf
    </div>
    <div class="price-section">
        <div class="title">
            <p>Price Details</p>
        </div>
        <div class="price-detail">
            <div class="subtotal">
                <p>Price (<span><?php  echo $count ?? 0;?></span> items)</p>
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
