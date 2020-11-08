<?php
    //MySql Connection      
    require('database/DBController.php');

    //Product Class      
    require('database/Product.php');

    //Cart Class
    require('database/Cart.php');

    //User Class
    require('database/User.php');

    //DBController object
    $db = new DBController();

    //Product object
    $product = new Product($db);

    //Car object
    $cart = new Cart($db);

    //User object
    $user = new User($db);
    

?>