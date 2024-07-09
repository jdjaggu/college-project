<?php
include('database\connection.php');
if(isset($_POST["action"]))
{
    $query = ("SELECT * FROM product");

    $parse_query = oci_parse($connection,$query);

    $execute_query = oci_execute($parse_query);
    
    if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
    {
        $parse_query = oci_parse($connection,"SELECT * FROM product WHERE price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'");
        $execute_query = oci_execute($parse_query);
    }

    
    $products = array();

    while ($cart_items = oci_fetch_assoc($parse_query)){
        $products[] = $cart_items;
    }  

        $output = '';

        foreach ($products as $item){

            $output .= '  

            <div class="grid-item item-sort Shop1 ">
                <div class="edit-this flex-display-flex-start" style = "box-shadow: -1px 0px 13px 1px rgba(0, 0, 0, 0.66);
                border-radius: 20px;
                padding: 30px 20px;
                margin: 20px 20px;">
                    <div class="left-part flex-column-align_center">
                        <img src="assets/Images/'.$item['PRODUCT_IMAGE'].'" alt="pic" style="width: 25rem;height: auto;padding: 10px 15px;">
                        <div class="btns flex-row-align_center-justify_space_between">
                            <form method="POST">
                                <input type="hidden" name="cart_id" value="'. 1 .'">
                                <input type="hidden" name="product_id" value="'.$item['PRODUCT_ID'].'">
                                <input type="hidden" id="amount" name="amount" value="'. 1 .'">
                                <button type="submit" name="add_to_cart" data-toggle="modal"
                                    data-target="#exampleModalCenter">Add
                                    To Cart</button>
                            </form>
                            <a
                                href="product.php?item_id='.$item['PRODUCT_ID'].'"><button>View</button></a>


</div>
</div>
<div class="right-part flex-column-align_start-justify_space_between">
    <h3>'.$item['PRODUCT_NAME'].'</h3>
    <h4>£ '.$item['PRICE'].'</h4>
    <p>'.$item['PRODUCT_DESCRIPTION'].'</p>
</div>
</div>
</div>';
}


echo $output;
}
?>