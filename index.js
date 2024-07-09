$(document).ready(function () {

    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 6500,
        autoplaySpeed: 2400,
        autoplayHoverPause: true
    })

    $("#banner-area-customer .owl-carousel").owlCarousel({
        items: 1
    })

    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 9500,
        responsive: {
            0: {
                items: 1 //if window size is greater than 0 less than 600 then 1 item will be shown 
            },
            600: {
                items: 3 //3 items will be shown
            },
            1000: {
                items: 5 //6 itesm will be shown
            }
        }
    })

    $("#new-arrival .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 9500,
        responsive: {
            0: {
                items: 1 //if window size is greater than 0 less than 600 then 1 item will be shown 
            },
            600: {
                items: 3 //3 items will be shown
            },
            1000: {
                items: 4 //6 itesm will be shown
            }
        }
    })

    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 9500,
        responsive: {
            0: {
                items: 1 //if window size is greater than 0 less than 600 then 1 item will be shown 
            },
            600: {
                items: 3 //3 items will be shown
            },
            1000: {
                items: 5 //6 itesm will be shown
            }
        }
    })


    // isotope filter

    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    //filter itesm on button 

    $(".button-group").on("click", "button", function () {

        var filterValue = $(this).attr("data-filter");

        $grid.isotope({ filter: filterValue });
    })

    // product qty section 
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    // let $input = $(".qty .qty_input");

    // click on qty up button
    $qty_up.click(function (e) {
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if ($input.val() >= 1 && $input.val() <= 19) {
            $input.val(function (i, oldval) {
                return ++oldval;
            });
        }
    });

    // click on qty down button
    $qty_down.click(function (e) {
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if ($input.val() > 1 && $input.val() <= 20) {
            $input.val(function (i, oldval) {
                return --oldval;
            });
        }
    });

});




const header = document.querySelector('.header');
const offer = document.querySelector('.offer');
var lastScrollTop = 10;
var scroll1 = 10;

window.addEventListener('scroll', () => {
    var scrollTop = window.pageYOffset;
    if (scrollTop > lastScrollTop) {
        header.style.top = "-135px";
    }
    else {
        header.style.top = "30px";
    }

    lastScrollTop = scrollTop;
})

window.addEventListener('scroll', () => {
    var scroll2 = window.pageYOffset;
    if (scroll2 > scroll1) {
        offer.style.top = "-30px";
    }
    else {
        offer.style.top = "0px";
    }

    scroll1 = scroll2;
})

var listUser = document.querySelector('.list-user');

listUser.addEventListener('click', () => {
    listUser.classList.toggle('active');
})

window.addEventListener('mouseup', function (event) {
    if (event.target != listUser && event.target.parentNode != listUser) {
        listUser.classList.remove('active');
    }
})

function amount() {
    let amount_value = document.getElementById("amt-input").value;
    document.getElementById("amount").value = ++amount_value;
}



