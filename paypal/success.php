<?php  
session_start();
if(isset($_SESSION['current_user_id'])){
    $userid =  $_SESSION['current_user_id'];

} 

if(isset($_SESSION['price_for_payment'])){
    $price_save =  $_SESSION['price_for_payment'];
} 

date_default_timezone_set('Asia/Kathmandu');
$date = date("d/m/Y");
    include 'connection.php';
    $sql = "INSERT INTO PAYMENT VALUES(SEQ_PAYMENT_NUMBER.NEXTVAL,$price_save,'$date',$userid)";
    $query = oci_parse($connection,$sql);
    oci_execute($query);     
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>

    <!-- FONT AWESOME ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <style>
    /* FOR PAYPAL PAYMENT */
    @import url("https://fonts.googleapis.com/css2?family=Lato&family=Nunito:wght@300&display=swap");

    body {
        font-family: 'Nunito', sans-serif;
    }

    *>* {
        margin: 0%;
        padding: 0%;
    }

    .container {
        width: 80%;
        margin: auto;
    }

    @media screen and (max-width: 768px) {
        .container {
            width: 100%;
        }
    }

    .text-center {
        padding-top: 100px;
        text-align: center;
    }

    .text-white {
        color: white;
    }

    .text-gray {
        color: #e9ecef;
    }

    .font-title {
        font-family: 'Lato', sans-serif;
    }


    main#cart-main .site-title h1 {
        margin: 2em 0em;
    }

    main#cart-main .container>.grid {
        display: -ms-grid;
        display: grid;
        -ms-grid-columns: 3fr 1fr;
        grid-template-columns: 3fr 1fr;
        margin: 0 2rem;
    }

    main#cart-main .container>.grid>.col-1>.item {
        border-top: 1px solid #e9ecef;
        border-bottom: 1px solid #e9ecef;
        padding: 1.5em 3em;
    }

    main#cart-main .container>.grid>.col-1>.item .img img {
        width: 60%;
    }

    main#cart-main .container>.grid>.col-1>.item .buttons {
        margin-top: 1em;
    }

    main#cart-main .container>.grid>.col-1>.item .buttons input {
        padding: .3rem .2rem;
        border: 1px solid #e9ecef;
        width: 20%;
        text-align: center;
    }

    main#cart-main .container>.grid>.col-1>.item .buttons input:focus {
        outline: none;
    }

    main#cart-main .container>.grid>.col-1>.item .buttons button {
        background-color: transparent;
        border: 1px solid #e9ecef;
        padding: .3em .3em;
        margin-bottom: .8rem;
    }

    main#cart-main .container>.grid>.col-1>.item a {
        text-decoration: none;
        color: #fca311;
    }

    main#cart-main .container>.grid>.col-1>.item .price {
        color: #ef476f;
    }

    main#cart-main .container>.grid>.col-2 .subtotal {
        border: 1px solid #e9ecef;
        padding: 1em 2.4em;
        margin: 0 2rem;
    }

    main#cart-main .container>.grid>.col-2 .subtotal>h3 {
        margin-bottom: 1rem;
    }

    main#cart-main .container>.grid>.col-2 .subtotal ul hr {
        border: 1px solid #e9ecef;
        margin: .3rem 0;
    }

    main#cart-main .container>.grid>.col-2 .subtotal ul li {
        padding: .2rem 0;
    }

    main#cart-main .flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    main#cart-main .justify-content-between {
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    main#cart-main .text-red {
        color: #ef476f;
    }
    </style>

</head>

<body>
    <main id="cart-main">

        <div class="site-title text-center">
            <div><img src="assets\Images\checked.png>" alt=""></div>
            <h1 class="font-title">Payment Done Successfully...!</h1>
            <h1 class="font-title"><a href="../customer_homepage.php">Return to Seller</a></h1>
        </div>
    </main>

</body>

</html>