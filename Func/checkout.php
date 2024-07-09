<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6d68a2fceb.js"></script>
    <title>Checkout</title>
</head>

<body>
    <form action="" method="post">
        <label>Contact Information</label><br>

        <!-- icon for email -->
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" placeholder="Email"><br>

        <!-- icon for phone -->
        <i class="fas fa-phone"></i>
        <input type="text" name="phone" placeholder="Phone"><br>

        <label>Collection Slots</label><br>

        <!-- Radio Buttons for day -->
        <label for="wed">WED</label>
        <input type="radio" name="day" value="wed" id="wed">

        <label for="thu">THU</label>
        <input type="radio" name="day" value="thu" id="thu">

        <label for="fri">FRI</label>
        <input type="radio" name="day" value="fri" id="fri"><br>

        <!-- Radio Buttons for Time -->
        <label for="10-1">10am - 1am</label>
        <input type="radio" name="day" value="10-1" id="10-1">

        <label for="1-3">1pm - 3pm</label>
        <input type="radio" name="day" value="1-3" id="1-3">

        <label for="3-7">3pm - 7pm</label>
        <input type="radio" name="day" value="3-7" id="3-7"><br>


        <label>Summary</label><br>
        <!-- products in checkout -->

        <label>Total</label><br>
        <!-- Total amount calculated -->


        <label>Payment Method</label><br>
        <button><img src="./images/paypal-logo.png" alt="PayPal" height="20px"></button>
        <!-- height for viewing only -->
    </form>
</body>

</html>