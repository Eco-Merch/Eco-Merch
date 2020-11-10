<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // echo $_POST['remove_item_submit'];
        if(isset($_POST['remove_item_submit'])){
            $deleted_item = $cart->removeCartItem($_SESSION['user_id'],$_POST['item_id'],$_POST['item_category']);
        }
        
    }
    $count = count($product->getCartTableDataUser('cart',$_SESSION['user_id'] ?? 0));

?>

<div class="cart-container">
        <div class="itemAorder_section">
            <div class="items-section">
                <!-- ----------------------------CART ITEM--------------------------- -->
                
                <div class="count-cart-items">
                    <p>My Cart <span>(<?php  echo $count;?>)</span></p>
                </div>
                
                <table id="cart-items">
                    <colgroup>
                    <col span="1" style="width: 45%;">
                    <col span="1" style="width: 25%;">
                    <col span="1" style="width: 30%;">
                    </colgroup>

                    <?php if($count >=1){ ?>
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Pirce</th>
                        </tr>
                    </thead>
                    
                    <?php }else{ ?>
                    <h1 align="center" style="margin-top:40px;">Cart is Empty</h1>
                    <img src="./images/empty_cart.svg" style="height:50%;display:block;margin:40px auto; ">
                     <?php } ?>


                    <?php
                    //get item_id and item_category from cart table
                    $sum = 0;
                    // $count = 0; // to avoid printing Item Quantity and Price multiple times
                      
                    foreach($product->getCartTableDataUser('cart',$_SESSION['user_id'] ?? 0) as $item):
                        //get details of product
                        // $count++;
                        $cart = $product->getCartProduct($item['item_id'],$item['item_category']);
                        $item_category = $item['item_category'];
                        
                        $subTotal = array_map(function($item) {
                    ?> 
                    <tbody>
                        <tr class="items-row">
                            <td>
                                <div class="item-col">
                                <p><?php echo $item['item-name'] ?? "unkown"?></p>
                                    <div class="img-specs">
                                        <div class="item-img"><img src="<?php echo $item['item-img'] ?? images/reusable/grocery_bag/gb1.jpg ?>" alt=""></div>
                                        <div class="item-specs">
                                            <p>Material: Bag<span></span></p>
                                            <p>Color: Blue<span></span></p>
                                            <p>Size: 12W x 17H x 4G<span></span></p>
                                            <p>Capacity: 40-50 kg<span></span></p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="qty-col">
                                    <div class="qty-container">
                                        <div class="qty-box">
                                            <span class="qty-dec" id="ak" data-id ="a" onclick="dec();">
                                                <i class="fa fa-minus" ></i>
                                            </span>
                                            <input type="number" id ="ak" data-id ="a" name="qty" value='1'>

                                            <span class="qty-inc" data-id ="a"  onclick="inc()">
                                                <i class="fa fa-plus"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <form method="post">
                                        <div class="remove-item" onclick="this.parentNode.submit();">
                                            <input type="hidden" name="remove_item_submit" />
                                            <input type="hidden" name="item_id" value="<?php echo $item["item_id"];?>"/>
                                            <input type="hidden" name="item_category" value="<?php echo  $GLOBALS['item_category'];?>"/>
                                            <i class="fa fa-trash-o" aria-hidden="true"></i >
                                            <span>REMOVE</span>
                                        </div>
                                    </form>
                                </div>
                            </td>
                            <td>
                                <div class="price-col">
                                    <div style="margin: -2px 0 0;">
                                        <!-- <span class="item-price"><i class="fas fa-rupee-sign"></i>515</span> -->
                                        <div class="gstPrice-det">
                                            <div class="row-4" style="justify-content:center;">
                                                <span class="price-txt">Price per piece</span>
                                                <span class="price-val"><i class="fas fa-rupee-sign"></i><?php echo $item['item-price'] ?? 0 ?></span>
                                            </div>
                                            <!-- <div class="row-4">
                                                <span class="price-txt">Price</span>
                                                <span class="price-val"><i class="fas fa-rupee-sign"></i>500</span>
                                            </div>
                                            <div class="row-4">
                                                <span class="price-txt">GST@3%</span>
                                                <span class="price-val"><i class="fas fa-rupee-sign"></i>15</span>
                                            </div>
                                            <div class="row-4">
                                                <span class="price-txt">Final Price</span>
                                                <span class="price-val"><i class="fas fa-rupee-sign"></i>515</span>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- <span>Price per piece</span>
                                    <span><i class="fas fa-rupee-sign"></i>100</span>
                                    <br>
                                    <span>Price</span>
                                    <span><i class="fas fa-rupee-sign"></i>500</span> -->
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                        return $item['item-price'];
                    // print_r($item["item-price"]);
                    // $a = $item["item-price"];
                    },$cart); //array map function
                    // $a += $item['item-price'];
                    // print_r($subTotal);
                    $sum += $subTotal[0];
                    endforeach;
                ?>
                </table>
            
            </div>
            <div id="place-order">
                <form method="post" action="./checkout.php">
                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>"/>
                    <input type="hidden" name="sum" value="<?php echo $sum ?>"/>
                    <button name="place_order_submit" class="place-order-btn">
                        PLACE ORDER
                    </button>
                </form>
            </div>
        </div>  
            
        <!-- ----------------------------CART ITEM--------------------------- -->

        <!-- ---------------------------------Price Details------------------------ -->
        <div class="price-section">
            <div class="title">
                <p>Price Details</p>
            </div>
            <div class="price-detail">
                <div class="subtotal">
                    <p>Price (<span><?php  echo $count;?></span> items)</p>
                    <span><i class="fas fa-rupee-sign"></i><?php echo $sum; ?></span>
                </div>
                <div class="dlvry-charges">
                    <p>Delivery Charges</p>
                    <p>Free</p>
                </div>
                <div class="total-amount">
                    <p>Total Amount</p>
                    <span><i class="fas fa-rupee-sign"></i><?php echo $sum; ?></span>
                </div>
            </div>
        </div>
    </div>