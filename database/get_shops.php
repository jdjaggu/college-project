<?php 

include ('connection.php');


$sql= "SELECT * FROM SHOP";

$parse_query = oci_parse($connection,$sql);

$execute_query = oci_execute($parse_query);

$shop_arr = array();

if (!$execute_query) {
    echo "Error Executing query";
}


while ($shops = oci_fetch_assoc($parse_query)){
    $shop_arr[] = $shops;

    // print_r($shop_arr) ;
}


?>