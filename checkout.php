<?php 
session_start();

include ('php/_header.php');
include ('database/get_cart.php');


if(isset($_GET['price'])){
    $p = $_GET['price'];
}

$_SESSION['price_for_payment'] = $p;

?>
<section id="checkout">

    <div class="likes">

        <div class="container">

            <div class="may-like">
                <div class="left-header">
                    <label class="head">Contact Information</label><br>

                    <div class="email-form ck-form">
                        <!-- icon for email -->
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email">
                    </div>

                    <div class="phone-form ck-form">
                        <!-- icon for phone -->
                        <i class="fas fa-phone"></i>
                        <input type="text" name="phone" placeholder="Phone">
                    </div>


                    <div class="col-slots">
                        <label class="head">Collection Slots</label><br>

                        <!-- Radio Buttons for day -->
                        <!-- <label for="wed">WED</label>
                        <input type="radio" name="day" value="wed" id="wed">

                        <label for="thu">THU</label>
                        <input type="radio" name="day" value="thu" id="thu">

                        <label for="fri">FRI</label>
                        <input type="radio" name="day" value="fri" id="fri"><br> -->

                        <h3>Select Day</h3>

                        <div class="radio">
                            <input type="radio" class="radio__input" value="option1" name="myRadio" id="myRadio1">
                            <label for="myRadio1" class="radio__label">WED</label>
                            <input type="radio" class="radio__input" value="option2" name="myRadio" id="myRadio2">
                            <label for="myRadio2" class="radio__label">THU</label>
                            <input type="radio" class="radio__input" value="option3" name="myRadio" id="myRadio3">
                            <label for="myRadio3" class="radio__label">FRI</label>
                        </div>

                        <!-- Radio Buttons for Time -->
                        <!-- <label for="10-1">10am - 1am</label>
                        <input type="radio" name="day" value="10-1" id="10-1">

                        <label for="1-3">1pm - 3pm</label>
                        <input type="radio" name="day" value="1-3" id="1-3">

                        <label for="3-7">3pm - 7pm</label>
                        <input type="radio" name="day" value="3-7" id="3-7"><br> -->

                        <h3>Select Time</h3>

                        <div class="time-radio">
                            <input type="radio" class="time-radio__input" value="time-option1" name="time-myRadio"
                                id="time-myRadio1">
                            <label for="time-myRadio1" class="time-radio__label">10am - 1pm</label>
                            <input type="radio" class="time-radio__input" value="time-option2" name="time-myRadio"
                                id="time-myRadio2">
                            <label for="time-myRadio2" class="time-radio__label">1pm - 4pm</label>
                            <input type="radio" class="time-radio__input" value="time-option3" name="time-myRadio"
                                id="time-myRadio3">
                            <label for="time-myRadio3" class="time-radio__label">4pm - 7pm</label>
                        </div>
                    </div>


                </div>
                <div class="line-mid">

                </div>

                <div class="right-side">
                    <label class="head">Summary</label><br>
                    <!-- products in checkout -->
                    <?php  

foreach ($cart_items_array as $cart_stuff){

?>
                    <div class="cart-product">
                        <img src="assets\Images\<?php echo $cart_stuff['PRODUCT_IMAGE'];?>" alt="bazas"
                            class="cart-img">

                        <div class="price-etc">
                            <h1><?php echo $cart_stuff['PRODUCT_NAME'];?></h1>
                            <div class="liner">

                            </div>
                            <p>£ <?php echo $cart_stuff['PRICE'];?></p>
                        </div>
                        <div class="qty">
                            <h2><?php echo $cart_stuff['QUANTITY_PER_PRODUCT'];?></h2>
                        </div>


                    </div>
                    <?php  
}
?>

                    <div class="total-cost">
                        <h3>Total</h3>
                        <h4>£ <?php echo $p;?></h4>

                        <input type="hidden" id="t_amount" value="<?php echo $p;?>" />
                    </div>
                    <!-- Total amount calculated -->

                </div>
            </div>

            <div class="payment">
                <label>
                    <h3>Payment Method</h3>
                </label><br>
                <!-- <button class="btn-pay-btn">
                    <img src="assets\products\paypal-logo.png" alt="PayPal" class="btn-pay">
                </button> -->
                <div id="paypal-payment-button">

                </div>
            </div>

        </div>

    </div>
</section>

<script
    src="https://www.paypal.com/sdk/js?client-id=AVn3IPatVpXwprSvBiqe8uwAX2LVsBZEUxrm6tQJBfL7wA-pDeVcxDaSiBTlOJxlcGt6Sq74CtC8BexC&disable-funding=credit,card">
</script>
<!-- for testing -->

<!-- For paypal button -->
<script src="./js/payment.js">
</script>


<?php

include ('php/_footer.php');


?>