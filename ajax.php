<?php
//Including Database configuration file.
include ('database/connection.php');
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
//Search query.
   $Query = "SELECT * FROM Product WHERE PRODUCT_NAME LIKE '%$Name%'";
//Query execution
$parse_query = oci_parse($connection,$Query);

$execute_query = oci_execute($parse_query);

$products = array();

while ($cart_items = oci_fetch_assoc($parse_query)){
    $products[] = $cart_items;
}  
//Creating unordered list to display result.
   //Fetching result from database.
   

   foreach ($products as $item){ 
    ?>


<div class="grid-item item-sort Shop1 ">
    <div class="edit-this flex-display-flex-start" style="box-shadow: -1px 0px 13px 1px rgba(0, 0, 0, 0.66);
                border-radius: 20px;
                padding: 30px 20px;
                margin: 20px 20px;">
        <div class="left-part flex-column-align_center">
            <img src="assets\Images\<?php echo $item['PRODUCT_IMAGE'];?>" alt="pic"
                style="width: 25rem;height: auto;padding: 10px 15px;">
            <div class="btns flex-row-align_center-justify_space_between">
                <form method="POST">
                    <input type="hidden" name="cart_id" value="<?php echo 1?>">
                    <input type="hidden" name="product_id" value="<?php echo $item['PRODUCT_ID'];?>">
                    <input type="hidden" id="amount" name="amount" value="<?php echo 1?>">
                    <button type="submit" name="add_to_cart" data-toggle="modal" data-target="#exampleModalCenter">Add
                        To Cart</button>
                </form>
                <a href="<?php printf('%s?item_id=%s','product.php',$item['PRODUCT_ID']) ?>"><button>View</button></a>


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