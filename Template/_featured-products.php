<?php
    $product_data = $product->getProductData('featured_products');
    //request post method;
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //cal addToCart method
        $cart->addToCart($_SESSION['user_id'],$_POST['item_id'],'featured_products');
         
    }  
?>
<div class="small-container">
        <h1>Featured Products</h1>
        <div class="row">
            <?php foreach ($product_data as $item)  {?>
            <div class="col-4">
                <a href = '<?php printf('%s?item_id=%s','featured_product_details.php',$item['item_id']); ?>'; style="color:black;">
                <img src="<?php echo $item['item-img'] ?>" />
                <h4><?php echo $item['item-name'] ?></h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>₹<?php echo $item['item-price']?></p>
                </a>
                <form method="post">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 1;?>">
                    
                    <?php
                        if(in_array($item['item_id'],$cart->getCartId($product->getCartTableData('cart',$_SESSION['user_id'] ?? 0,'featured_products')) ?? [])){
                            echo '<a class="btn disable-btn">In cart</a>';
                        }else{
                            if(isset($_SESSION['user_id'])){
                                echo '<a class="btn" name="grocery_bag_submit" onclick="this.parentNode.submit();">Add to cart</a>';
                            }else{
                                echo '<a class="btn" name="grocery_bag_submit" href="account.php?login=false">Add to cart</a>';
                            }
                        }
                    ?>
                </form>
            </div>
            <?php } //closing foreach function?>
            
        </div>
    </div>