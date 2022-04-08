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
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
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
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="./home.php">Shop</a></li>
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
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./home.php"><img src="img/logo.png" height="60px" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./home.php">Home</a></li>
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

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Trips</th>
                                    <th>Price</th>
                                    <th>Reserves</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php

                                $q = "SELECT trips.nome, trips.id, trips.preco, users_trips.quantidade from users_trips INNER JOIN trips ON trips.id=users_trips.trip_id WHERE `user_id`={$_SESSION['user_id']}";
                                $result = mysqli_query($conn,$q);

                                if($result->num_rows == 0){
                                    echo "<tr><td><p style=\" color: red\">You don't have a trip in your cart. Try adding one to proceed...</p> </td></tr>";
                                } 

                                $total = 0;
                                $_SESSION['total'] = $total; 
                                $_SESSION['trip'] = $trip; 

                                foreach($result as $trip): ?>
                                    <tr>
                                        <td class="shoping__cart__item">
                                        <img width="100px" heigth="100px" src="img/product/<?php echo $trip['id'] ?>.jpg" alt="">
                                            <h5><?php echo $trip["nome"]; ?></h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            <?php echo $trip["preco"]; ?>€
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <?php echo $trip["quantidade"]; ?>
                                        </td>
                                        <td class="shoping__cart__total">
                                            <?php
                                                $price = $trip["quantidade"]*$trip["preco"];
                                                $total += $price;
                                                echo $price;
                                            ?>€
                                        </td>
                                        <form method="POST" action="">
                                            <td class="shoping__cart__item__close">
                                                <input type="hidden" name="trip_id" value="<?= $trip['id'] ?>" />
                                                <button type="submit" class="icon_close" name="icon_close"></button>
                                            </td>
                                        </form>
                                        
                                        <?php
                                            if (isset($_POST['trip_id'])) {
                                                $q = "DELETE FROM users_trips WHERE `user_id`={$_SESSION["user_id"]} AND trip_id={$_POST["trip_id"]}";
                                                $result = mysqli_query($conn,$q);
                                            
                                                if (!$result){
                                                    echo("</table></div>".mysqli_error($conn));
                                            
                                                } else {
                                                    echo "<script> location.replace('shoping-cart.php'); </script>";
                                                }
                                            }
                                        ?>

                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#" method="get">
                                <input type="text" name="coupon" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                            <?php

                                $coupons = array("SPOTON10", "NEWYEAR10", "XMAS10", "VALENTINES10", "ILOVESIO");

                                if (isset($_GET['coupon'])) {
                                    $input = $_GET['coupon'];
                                    if (in_array($input, $coupons))
                                    {
                                        $total *= 0.9;
                                        echo "<div><p style=\" color: green\">You applicated the coupon!</p> </div>";
                                    }
                                  else
                                    {
                                        echo "<div><p style=\" color: red\">Invalid coupon!</p> </div>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Total 
                                <span>
                                    <?php 
                                        echo $total;
                                    ?>€
                                </span>
                            </li>
                        </ul>
                        <form method="POST">
                            <input type="hidden" name="user_id" value="<?= $_SESSION["user_id"] ?>" />
                            <input type="hidden" name="total_price" value="<?= $total ?>" />
                            <button type="submit" name="checkout" class="primary-btn">PROCEED TO CHECKOUT</a>
                        </form>
                        <?php
                            $_SESSION["total_price"] = $total;
                            if (isset($_POST['user_id'])) {
                                if ($total == 0) {
                                    echo "<div><p style=\" color: red\">Can't proceed to checkout. You have no selected trips.</p> </div>";
                                } else {
                                    echo "<script> location.replace('checkout.php'); </script>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

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