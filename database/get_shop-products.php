<?php 

include ('connection.php');

// echo $shop_id;

$sql = "SELECT * FROM PRODUCT ";

$parse_query = oci_parse($connection,$sql);


$execute_query = oci_execute($parse_query);

$product_arr = array();

if (!$execute_query) {
    echo "Error Executing query";
}


while ($product = oci_fetch_assoc($parse_query)){
    $product_arr[] = $product;
}





?>