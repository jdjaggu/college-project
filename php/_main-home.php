<main id="main-site">


    <div id="top-sale">
        <div class="container py-5">
            <h4 class="pop head">
                Popular
            </h4>
            <!-- owl carousel for top sales -->
            <div class="owl-carousel owl-theme">

                <?php 
                        foreach ($product_arr as $item) {
                    ?>
                <!-- feting data -->
                <!-- feting data -->
                <!-- feting data -->
                <!-- feting data -->
                <div class="item py-2">
                    <div class="img-container">
                        <img src="assets\Images\<?php echo $item['PRODUCT_IMAGE'];?>" alt="item">
                        <a href="<?php printf('%s?item_id=%s','product.php',$item['PRODUCT_ID']) ?>">Shop Now</a>
                    </div>
                </div>
                <!-- feting data -->
                <!-- feting data -->
                <!-- feting data -->
                <!-- feting data -->

                <?php 
        }
        ?>

            </div>
            <!-- owl carousel for top sales -->
        </div>
    </div>

    <!-- img -->
    <div class="pano-img">
    </div>
    <!-- img -->

    <!-- special price -->

    <section id="new-arrival">
        <div class="container py-5">
            <h1 class="pop head">
                New Arrival
            </h1>
            <!-- owl carousel for top sales -->
            <div class="owl-carousel owl-theme">
                <?php 
                shuffle($product_arr);
                        foreach ($product_arr as $item) {
                    ?>
                <div class="item py-2">
                    <div class="img-container-arrival">
                        <div class="top-img">
                            <a href="#"><img src="assets\Images\<?php echo $item['PRODUCT_IMAGE'];?>" alt="item"></a>
                        </div>
                        <div class="bot-stuff">
                            <div class="left">
                                <a href="<?php printf('%s?item_id=%s','product.php',$item['PRODUCT_ID']) ?>">
                                    <h1><?php echo $item['PRODUCT_NAME'];?></h1>
                                </a>
                                <p><?php echo implode(' ', array_slice(explode(' ', $item['PRODUCT_DESCRIPTION']), 0, 45));?>
                                </p>
                            </div>
                            <div class="right">
                                <p>£ <?php echo $item['PRICE'];?></p>
                            </div>
                        </div>

                    </div>
                </div>
                <?php 
        }
        ?>
            </div>
            <!-- owl carousel for top sales -->
    </section>

    <!-- special price -->


</main>