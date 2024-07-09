<?php 

include ('connection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['remove_cart'])){

        $product = $_POST['product_id'];
        $cart = $_POST['cart_id'];
        $amount = $_POST['amount'];

        
$sql = "DELETE from CART_ITEM where FK2_PRODUCT_ID = $product and FK1_CART_ID = $cart";

$parse_query = oci_parse($connection,$sql);

$execute_query = oci_execute($parse_query);

if (!$execute_query) {
    echo "Error Executing query";
}

    }

}


?>