<?php 

session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleckhuddersfax Click ‘n Pick</title>

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
    <!-- <link rel="stylesheet" href="style.css"> -->

    <!-- charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body style="background-color: grey;">

    <div class="profile-nav">

        <div class="sid-nav">
            <div class="menu">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()"><i class="fa-solid fa-bars"></i></span>
            </div>
            <div class="logo-text menu">
                <p>Click ‘n Pick</p>
            </div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">Profile</a>
                <a href="manage-product.php">Manage Products</a>
                <a href="http://127.0.0.1:8080/apex/f?p=101:15:2443771983485::NO:::">Oracle Login </a>
                <a href="mailto:huddersfaxclicknpick@gmail.com">Contact</a>
                <a href="signout.php">Sign out</a>
            </div>

        </div>

        <div class="profile">
            <i class="far fa-user"></i>
            <div class="name-email">
                <h6><?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></h6>
                <p><?php echo $_SESSION['email'];?></p>
            </div>
        </div>

    </div>

    <section id="banner-area-customer">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <!-- <img src="../assets/products/samsung.jpg" alt="phone3" class="img-fluid"> -->
                <img src="https://source.unsplash.com/2400x500/?cheese" alt="phone1" class="img-fluid"
                    style="margin-top:0px;">
            </div>
        </div>
    </section>

    <div class="container">
        <div id="trader-profile">
            <h1>My Profile</h1>
            <div class="profile-content">
                <div class="img-div">
                    <img src="https://source.unsplash.com/300x300/?nature" alt="phone1" class="img-fluid"
                        style="margin-top:0px;">
                </div>
                <div class="div-second">
                    <p><?php echo $_SESSION['fname'];?></p>
                    <p><?php echo $_SESSION['lname'];?></p>
                    <p><?php echo $_SESSION['uname'];?></p>
                    <p><?php echo $_SESSION['phone'];?></p>
                    <p><?php echo $_SESSION['gender']?></p>
                </div>
                <div class="div-third">
                    <p><?php echo $_SESSION['email'];?></p>
                    <p><?php echo $_SESSION['age'];?></p>
                </div>

            </div>

        </div>



        <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "20vw";
            document.getElementById("mySidenav").style.borderRight = "4px solid yellow";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("mySidenav").style.borderRight = "0px solid yellow";
        }
        </script>


        <?php 

include ('php/_footer.php');


?>