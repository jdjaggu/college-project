<?php 

include ('connection.php');


$sql= " SELECT * FROM 
PRODUCT p,SHOP s,USER_DETAIL u,TRADER t
WHERE p.FK1_SHOP_ID = s.SHOP_NUMBER AND s.FK1_USER_ID = t.USER_ID AND t.USER_ID = u.USER_ID";

$parse_query = oci_parse($connection,$sql);


$execute_query = oci_execute($parse_query);

$product_arr = array();

if (!$execute_query) {
    echo "Error Executing query";
}


while ($product = oci_fetch_assoc($parse_query)){
    $product_arr[] = $product;
}

shuffle($product_arr);





?>