<?php 
session_start();

// $_SESSION['current_user_id'] = $row['USER_ID'];
// $_SESSION['fname'] = $row['USER_FIRST_NAME'];
// $_SESSION['lname'] = $row['USER_LAST_NAME'];
// $_SESSION['address'] = $row['USER_ADDRESS'];
// $_SESSION['email'] = $row['USER_EMAIL'];
// $_SESSION['phone'] = $row['USER_PHONE_NUMBER'];
// $_SESSION['uname'] = $row['USER_USERNAME'];
// $_SESSION['age'] = $row['USER_DOB'];

include ('php/_header.php');

?>

<section id="banner-area-customer">
    <div class="owl-carousel owl-theme">
        <div class="item">
            <!-- <img src="../assets/products/iphone13.jpg" alt="phone1" class="img-fluid"> -->
            <img src="https://source.unsplash.com/4000x500/?hills,mountain" alt="phone1" class="img-fluid">
        </div>
    </div>
</section>

<section id="customer-profile">
    <div class="container">
        <div class="cust-top">
            <div class="cust-left">
                <h1>My Profile</h1>
                <div class="cust-details">
                    <div class="pic-img">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="mid-col">
                        <p><?php echo $_SESSION['fname'];?></p>
                        <p><?php echo $_SESSION['lname'];?></p>
                        <p><?php echo $_SESSION['uname'];?></p>
                        <p><?php echo $_SESSION['phone'];?></p>
                        <p><?php echo $_SESSION['gender']?></p>

                    </div>

                    <div class="left-col">
                        <p><?php echo $_SESSION['email'];?></p>
                        <p><?php echo $_SESSION['age'];?></p>
                    </div>
                </div>
            </div>
            <div class="cust-right">
                <h1>Address</h1>
                <div class="cust-address">
                    <p>
                        <?php echo $_SESSION['address'];?>
                    </p>
                </div>
            </div>
        </div>
        <div class="cust-bot">

        </div>

    </div>
</section>

<?php 

include ('php/_footer.php');


?>