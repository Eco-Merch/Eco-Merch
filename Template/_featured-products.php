<?php
    $product_data = $product->getProductData('featured_products');
    //request post method;
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //cal addToCart method
        $cart->addToCart($_POST['user_id'],$_POST['item_id'],'featured_products');
        echo '<script type="text/javascript">showAlert("cart","Item added to Cart");</script>';
         
    }  
?>
<div class="small-container">
        <h1>Featured Products</h1>
        <div class="row">
            <?php foreach ($product_data as $item)  {?>
            <div class="col-4">
                <img src="<?php echo $item['item-img'] ?>" />
                <h4><?php $item['item-name'] ?></h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>₹<?php echo $item['item-price']?></p>
                <form method="post">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 1;?>">
                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                    <?php
                        if(in_array($item['item_id'],$cart->getCartId($product->getCartTableData('cart','featured_products')) ?? [])){
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