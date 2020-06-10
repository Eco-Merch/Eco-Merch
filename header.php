<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco-merch</title>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
    <link rel="stylesheet" href="lightslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c61cdb8776.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
        require('functions.php');
    ?>
    
</head>

<body id="body">
    <div class="header">
        <div class="container" id="container">
            <div class="nav-bar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" id="logo" /></a>
                </div>
                <nav id="myNav">
                    <input type="checkbox" id="check" onclick="overflowFunction();"/>
                    <label for="check" class="checkbtn">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </label>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Articles</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div class="cart">
                    <a href="cart.php" ><img src="images/bag.png" style="height:40px; width:50px;" /></a>
                    <span id="cart_count"><?php echo count($product->getProductData('cart'));?></span>
                    <a href="login.php"><img src="images/account.png" style="height:40px; width:45px;" /></a>
                </div>
            </div>
        </div>