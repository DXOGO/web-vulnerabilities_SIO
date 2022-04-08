<?php 
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spoton</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="./index.php"><i class="fa fa-user"></i> <span></span></a></li>
                <li><a href="./shoping-cart.php"><i class="fa fa-shopping-bag"></i> <span></span></a></li>
            </ul>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> index</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.php">Shop Details</a></li>
                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                        <li><a href="./checkout.php">Check Out</a></li>
                    </ul>
                </li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" height="60px" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./home.php">Shop</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="./index.php" style="color: green"><i class="fa fa-sign-out"></i> Logout</a></li>
                            <li><a href="./shoping-cart.php" style="color: green"><i class="fa fa-shopping-cart"></i> Shopping Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form class="login100-form validate-form" method="POST">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>First Name<span>*</span></p>
                                        <input type="text" id="fname" name="fname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" id="lname" name="lname">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Country<span>*</span></p>
                                <input type="text" id="country" name="country">
                            </div>
                            <div class="checkout__input">  
                                <p>Address<span>*</span></p>
                                <input type="text" name="address" id="address" placeholder="Street Address" class="checkout__input__add">
                                <input type="text" placeholder="Apartment, suite, unite ect (optinal)">         
                            </div>
                            <div class="checkout__input">                         
                                <p>District/State<span>*</span></p>
                                <input type="text" id="state" name="state">
                            </div>
                            <div class="checkout__input">                               
                                <p>City/Town<span>*</span></p>
                                <input type="text" id="city" name="city">
                            </div>
                            <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text" id="zip" name="zip">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" id="phone" name="phone">
                                    </div>
                                </div>
                            </div>
                            <h4>Payment Information</h4>
                            <div class="checkout__input">
                                <p>Cardholder Name<span>*</span></p></p>
                                <input type="text" name="cardname" id="cardname"  />
                            </div>
                            <div class="checkout__input">
                                <p>Card Number<span>*</span></p></p>
                                <input type="number" class="checkout__input" name="cardnumber" id="cardnumber"  />
                            </div>
                            <div class="row">
                                <div class="checkout__input">
                                    <p>Card Type<span>*</span></p></p>
                                    <select class="checkout__input" name="cardtype" id="cardtype"  >
                                        <option value="">--Select a Card Type--</option>
                                        <option value="Visa">Visa</option>
                                        <option value="RuPay">RuPay</option>
                                        <option value="MasterCard">MasterCard</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Expiry<span>*</span></p>
                                        <input type="date" class="inputbox" name="expdate" id="expdate"  />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>CVV<span>*</span></p>
                                        <input type="password" class="inputbox" name="cvv" id="cvv"  />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Bookings <span>Total</span></div>
                                <ul>
                                <?php


                                    $q = "SELECT trips.nome, trips.id, trips.preco, users_trips.quantidade from users_trips INNER JOIN trips ON trips.id=users_trips.trip_id WHERE `user_id`={$_SESSION['user_id']}";
                                    $result = mysqli_query($conn,$q);

                                    if (!$result){
                                        echo "<div class=\"container-login100-form-btn\" ><p style=\" color: red\">ERROR</p> </div>";
                                    }
                                    foreach($result as $trip): ?>
                                        <li><?php echo $trip["nome"]; ?> (x<?php echo $trip["quantidade"]; ?>)<span><?php echo $trip["preco"]; ?>€</span></li>
                                    <?php endforeach; ?>
                                        
                                </ul>
                                <div class="checkout__order__total">Total <span><?php echo $_SESSION["total_price"]; ?>€</span></div>
                                <button type="submit" name="submit_btn" id="submit_btn" class="site-btn">PLACE ORDER</button>
                            </div>
                            <?php
                                if (isset($_POST['submit_btn'])){
                                    if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['country']) && !empty($_POST['address']) && !empty($_POST['state']) && !empty($_POST['city']) && !empty($_POST['zip']) && !empty($_POST['phone'])// ){
                                       && !empty($_POST['cardname']) && !empty($_POST['cardnumber']) && isset($_POST['cardtype']) && !empty($_POST['cvv']) ){
                                        echo "<script> location.replace('order.php'); </script>";
                                    } else {
                                        echo "<div class=\"container-login100-form-btn\" ><p style=\" color: red\">Erro! Verifica q todos os campos estão corretamente preenchidos</p> </div>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

 

</body>

</html>