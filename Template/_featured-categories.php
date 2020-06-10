    <?php
        $product_data = $product->getProductData('featured_categories');
    ?>
    <div class="small-container">
        <div class="categories">
            <h1>Featured Categories</h1>
            <div class="row">
                <?php foreach ($product_data as $item)  {?>
                <div class="col-3" onclick = "onclickbuttun()">
                    <img src="<?php echo $item['item-img'] ?>">
                    <h4><?php echo $item['item-name'] ?? "./images/category-2.png"?></h4>
                </div>
                <?php } //closing foreach function?>
            </div>
        </div>
    </div>