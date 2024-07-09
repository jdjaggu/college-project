<?php
session_start();
include "connection.php";
$error = array();

if (isset($_POST['submit']))
{
    $pname = trim($_POST['pname']);
    $price = $_POST['price'];
    $pimage = trim($_POST['pimage']);
    $stock_available = $_POST['savailable']; 
    $allergy_info = trim($_POST['ainfo']);
    $product_desc = trim($_POST['pinfo']);
    if(isset($_POST['filter'])) {
        $shopid = $_POST['filter'];    
    }
    
    //
    $Qty_per_item = 1;
    $min_order = 1;
    $max_order = 20;


    //Validation product name
    if(!empty($pname)){
        $pattern = "/^[a-zA-z]*$/";
        if(strlen($pname)>=3){
            if(preg_match($pattern, $pname)){
                $pname = $pname;
            }
            else{
                $error['productErr'] = "Only alphabets and whitespace are allowed.";
            }
        }
        else{
            $error['productErr'] ="Product Name must be at least 3 characters";
        }
    }
    else{
        $error['productErr']= "Product name can not be empty";
    } 
    
    //price
    if(!empty($price)){ 
        if(filter_var($price,FILTER_SANITIZE_NUMBER_FLOAT)){   // $price = number_format($price,2); 
            $price = $price;
        }
        else{
        $error['priceErr'] = "Only number is allowed";
        } 
    }
    else{
        $error['priceErr'] = "Price can not be empty";
    } 


    //Stock Available
    if(!empty($stock_available)){
        $stock_available =  $stock_available;
    }
    else{
        $error['stockErr'] = "Stock Availabe can not be empty";
    }
    

    //image
    if(empty($pimage)){
        $error['imgErr'] = "Image field can not be empty";
    }
    else{
        $imageFileType = strtolower(pathinfo($pimage,PATHINFO_EXTENSION));
        if($imageFileType != "jpg" && $imageFileType != "png"){
            $error['imgErr'] = "Only allowded 'PNG' and 'JPG' extension.";
        }
        else{
            $pimage = $pimage; 
        }
    }

    if(empty($product_desc)){
        $error['pinfoErr'] = "Product Information field can not be empty";
    }

    if (count($error) == 0) {     

        $sql = "INSERT INTO PRODUCT(PRODUCT_ID,PRODUCT_NAME,PRODUCT_DESCRIPTION,PRICE,QUANTITY_PER_ITEM,STOCK_AVAILABLE,MINIMUN_ORDER,MAXIMUM_ORDER,PRODUCT_IMAGE,ALLERGY_INFORMATION,FK1_SHOP_ID)
        VALUES(seq_product_id.NEXTVAL,:productname_bv,:productdescription_bv,:price_bv,:qty,:stock_bv,:mini,:maxi,:pimg_bv,:allergyinfo_bv,:shop_id)";
        
        $query = oci_parse($conn, $sql);

        //Binding varaibles
        oci_bind_by_name($query, ':productname_bv', $pname);
        oci_bind_by_name($query, ':productdescription_bv', $product_desc);
        oci_bind_by_name($query, ':price_bv', $price);
        oci_bind_by_name($query, ':qty', $Qty_per_item);
        oci_bind_by_name($query, ':stock_bv', $stock_available);
        oci_bind_by_name($query, ':mini', $min_order);
        oci_bind_by_name($query, ':maxi', $max_order);
        oci_bind_by_name($query, ':pimg_bv', $pimage);
        oci_bind_by_name($query, ':allergyinfo_bv', $allergy_info);
        oci_bind_by_name($query, ':shop_id', $shop);

        if(!oci_execute($query,OCI_NO_AUTO_COMMIT)){
            $_SESSION['message'] = "Product added Successfully";
            header("Location: http://localhost/Aprameya/rabann/add_product.php");
        }
        else if (oci_execute($query,OCI_NO_AUTO_COMMIT)){
            $_SESSION['message'] = "Failed to add product";    
        }
}

}