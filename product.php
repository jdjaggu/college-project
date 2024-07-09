<?php 
session_start();
include ('database/_add-to-cart.php');

include ('php/_header.php');

?>

<?php  

    $item_id = $_GET["item_id"]??1;

    foreach ($product_arr as $item){

        if ($item['PRODUCT_ID'] == $item_id) {
?>

<section id="product-page" style="margin-top: 200px;">
    <div class="container flex">
        <div class="left prod-image">
            <img src="assets\Images\<?php echo $item['PRODUCT_IMAGE'];?>" alt="" class="img-fluid">
        </div>
        <div class="right prod-details">
            <p class="heading"><?php echo $item['PRODUCT_NAME']; ?></p>
            <div class="price">
                <p class="price-gg">£ <?php echo $item['PRICE']; ?></p>
                <div class="btnss qty">
                    <input
                        style="padding: 15px 10px; font-size: 25px; text-align: center; background-color: transparent;border:none;"
                        type="text" data-id="pro1" id="amt-input" class="qty_input" disabled value="1" placeholder="1">
                    <button class="plus box  qty-up " onclick="amount()" data-id="pro1"><i
                            class="fa-solid fa-plus"></i></button>
                    <button class="minus box qty-down " onclick="amount()" data-id="pro1"><i
                            class="fa-solid fa-minus"></i></button>
                </div>

            </div>
            <div class="order-cart">
                <form method="POST">
                    <input type="hidden" name="cart_id" value="<?php echo 1?>">
                    <input type="hidden" name="product_id" value="<?php echo $item['PRODUCT_ID'];?>">
                    <input type="hidden" id="amount" name="amount" value="<?php echo 1?>">
                    <button type="submit" name="add_to_cart" data-toggle="modal" data-target="#exampleModalCenter">ADD
                        TO CART</button>
                </form>

            </div>
            <div class="p">
                <p>
                    <?php echo $item['PRODUCT_DESCRIPTION']; ?>
                </p>
            </div>

            <!-- <div class="reviews">
                <p class="heading">Customer Reviews</p>

                <div class="no-reviews">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

                <div class="cust-rev">

                    <div class="top-rev">
                        <div class="left-pic">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="right-side">
                            <h1>Fname Lname</h1>
                            <p>Date</p>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bot-rev">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam excepturi ea ducimus, nisi in
                            quam culpa esse hic molestiae earum?Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Incidunt ex impedit, repellat molestias aspernatur esse quas laboriosam provident
                            minus, praesentium accusamus repellendus sit maxime magni similique!</p>
                    </div>

                </div>

                <div class="cust-rev">

                    <div class="top-rev">
                        <div class="left-pic">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="right-side">
                            <h1>Fname Lname</h1>
                            <p>Date</p>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bot-rev">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam excepturi ea ducimus, nisi in
                            quam culpa esse hic molestiae earum?Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Incidunt ex impedit, repellat molestias aspernatur esse quas laboriosam provident
                            minus, praesentium accusamus repellendus sit maxime magni similique!</p>
                    </div>

                </div>

                <div class="cust-rev">

                    <div class="top-rev">
                        <div class="left-pic">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="right-side">
                            <h1>Fname Lname</h1>
                            <p>Date</p>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bot-rev">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam excepturi ea ducimus, nisi in
                            quam culpa esse hic molestiae earum?Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Incidunt ex impedit, repellat molestias aspernatur esse quas laboriosam provident
                            minus, praesentium accusamus repellendus sit maxime magni similique!</p>
                    </div>

                </div>
            </div> -->

        </div>
    </div>

    <?php 

include ('php/_may-like.php');


?>

</section>

<?php  
    }
}
?>

<?php 

include ('php/_footer.php');


?>