const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a')
const nav_list = document.querySelector('.header .nav-bar .nav-list')
const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    mobile_menu.classList.toggle('active');
})


document.addEventListener('scroll', () => {
    var scroll_position = window.scrollY;
    if (scroll_position > 700) {
        header.style.backgroundColor = '#414345';
        nav_list.style.opacity = 1;
        hamburger.style.opacity = 1;
    } else {
        header.style.backgroundColor = 'transparent';
        nav_list.style.opacity = 0;
        hamburger.style.opacity = 0;
    }
})

menu_item.forEach((item) => {
    item.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        mobile_menu.classList.toggle('active');
    })
})