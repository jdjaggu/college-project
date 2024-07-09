<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6d68a2fceb.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <?php 


if (isset($_POST['search-button-global'])){
    $search_item = $_POST['search-item'];
    header ("location: ../global-search.php?search_item=$search_item");
}

?>


    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="offer">
        <a href="#">Offer</a>
    </div>

    <header class="header">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>

        <div class="logo-list">

            <div class="logo">
                <a href="#"><img src="./images/logo.png" alt="LOGO"></a>
            </div>

            <div class="list">
                <ul class="navs">
                    <li class="nav">
                        <a href="../customer_homepage.php" class="home"> Home </a>
                    </li>
                    <li class="nav">
                        <a href="../shops.php"> Shop </a>
                    </li>
                    <li class="nav">
                        <a href="../filter.php"> Category </a>
                    </li>
                    <li class="nav">
                        <a href="../about.php"> About Us </a>
                    </li>
                    <li class="nav">
                        <a href="../about.php#contact"> Contact </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="icons">
            <form action="" method="post">
                <div class="search">

                    <div class="dropdown">
                        <select name="filter" class="filter">
                            <option value="product">Product</option>
                        </select>
                    </div>

                    <div class="search-text">
                        <form name="global-search" action="" method="post">
                            <input type="text" name="search-item" placeholder="SEARCH" class="input-search">
                            <button type="submit" name="search-button-global"><img
                                    src="images/search-icon.png"></button>
                        </form>
                    </div>


                </div>
            </form>

            <div class="icon">
                <ul>
                    <li class="list-user">
                        <i class="far fa-user"></i>
                        <ul>
                            <li><a href="../customer_profile.php">Profile</a></li>
                            <li><a href="./signin.php">Login</a></li>
                            <li><a href="../signout.php">Logout</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../cart.php"><img src="./images/cart-icon.png"></a>
                    </li>
                </ul>
            </div>
        </div>

    </header>
    <!-- 
<script src="./js/main.js"></script>
</body>

</html> -->