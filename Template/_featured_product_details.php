<?php
$item_id = $_GET['item_id'] ?? 1;
foreach($product->getProductData('featured_products') as $item):
    if($item['item_id'] == $item_id):

    //add item to cart
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //cal addToCart method
        $cart->addToCart($_SESSION['user_id'],$_POST['item_id'],'featured_products');
        echo '<script type="text/javascript">showAlert("cart","Item added to Cart");</script>';
    }
?>

<div class="product-container product-details">
        <div class="row">
            <div class="small-img-container">
                <div class="small-img-col">
                     <img src="<?php echo $item['small-img1']?>" class="small-img" onmouseover="showSmallImg1();">
               </div>
               <div class="small-img-col">
                   <img src="<?php echo $item['small-img2']?>" class="small-img" onmouseover="showSmallImg2();">
               </div>
               <div class="small-img-col">
                   <img src="<?php echo $item['small-img3']?>" class="small-img" onmouseover="showSmallImg3();">
               </div>
               <div class="small-img-col">
                   <img src="<?php echo $item['small-img4']?>" class="small-img" onmouseover="showSmallImg4();">
               </div>
           </div>
            <div class="col-2">
                <img src="<?php echo $item['item-img'] ?>" alt="BagPodz Reusable Shopping Bags" id="productImg">
            </div>
            <div class="col-2">
                <h3><?php echo $item['item-name'] ?></h3>
                <p class="price">₹<?php echo $item['item-price'] ?></p>
                <div class="qty-container">
                    <p>Quantity:</p>
                    <div class="qty-box">
                        <span class="qty-dec" onclick="dec()" data-id='<?php echo $item['item_id'] ?? '1'?>'>
                            <i class="fa fa-minus"></i>
                        </span>
                        <input type="number" id="qty" value="1">
                        <span class="qty-inc">
                            <i class="fa fa-plus" onclick="inc()" data-id='<?php echo $item['item_id'] ?? '1'?>'></i>
                        </span>
                    </div>
                </div>

                <div class="tags">
                    <div class="tag-3">
                        <img src="images/growth.png" style="width:40px;" />
                        <p style="text-align:center;">100%<br> Eco Friendly</p>                  
                    </div>                                        
                    <div class="tag-3">
                        <img src="images/no-handshake.png" style="width:40px;" />
                        <p style="text-align:center;">No Contact<br> Delivery</p>
                    </div>                                        
                    <div class="tag-3">
                        <img src="images/return-box.png" style="width:40px;" />
                        <p style="text-align:center;">Returns<br> Policy</p>
                    </div>
                </div>
              
                <!-- <p style="margin-top:20px;">
                    These heavy-duty bags are great to use as daily shopping bags for grocery, shoulder bag or reusable shopping bags.
                    Made from heavy duty rexin with precise heavyweight stitching, sturdy long handles enable you to carry these foldable bags for shopping easily in your hand or over your shoulder.
                    These bags are the best eco-friendly alternative to end non-biodegradable plastic and synthetics from our day to day activities. Reduce your carbon footprint and plastic usage with earthy fab reusable shopping bags.
                    Product with Purpose – At Earthy Fab, each product is handcrafted by a hardworking woman who is able to become self-reliant and support her family. We are supporting livelihood programs to women groups by providing them opportunities to work at their convenient places.
                    Size – 15X15 Inches (When Folded Width 4.5 Inches Length 7 Inches), Bag Colour – Light Green, Strap Colour - Light Green, Material – Polyester, Strap Type - Attached (Reinforced Stitching)
                </p> -->
                <!-- -----------------CART and BUY--------------- -->
                <div id="cart-buy-container">
                    <form method="POST">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? 1;?>">
                    <?php
                        if(in_array($item['item_id'],$cart->getCartId($product->getCartTableData('cart',$_SESSION['user_id'] ?? 0,'featured_products')) ?? [])){
                            echo '<button type="button" class="disable-btn cart-btn">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            In Cart
                        </button>';
                        }else{   
                            if(isset($_SESSION['user_id'])){
                                echo '<button class="cart-btn" name="add_cart_submit" type=submit>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                ADD TO CART
                                </button>';
                            }else{
                                echo '<a href="account.php?login=false"><button type="button" class="cart-btn">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                ADD TO CART
                                </button></a>';
                            }
                        }
                    ?>
                    <!-- <button class="cart-btn">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        ADD TO CART
                    </button> -->
                    <!-- <button class="buy-btn">
                        <i class="fa fa-bolt" aria-hidden="true"></i>
                        BUY NOW
                    </button> -->
                    </form>
                </div>
            </div>
        </div>
        <hr />
            <!-- ---------------------Product description------------ -->
       <div class="product-description">
            <div class="specs-table">
                <table>
                    <thead>
                        <th>Specification</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Material Name</td>
                            <td><?php echo $item['item-name']?></td>
                        </tr>
                        <tr>
                            <td>Weight Carrying Capacity</td>
                            <td><?php echo $item['wcc']?></td>
                        </tr>
                        <tr>
                            <td>Style</td>
                            <td><?php echo $item['style']?></td>
                        </tr>
                        <tr>
                            <td>Size</td>
                            <td><?php echo $item['size']?></td>
                        </tr>
                        <tr>
                            <td>Handle Size</td>
                            <td><?php echo $item['handle_size']?></td>
                        </tr>
                        <tr>
                            <td>Product Color</td>
                            <td><?php echo $item['color']?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="description">
                <p>Product description</p>
                <p>
                    <?php echo $item['description'] ?>
                </p>
            </div>
       </div>
    </div>
<?php
    endif;
    endforeach;
?>