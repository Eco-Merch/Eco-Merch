<?php
    $product_data = $product->getProductData('grocery_bags');
    //request post method;
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //cal addToCart method
        $cart->addToCart($_POST['user_id'],$_POST['item_id'],'grocery_bags');
        echo '<script type="text/javascript">showAlert("cart","Item added to Cart");</script>';
    }  
?>

<div class="product-container">
        <h2 id='a'>Grocery Bags</h2>
        <div class="row product-list">
            <?php foreach ($product_data as $item)  {?>
                <div class="product">
                    <a href="<?php printf('%s?item_id=%s','BagPodz-Reusable-Shopping-Bags.php',$item['item_id']) ?>" style="color:black;">
                        <img src="<?php echo $item['item-img']?>" alt="">
                        <div class="text-area">
                            <h4>BagPodz Reusable Shopping Bags</h4>
                            <p>₹40 Per Piece</p>
                            <p>Min. Order 20</p>
                            </div></a>
                            <form name='grocery_bag_submit' method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 1;?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                    if(in_array($item['item_id'],$cart->getCartId($product->getTableData('cart','grocery_bags')) ?? [])){
                                        echo '<a class="btn disable-btn">In cart</a>';
                                    }else{
                                        echo '<a class="btn" name="grocery_bag_submit" onclick="this.parentNode.submit();">Add to cart</a>';
                                    }
                                ?>
                            </form>
                </div>
            <?php } //closing foreach function?>
        </div>
    </div>