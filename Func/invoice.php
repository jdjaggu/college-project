<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Page</title>
</head>

<body>
    <?php
    include '_header.php';
    ?>
    <div class="whole-invoice-container">
        <div class="invoice-container">
            <div class="invoice-top">
                <div class="invoice-left">
                    <h1>Cleckhuddersfax Click 'n Pick</h1>
                    <h2>Invoice To:</h2>
                    <h3>Customer Name</h3>
                    <h3>Address</h3>
                    <h3>Phone Number</h3>
                </div>
                <div class="invoice-right">
                    <!-- second column -->
                    <h1 class="invoice-heading">INVOICE</h1>
                    <div>
                        <div class="invoice-row">
                            <h3>Invoice# </h3>
                            <h3>123456</h3>
                        </div>
                        <div class="invoice-row">
                            <h3>Date</h3>
                            <h3>05/02/2022</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- second row -->
            <div class="invoice-table">
                <table>
                    <thead>
                        <th>S.N.</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Qty.</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Product 1</td>
                            <td>123.00</td>
                            <td>1</td>
                            <td>1555</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Product 2</td>
                            <td>1232</td>
                            <td>2</td>
                            <td>253</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Product 3</td>
                            <td>1232</td>
                            <td>3</td>
                            <td>12312</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Product 4</td>
                            <td>1232</td>
                            <td>6</td>
                            <td>173432</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Product 5</td>
                            <td>1232</td>
                            <td>5</td>
                            <td>173432</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="invoice-mid">
                <div class="invoice-left">
                    <h2>Thank You For Your Bussiness</h2>
                    <h2>Payment info:</h2>
                    <h3>Paypal</h3>
                    <h3>Name</h3>
                </div>
                <div class="invoice-right">
                    <div class="sales">
                        <h3 class="right-col">VAT%</h3>
                        <h3>13</h3>
                    </div>
                    <div class="sales">
                        <h3 class="right-col">VAT Amount</h3>
                        <h3>322</h3>
                    </div>
                    <div class="sales">
                        <h3 class="right-col">Discount</h3>
                        <h3>200</h3>
                    </div>
                    <div class="total sales">
                        <h2 class="right-col">Total</h2>
                        <h2>2323</h2>
                    </div>
                </div>
            </div>
            <div class="invoice-bottom">
                <div class="invoice-left">
                    <h3>Terms and Conditions</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In quod sit atque eum ipsa consequuntur
                        quidem sunt fuga ipsam iusto!</p>
                </div>
                <div class="invoice-right">
                    <hr>
                    <h3>Authorized Signature</h3>
                </div>
            </div>
        </div>
    </div>
    <?php
    include '_footer.php';
    ?>
</body>

</html>