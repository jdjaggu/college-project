<div class="likes">

    <div class="container">

        <div class="may-like">
            <div class="left-header">
                <h1>You May <br> Also Like</h1>
                <div class="liner">

                </div>
            </div>
            <div class="line-mid">

            </div>

            <div class="right-side">

                <div class="bot-flex">
                    <?php 
                        $braker = 0;

                        foreach ($product_arr as $item) {
                            if ($braker > 1) {
                                break;
                            }

                    ?>
                    <div class="item-arr1 py-2">
                        <div class="img-container-arrival">
                            <div class="like-img">
                                <a href="#"><img src="assets\Images\<?php echo $item['PRODUCT_IMAGE'];?>" alt="item"
                                        style="width:200px; height; 300px "></a>
                            </div>
                            <div class="bot-stuff">
                                <div class="leftt">
                                    <a href="<?php printf('%s?item_id=%s','product.php',$item['PRODUCT_ID']) ?>">
                                        <h1><?php echo $item['PRODUCT_NAME'];?></h1>
                                    </a>
                                    <div class="stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="right">
                                    <p>£ <?php echo $item['PRICE'];?></p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <?php 
                    $braker++;
        }
        ?>
                </div>

                <div class="bot-flex">
                    <?php 
                        $braker = 0;
                        shuffle($product_arr);

                        foreach ($product_arr as $item) {
                            if ($braker > 1) {
                                break;
                            }

                    ?>
                    <div class="item-arr1 py-2">
                        <div class="img-container-arrival">
                            <div class="like-img">
                                <a href="#"><img src="assets\Images\<?php echo $item['PRODUCT_IMAGE'];?>" alt="item"
                                        style="width:200px; height; 300px "></a>
                            </div>
                            <div class="bot-stuff">
                                <div class="leftt">
                                    <a href="<?php printf('%s?item_id=%s','product.php',$item['PRODUCT_ID']) ?>">
                                        <h1><?php echo $item['PRODUCT_NAME'];?></h1>
                                    </a>
                                    <div class="stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <div class="right">
                                    <p>£ <?php echo $item['PRICE'];?></p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <?php 
                    $braker++;
        }
        ?>
                </div>



            </div>
        </div>

    </div>

</div>