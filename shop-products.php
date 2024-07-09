<?php 
session_start();

include ('php/_header.php');

$shop_id = $_GET["shop_id"]??1;
include ('database/get_shop-products.php');
include ('database/get_shops.php');
include ('database/_add-to-cart.php');


?>

<div class="container cont" style="margin-top:100px;">

    <div id="manage-products">
        <h1> <?php  

foreach ($shop_arr as $s_name){

    if ($s_name['SHOP_NUMBER'] == $shop_id) {
        echo $s_name['SHOP_NAME'];
    }
}
?></h1>
        <div class="grid edit-products flex-display ">

            <?php  

    foreach ($product_arr as $item){

        if ($item['FK1_SHOP_ID'] == $shop_id) {
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
}
?>



        </div>
    </div>
</div>

<?php 

include ('php/_footer.php');


?>