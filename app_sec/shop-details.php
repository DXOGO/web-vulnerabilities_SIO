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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        input[type="file"] {
            display: none;
        }
        .custom-file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }
        .checked {
            color: orange;
        }
    </style>
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
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
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
                <li><a href="./home.php">Home</a></li>
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
    
    <!-- Hero Section Begin -->

    <!-- Hero Section End -->

    <?php
    if (isset($_POST["trip_id"])) {

    $_SESSION['id'] = $_POST["trip_id"];
    $_SESSION['nome'] = $_POST["nome"];
    $_SESSION['descricao'] = $_POST["descricao"];
    $_SESSION['lugar'] = $_POST["lugar"];
    $_SESSION['preco'] = $_POST["preco"];
    $_SESSION['avaliacao'] = $_POST["avaliacao"];

    }
    ?>

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="img/product/<?php echo $_SESSION['id'] ?>.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h2><?php echo $_SESSION['lugar']; ?></h2>
                        <h3><?php echo $_SESSION['nome']; ?></h3>
                        <?php 
                            for ($i = 0; $i <  $_SESSION['avaliacao']; $i++) {
                                echo "<span class=\"fa fa-star checked\"></span>";
                            }
                            for ($i = 0; $i <  (5 -$_SESSION['avaliacao']); $i++) {
                                echo "<span class=\"fa fa-star\"></span>";
                            }

                        ?>
                        <div class="product__details__price"><?php echo $_SESSION['preco']; ?>€</div>
                        <p><?php echo $_SESSION['descricao']; ?></p>

                        <!-- Form para enviar dados da trip para o checkout + quantidade da mesma (adicionar ao carrinho) -->
                        <form method="POST">
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" name="quantidade" id="quantidade" value="<?php 
                                            $q = "SELECT trips.nome, trips.id, trips.preco, users_trips.quantidade from users_trips INNER JOIN trips ON trips.id=users_trips.trip_id WHERE `user_id`={$_SESSION['user_id']}";
                                            $result = mysqli_query($conn,$q);
                                            if($result->num_rows == 1){
                                                $row = $result->fetch_row();
                                                echo $row[3];
                                            } else {
                                                echo "1";
                                            }
                                        ?>">
                                    </div>
                                </div>
                            </div>
                            <button name="add_to_cart" type="submit" class="primary-btn">ADD TO CARD</button>
                        </form>
                        <?php
                            if (isset($_POST['add_to_cart'])) {

                                $query = "SELECT * FROM users_trips WHERE `user_id`={$_SESSION['user_id']} AND trip_id={$_SESSION['id']}";
                                $result = mysqli_query($conn,$query);

                                if ($_POST['quantidade'] < 1) {
                                    echo "<div class=\"container-login100-form-btn\" ><p style=\" color: red\">ERROR: quantity selected must be positive</p> </div>";
                                } else {

                                    if($result->num_rows != 0){
                                        $query = "UPDATE users_trips SET quantidade={$_POST['quantidade']} WHERE `user_id`={$_SESSION['user_id']} AND trip_id={$_SESSION['id']}";
                                        $result = mysqli_query($conn,$query);
                                        if (!$result) {
                                            echo "<div class=\"container-login100-form-btn\" ><p style=\" color: red\">ERROR in adding trip to cart. It already exists (go to shopping cart)</p> </div>";
                                        } else {
                                            echo "<div class=\"container-login100-form-btn\" ><p style=\" color: green\">Number of bookings updated!</p> </div>";
                                        }
                                    } else {
                                        $query = "INSERT INTO users_trips (`user_id`, trip_id, quantidade) VALUES ({$_SESSION['user_id']}, {$_SESSION['id']}, {$_POST['quantidade']})";
                                        $result = mysqli_query($conn,$query);

                                        if (!$result){
                                            echo "<div class=\"container-login100-form-btn\" ><p style=\" color: red\">ERROR in adding trip to cart.</p> </div>";
                                        } else {
                                            echo "<script> location.replace('shoping-cart.php'); </script>";
                                        }
                                    }
                                }
                            }
                        ?>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Comments</a>
                            </li>
                        </ul>
                        <div class="container mt-5 mb-5">
                            <div class="d-flex justify-content-center row">
                                <div class="d-flex flex-column col-md-12">
                                    <div class="coment-bottom bg-white p-2 px-4">

                                        <!-- INTRODUZIR COMENTÁRIO -->
                                        <form method="POST">
                                            
                                            <div class="d-flex flex-row add-comment-section mt-4 mb-4">
                                                
                                                <input type="text" class="form-control mr-3" placeholder="Add comment" name="comment">
                                                <label for="file-upload" class="custom-file-upload"><i class="fa fa-cloud-upload"></i></label>
                                                <input id="file-upload" type="file"/>

                                            
                                                <button type="submit" class="btn btn-primary" style="text-align: center;">Comment</button>
                                                
                                            </div>
                                            
                                            <?php
                                            if (isset($_POST['comment'])) {

                                                $id = $_SESSION['id'];
                                                $user_id = $_SESSION['user_id'];
                                                $temp = $_POST['comment'];

                                                $comment = htmlspecialchars($temp, ENT_QUOTES, 'UTF-8');

                                                $query = "INSERT INTO `comment` (`trip`, `autor`, `texto`) VALUES ('$id', '$user_id', '$comment')";
                    
                                                $result = mysqli_query($conn,$query);

                                                if (!$result){
                                                    echo "<div class=\"container-login100-form-btn\" ><p style=\" color: red\">Invalid comment.</p> </div>";
                                                }
                                            }
                                            ?>


                                        </form>

                                        <!-- COMENTÁRIOS -->
                                        <?php
                                        $resultado = $conn->query("SELECT * FROM comment WHERE trip='{$_SESSION['id']}'") ;
                                        ?>
                                        <table>
                                            <?php 
                                                foreach($resultado as $row): ?>

                                                    <?php
                                                    $autor_id = $row['autor'];
                                                    $user = $conn->query("SELECT * FROM users WHERE id='{$autor_id}'") ;

                                                    foreach($user as $u): ?>
                                            
                                                        <tr>
                                                            <div class="commented-section mt-2">
                                                            <div class="d-flex flex-row align-items-center commented-user">
                                                                <h5 class="mr-2"><b><?php echo $u['nome']; ?></b></h5>
                                                            </div>
                                                            <div class="comment-text-sm">
                                                                    <span><?php echo $row['texto']; ?></span>
                                                            </div>
                                                        </tr>
                                                        <br>
                            
                                                    <?php endforeach; ?>
                        
                                                <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    


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