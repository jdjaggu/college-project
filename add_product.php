<?php 
include ("insert_product.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\add-style.css">
    <source media="(min-width: )" srcset="">
    <title>Add Product Form</title>
</head>

<body>

    <div class="verify">
        <?php if(isset($_SESSION['message']))
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
    </div>
    <div class="container trader-container">
        <h2>Add Product Details</h2>

        <form action="" method="POST" class="box">

            <div class="top">

                <div class="left">
                    <label for="pname">Product Name</label>
                    <input type="text" name="pname" id="pname"
                        value="<?php if(isset($_POST['pname'])){echo $_POST['pname'];}?>"> <br>
                    <div class=" msg username-msg">
                        <?php
                        if (isset($error['productErr']))
                            echo $error['productErr'];
                        ?>
                    </div>

                    <label for="price">Price</label>
                    <input type="text" name="price" id="price"
                        value="<?php if(isset($_POST['price'])){echo $_POST['price'];}?>"><br>
                    <div class="msg cpass-msg">
                        <?php
                        if (isset($error['priceErr']))
                            echo $error['priceErr'];
                        ?>
                    </div>


                </div>

                <div class="right">
                    <label for="savailable">Stock Available</label>
                    <input type="number" min="0" name="savailable" id="savailable"
                        value="<?php if(isset($_POST['savailable'])){echo $_POST['savailable'];}?>"><br>
                    <div class=" msg pass-msg">
                        <?php
                        if (isset($error['stockErr']))
                            echo $error['stockErr'];
                        ?>
                    </div>

                    <label for="pimage">Product Image</label>
                    <input type="text" name="pimage" id="pimage"
                        value="<?php if(isset($_POST['pimage'])){echo $_POST['pimage'];}?>"> <br>
                    <div class="msg email-msg">
                        <?php
                        if (isset($error['imgErr']))
                            echo $error['imgErr'];
                        ?>
                    </div>

                </div>
            </div>


            <div class="bot">

                <div class="dob">
                    <label for="ainfo">Allergy Information</label>
                    <textarea name="ainfo" id="ainfo" cols="10"
                        rows="3"><?php if(isset($_POST['ainfo'])){echo $allergy_info;}?></textarea><br>
                    <div class="msg ainfo-msg">
                        <?php
                        if (isset($error['allinfoErr']))
                            echo $error['allinfoErr'];
                        ?>
                    </div>
                </div>

                <div class="dob1">
                    <label for="pinfo">Product Description</label>
                    <textarea name="pinfo" id="pinfo" cols="10"
                        rows="3"><?php if(isset($_POST['pinfo'])){echo $_POST['pinfo'];}?></textarea><br>
                    <div class=" msg pinfo-msg">
                        <?php
                        if (isset($error['pinfoErr']))
                            echo $error['pinfoErr'];
                        ?>
                    </div>
                </div>

                <div class="dob1">
                    <label for="pinfo">Shop Number</label>
                    <input type="number" name="shopnumber" id="pinfo" cols="10"
                        rows="3"><?php if(isset($_POST['pinfo'])){echo $_POST['pinfo'];}?></textarea><br>
                    <div class=" msg pinfo-msg">
                        <?php
                        if (isset($error['pinfoErr']))
                            echo $error['pinfoErr'];
                        ?>
                    </div>
                </div>

                <input type="submit" name="submit" value="Add Product" class="sub">
            </div>
        </form>
    </div>
</body>

</html>