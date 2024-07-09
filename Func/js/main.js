// Header hides when scrolling down and re-appears when scrolling up
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

// shows the lists when clicked on user icon on nav-bar
var listUser = document.querySelector('.list-user');

listUser.addEventListener('click', () => {
    listUser.classList.toggle('active');
})

window.addEventListener('mouseup', function (event) {
    if (event.target != listUser && event.target.parentNode != listUser) {
        listUser.classList.remove('active');
    }
})

//blur bg when clicked on forget password
// var signin_container = document.querySelector('.signin-container');
// var forget_pass = document.querySelector('.forget_pass');

// forget_pass.addEventListener('click', () => {
//     signin_container.classList.toggle('active-blur');
// })

// window.addEventListener('mouseup', function (event) {
//     if (event.target != forget_pass && event.target.parentNode != forget_pass) {
//         signin_container.classList.remove('active-blur');
//     }
// })

// function toggle() {
//     var blur = document.getElementById('blur');
//     blur.classList.toggle('active-blur');
// }