<?php 
session_start();

include ('connection.php');

echo $_SESSION['current_user_id'];

$cartIidIget = $_SESSION['current_user_id'];


$sql= "SELECT DISTINCT USER_FIRST_NAME||' '||USER_LAST_NAME AS Username,PRODUCT_NAME,PRODUCT_IMAGE,QUANTITY_PER_PRODUCT,PRICE,FK1_CART_ID,FK2_PRODUCT_ID
FROM cart_item ci,user_detail u,product p, cart c
WHERE ci.FK2_PRODUCT_ID = p.PRODUCT_ID AND 
c.FK1_USER_ID = u.USER_ID AND 
ci.FK1_CART_ID = c.CART_ID
AND ci.FK1_CART_ID = $cartIidIget";

$parse_query = oci_parse($connection,$sql);

$execute_query = oci_execute($parse_query,OCI_NO_AUTO_COMMIT);

$product_arr = array();

if (!$execute_query) {
    echo "Error Executing query";
}

$cart_items_array = array();

while ($cart_items = oci_fetch_assoc($parse_query)){
    $cart_items_array[] = $cart_items;
}


?>