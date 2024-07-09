<?php 
session_start();

include ('php/_header.php');
include ('database/_remove-from-cart.php');
include ('database/get_cart.php');


?>

<section id="cart-page">

    <div class="likes">

        <div class="container">

            <div class="may-like">
                <div class="left-header">
                    <h1>Shopping Cart</h1>
                    <div class="liner">

                    </div>
                </div>
                <div class="line-mid">

                </div>

                <!-- cart Item -->
                <!-- cart Item -->
                <!-- cart Item -->
                <!-- cart Item -->
                <!-- cart Item -->
                <!-- cart Item -->
                <div class="right-side">
                    <?php  
    // $Total_array = array();
    $Total = 0;
    $All_counter = 0;

foreach ($cart_items_array as $cart_stuff){

    $Total = $cart_stuff['QUANTITY_PER_PRODUCT'] * $cart_stuff['PRICE'];
    $All_counter = $Total + $All_counter;

    
    // $Total = $Total + $cart_stuff['PRICE'];
    // $Total_array[$counter] = $Total;
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
                            <input type="number" id="old_value" disabled
                                value="<?php echo $cart_stuff['QUANTITY_PER_PRODUCT'];?>">
                            <form method="POST">
                                <input type="hidden" name="amount"
                                    value="<?php echo $cart_stuff['QUANTITY_PER_PRODUCT'];?>">
                                <input type="hidden" name="cart_id" value="<?php echo $cart_stuff['FK1_CART_ID'];?>">
                                <input type="hidden" name="product_id"
                                    value="<?php echo $cart_stuff['FK2_PRODUCT_ID'];?>">
                                <button style="border:none;" type="submit" name="remove_cart">
                                    <i class="fa-solid fa-x"></i>
                                </button>
                            </form>

                        </div>


                    </div>

                    <?php  
}
?>


                    <!-- cart Item -->
                    <!-- cart Item -->
                    <!-- cart Item -->
                    <!-- cart Item -->
                    <!-- cart Item -->
                    <!-- cart Item -->


                    <div class="update-cart">
                        <h1>Total: £ <span><?php echo $All_counter;?></span> </h1>
                    </div>

                    <div class="ckout">
                        <a href="checkout.php?price=<?php echo $All_counter;?>">Checkout</a>
                        <!-- <button>Checkout</button></a> -->
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>


<?php 

include ('php/_footer.php');


?>