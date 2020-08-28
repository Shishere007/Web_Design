const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const nav_list = document.querySelector('.header .nav-bar .nav-list');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a')

const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    mobile_menu.classList.toggle('active');
})


// document.addEventListener('scroll', () => {
//     var scroll_position = window.scrollY;
//     if (scroll_position > 400) {
//         header.style.backgroundColor = '#29323c'
//     } else {
//         header.style.backgroundColor = 'transparent'
//     }
// })

if (window.matchMedia("(max-width:1200px)").matches) {
    menu_item.forEach((item) => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            mobile_menu.classList.toggle('active');
        })

    })
} else {
    console.log(document.getElementById("hamburger"))
    document.getElementById("hamburger").addEventListener('click', function () {
        console.log("abcd")
        hamburger.classList.toggle('active');
    })
}


function show_rest(id) {
    document.getElementById(id).children[1].style.opacity = "1";
    document.getElementById(id).children[1].style.height = "100%";
    document.getElementById(id).children[2].style.display = "none";
}

