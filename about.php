<?php 
include "database/insert_contact.php"; 

include ('php/_header.php');

?>

<main id="main-site">


    <div id="top-sale">
        <div class="container py-5 flex-column-align_center" style="margin-top:150px;">
            <h4 class="abt pop head">
                About Us
            </h4>
            <div class="logo-img">
                <img src="assets\products\logo.png" alt="logo">
            </div>

            <div class="text-one flex-column-align_center">
                <p>Welcome to Cleckhuddersfax Click 'N Pick, your number one source for all things like meats, bakery
                    items, foreign fruits, sea food, sea vegetables and so on. We're dedicated to giving you the very
                    best of product, with a focus on three characteristics, ie: dependability, customer service and
                    uniqueness.</p>


                <div class="abt-layout flex-row-align_center-justify_space_between">
                    <div class="left-about">
                        <img src="assets\Images\Blueberry.jpg" alt="image">
                    </div>

                    <div class="right-about">
                        <p>Online purchasing has become the easy way to shop for so many products, for everybody. With
                            the extension of services to include collection facilities, it is simpler and safer to order
                            from home. Convenient, contactless shopping has never been more important. For many people,
                            Cleckhuddersfac Click 'N Pick are vastly preferable to attending physical stores to shop.
                        </p>
                    </div>
                </div>

                <div class="abt-layout flex-row-align_center-justify_space_between">
                    <div class="left-about">
                        <p>We hope you enjoy our products as much as we enjoy offering them to you. If you have any
                            questions or comments, please don't hesitate to contact us.</p>
                    </div>

                    <div class="right-about">
                        <img src="assets\Images\cookies.jpg" alt="image">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- img -->
    <div class="pano-img">
    </div>
    <!-- img -->

    <!-- special price -->

    <div id="top-sale">
        <div class="container py-5 flex-column-align_center">
            <h4 class="abt pop head" id="contact">
                Contact
            </h4>

            <div class="contact-container">

                <div class="contact-form-body">
                    <form action="" method="post" class="form-details">
                        <label for="name" style="font-size: 30px;">Full Name</label>
                        <input style="margin: 20px 10px;height: 50px;width: 80%;" type="text" name="name" id="name"
                            value="<?php if (isset($name)) echo $name; ?>"><br>
                        <div class="msg name1-msg">
                            <?php
                    if (isset($error['name']))
                        echo $error['name'];
                    ?>
                        </div>

                        <label for="email" style="font-size: 30px;">Email Address</label>
                        <input style="margin: 20px 10px;height: 50px;width: 80%;" type="email" name="email" id="email"
                            value="<?php if (isset($email)) echo $email; ?>"><br>
                        <div class="msg email1-msg">
                            <?php
                    if (isset($error['email']))
                        echo $error['email'];
                    ?>
                            <label style="font-size: 30px;" for="message">Message</label>

                        </div>

                        <textarea style="margin: 20px 10px;" name="message" id="message" cols="30" rows="10"
                            class="message"><?php if (isset($message)) echo $message; ?></textarea>
                        <div class=" msg message1-msg">
                            <?php
                    if (isset($error['message']))
                        echo $error['message'];
                    ?>
                        </div>

                        <input type="submit" name="submit" value="Submit" class="contact-submit"
                            style="font-size: 30px;margin-bottom: 50px;padding:20px 10px;"><br>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- special price -->


</main>

<?php 

include ('php/_footer.php');


?>