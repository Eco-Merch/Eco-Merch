<?php
    //MySql Connection      
    require('database/DBController.php');

    //Product Class      
    require('database/Product.php');

    //Cart Clss
    require('database/Cart.php');

    //DBController object
    $db = new DBController();

    //Product object
    $product = new Product($db);

    //Car object
    $cart = new Cart($db);
    

?>