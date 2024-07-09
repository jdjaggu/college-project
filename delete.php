<?php 

include ('database/connection.php');

    $item_id = $_GET["item_id"]??1;

    $sql = "DELETE FROM PRODUCT WHERE PRODUCT_ID = $item_id";
        
    $query = oci_parse($connection, $sql);



if(oci_execute($query)){
    header("Location: http://localhost/Aprameya/CopyPP/HTML%20Template/manage-product.php");
}
else if (!oci_execute($query,OCI_NO_AUTO_COMMIT)){
    $_SESSION['message'] = "Failed to add product";    
}


?>