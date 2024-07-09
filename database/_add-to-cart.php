<?php 
session_start();

include ('connection.php');

echo $_SESSION['current_user_id'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['add_to_cart'])){

        $product = $_POST['product_id'];
        $cart = $_POST['cart_id'];
        $amount = $_POST['amount'];
        $userid_for_cart = $_SESSION['current_user_id'];


// $sql_for_cart = "INSERT INTO CART (CART_ID,AMOUNT,NUMBER_OF_PRODUCTS,FK1_USER_ID) VALUES ($userid_for_cart,$amount,$amount,$userid_for_cart)";   
$sql_for_cart_item = "INSERT INTO CART_ITEM (CART_ITEM_NUMBER,QUANTITY_PER_PRODUCT,FK1_CART_ID,FK2_PRODUCT_ID) VALUES (cart_item_number.NEXTVAL,$amount,$userid_for_cart,$product)";


// $parse_query = oci_parse($connection,$sql_for_cart);
// $execute_query = oci_execute($parse_query);

$parse_query = oci_parse($connection,$sql_for_cart_item);
$execute_query = oci_execute($parse_query);



if (!$execute_query) {
    echo "Error Executing query";
}

    }

}


?>