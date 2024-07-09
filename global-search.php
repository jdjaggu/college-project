<?php 

include ('php/_header.php');

include ('database/_add-to-cart.php');

$search = $_GET["search_item"]??1;

?>
<div class="container" id="search-products" style="margin-top: 160px;">

    <div class="flex-row-align_center">
        <input style="padding:12px 5px;width:70%;" type="text" placeholder="Search Product" id="search"
            value="<?php echo $search;?>">
        </input>
    </div>

    <div id="display"></div>
    </body>

    </html>