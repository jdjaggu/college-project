<?php 

include ('php/_header.php');

include ('database/_add-to-cart.php');
?>
<div class="container" id="search-products" style="margin-top: 160px;">

    <div class="flex-row-align_center">
        <input style="padding:12px 5px;width:70%;" type="text" placeholder="Search Product" id="search">
        </button>
    </div>

    <div id="display"></div>


    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <h3>Price</h3>
                <input type="hidden" id="hidden_minimum_price" value="0" />
                <input type="hidden" id="hidden_maximum_price" value="65000" />
                <p id="price_show">£ 100 - £ 10000</p>
                <div id="price_range"></div>
            </div>
        </div>
        <div class="col-md-9">
            <br />
            <div class="row filter_data">
            </div>
        </div>
    </div>
</div>
<style>
#loading {
    text-align: center;
    background: url('images/loading.gif') no-repeat center;
    height: 150px;
}
</style>
<script>
$(document).ready(function() {
    filter_data();

    function filter_data() {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        $.ajax({
            url: "fetch_data.php",
            method: "POST",
            data: {
                action: action,
                minimum_price: minimum_price,
                maximum_price: maximum_price
            },
            success: function(data) {
                $('.filter_data').html(data);
            }
        });
    }
    $('#price_range').slider({
        range: true,
        min: 100,
        max: 5000,
        values: [100, 5000],
        step: 100,
        stop: function(event, ui) {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });
});
</script>
</body>

</html>