<?php

session_start();

include ('database/get_products_plus.php');

// $_SESSION['current_user_id'] = $row['USER_ID'];
// $_SESSION['fname'] = $row['USER_FIRST_NAME'];
// $_SESSION['lname'] = $row['USER_LAST_NAME'];
// $_SESSION['address'] = $row['USER_ADDRESS'];
// $_SESSION['email'] = $row['USER_EMAIL'];
// $_SESSION['phone'] = $row['USER_PHONE_NUMBER'];
// $_SESSION['uname'] = $row['USER_USERNAME'];
// $_SESSION['age'] = $row['USER_DOB'];
// $_SESSION['gender'] = $row['USER_GENDER'];

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

<body>

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
                <a href="trader_homepage.php">Profile</a>
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


    <div class="container cont">

        <div id="manage-products">
            <div class="top-header flex-row-align_center-justify_space_between">

                <a href="add_product.php"><button class="add-prods">Add Product</button></a>
            </div>

            <div class="grid edit-products flex-display ">
                <?php  

foreach ($product_arr as $item){

    if ($item['USER_ID'] == $_SESSION['current_user_id']) {
?>
                <div class="grid-item item-sort Shop1 ">
                    <div class="edit-this flex-display-flex-start">
                        <div class="left-part flex-column-align_center">
                            <img src="assets\Images\<?php echo $item['PRODUCT_IMAGE'];?>" alt="pic">
                            <div class="btns flex-row-align_center-justify_space_between">
                                <a href="add_product.php"><button>Edit</button></a>

                                <a
                                    href="<?php printf('%s?item_id=%s','delete.php',$item['PRODUCT_ID']) ?>"><button>Delete</button></a>

                            </div>
                        </div>
                        <div class="right-part flex-column-align_start-justify_space_between">
                            <h3><?php echo $item['PRODUCT_NAME']; ?></h3>
                            <h4>£ <?php echo $item['PRICE']; ?></h4>
                            <p><?php echo $item['PRODUCT_DESCRIPTION']; ?></p>
                        </div>
                    </div>
                </div>

                <?php  

    }}
?>

            </div>
        </div>
    </div>

    <!-- isotope -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
        integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

    <!-- isotope -->

    <script src="isotope.js"></script>

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