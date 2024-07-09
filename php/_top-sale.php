<div id="top-sale">
    <div class="container py-5">
        <h4 class="pop head">
            Popular
        </h4>
        <!-- owl carousel for top sales -->
        <div class="owl-carousel owl-theme">

            <?php 
            while (oci_fetch($parse_query)) {
        ?>
            <!-- feting data -->
            <!-- feting data -->
            <!-- feting data -->
            <!-- feting data -->
            <div class="item py-2">
                <div class="img-container">
                    <img src="assets\Images\<?php echo $p_img;?>" alt="item">
                    <a href="#">Shop Now</a>
                </div>
            </div>
            <!-- feting data -->
            <!-- feting data -->
            <!-- feting data -->
            <!-- feting data -->

            <?php 
        }
        ?>









            <!-- <div class="item py-2">
                <div class="img-container">
                    <img src="../assets/products/samsung.jpg" alt="item">
                    <a href="#">Shop Now</a>
                </div>
            </div>
            <div class="item py-2">
                <div class="img-container">
                    <img src="../assets/products/samsung.jpg" alt="item">
                    <a href="#">Shop Now</a>
                </div>
            </div>

            <div class="item py-2">
                <div class="img-container">
                    <img src="../assets/products/samsung.jpg" alt="item">
                    <a href="#">Shop Now</a>
                </div>
            </div>

            <div class="item py-2">
                <div class="img-container">
                    <img src="../assets/products/samsung.jpg" alt="item">
                    <a href="#">Shop Now</a>
                </div>
            </div>

            <div class="item py-2">
                <div class="img-container">
                    <img src="../assets/products/samsung.jpg" alt="item">
                    <a href="#">Shop Now</a>
                </div>
            </div> -->

        </div>
        <!-- owl carousel for top sales -->
    </div>
</div>