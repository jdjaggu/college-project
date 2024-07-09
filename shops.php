<?php 

include ('php/_header.php');
include ('database/get_shops.php');

?>

<div class="container cont">

    <div id="manage-products" style="margin-top: 80px;">

        <h1>Shops</h1>

        <div class=" edit-products flex-display ">
            <?php 
                        foreach ($shop_arr as $shop_single) {
                    ?>
            <div class="grid-item item-sort Shop1 ">
                <div class="edit-this flex-display-flex-start">
                    <div class="left-part flex-column-align_center">
                        <img src="assets\Images\<?php echo $shop_single['SHOP_IMG'];?>" alt="pic">
                        <div class="btns flex-row-align_center">
                            <a href="<?php printf('%s?shop_id=%s','shop-products.php',$shop_single['SHOP_NUMBER']) ?>"><button>View
                                    Products</button></a>
                        </div>
                    </div>
                    <div class="right-part flex-column-align_start-justify_space_between">
                        <h3><?php echo $shop_single['SHOP_NAME'];?></h3>
                        <h4>Trader</h4>
                        <p><?php echo $shop_single['SHOP_DESCRIPTION'];?></p>
                    </div>
                </div>
            </div>
            <?php 
        }
        ?>

        </div>
    </div>
</div>

<?php 

include ('php/_footer.php');


?>