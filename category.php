<?php 

include ('php/_header.php');
include ('database/get_shop-products.php');


?>

<div class="container cont" style="margin-top: 160px;">

    <div id="search-products">
        <div class="search-bar">

            <form action="#" class="flex-row-align_center">
                <!-- <input type="text" placeholder="Search Product" onkeyup="search()" id="search-item" name="search-item"> -->
                <input type="text" placeholder="Search Product" id="search-item" name="search-item">
                <button> <i class="fa fa-search"></i>
                </button>

            </form>


        </div>


        <!-- <div class="grid edit-products flex-display " id="product-list">

            <?php
            foreach ($product_arr as $item){

            ?>


            <div class="grid-item item-sort Shop1 ">
                <div class="edit-this flex-display-flex-start">
                    <div class="left-part flex-column-align_center">
                        <img src="assets\Images\<?php echo $item['PRODUCT_IMAGE'];?>" alt="pic">
                        <div class="btns flex-row-align_center-justify_space_between">
                            <form method="POST">
                                <input type="hidden" name="cart_id" value="<?php echo 1?>">
                                <input type="hidden" name="product_id" value="<?php echo $item['PRODUCT_ID'];?>">
                                <input type="hidden" id="amount" name="amount" value="<?php echo 1?>">
                                <button type="submit" name="add_to_cart" data-toggle="modal"
                                    data-target="#exampleModalCenter">Add
                                    To Cart</button>
                            </form>
                            <a
                                href="<?php printf('%s?item_id=%s','product.php',$item['PRODUCT_ID']) ?>"><button>View</button></a>


                        </div>
                    </div>
                    <div class="right-part flex-column-align_start-justify_space_between">
                        <h3><?php echo $item['PRODUCT_NAME']; ?></h3>
                        <h4>£ <?php echo $item['PRICE']; ?> </h4>
                        <p><?php echo $item['PRODUCT_DESCRIPTION']; ?></p>
                    </div>
                </div>
            </div>

            <?php  
}

?> -->


    </div>
</div>
</div>

<!-- <script src="search.js"></script> -->
<?php 

include ('php/_footer.php');


?>