<?php 

include ('database/get_product.php');

if (isset($_POST['search-button-global'])){
    $search_item = $_POST['search-item'];
    header ("location: global-search.php?search_item=$search_item");
}
// else {
//     $search_item = 'Cake';

// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleckhuddersfax Click ‘n Pick</title>


    <!-- price Filter -->
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- price Filter -->
    <script type="text/javascript" src="search-script.js"></script>


    <!-- logo -->
    <link rel="icon" href="../assets/products/logo.png">
    <!-- logo -->

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" /> -->

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <script src="https://kit.fontawesome.com/6d68a2fceb.js"></script>


    <!-- Custom CSS file -->
    <link rel="stylesheet" type="text/css" href="../HTML Template/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../HTML Template/css/bibash.css" />
    <!-- <link rel="stylesheet" href="style.css"> -->

    <!-- slider -->

    <!-- slider -->
</head>

<body>

    <div class="offer">
        <a href="#">Offer</a>
    </div>

    <header class="header" id="header-page">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>

        <div class="logo-list">

            <div class="logo">
                <a href="#"><img src="assets\products\logo.png" alt="LOGO"></a>
            </div>

            <div class="list">
                <ul class="navs">
                    <li class="navv">
                        <a href="customer_homepage.php" class="home"> Home </a>
                    </li>
                    <li class="navv">
                        <a href="shops.php"> Shop </a>
                    </li>
                    <li class="navv">
                        <a href="filter.php"> Category </a>
                    </li>
                    <li class="navv">
                        <a href="about.php"> About Us </a>
                    </li>
                    <li class="navv">
                        <a href="about.php#contact"> Contact </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="icons">
            <form action="" method="post">
                <div class="search">

                    <div class="dropdown">
                        <select name="filter" class="filter">
                            <option value="product  ">Product</option>
                        </select>
                    </div>

                    <div class="search-text">
                        <form name="global-search" action="" method="post">
                            <input type="text" name="search-item" placeholder="SEARCH" class="input-search">
                            <button type="submit" name="search-button-global" class="btn"><img
                                    src="assets\products\search-icon.png"></button>
                        </form>
                    </div>
                </div>
            </form>

            <div class="icon">
                <ul>
                    <li class="list-user">
                        <i class="far fa-user"></i>
                        <ul>
                            <li><a href="customer_profile.php">Profile</a></li>
                            <li><a href="Func\signin.php">Login</a></li>
                            <li><a href="signout.php">Logout</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="cart.php"><img src="assets\products\cart-icon.png"></a>
                    </li>
                </ul>
            </div>
        </div>

    </header>

    <!-- <script src="main.js"></script> -->