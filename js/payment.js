var amountt = document.getElementById("t_amount").value;
console.log(amountt);
paypal.Buttons({
    style: {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: amountt
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("paypal/success.php")
        })
    },
    onCancel: function (data) {
        window.location.replace("paypal/Oncancel.php")
    }
}).render('#paypal-payment-button');