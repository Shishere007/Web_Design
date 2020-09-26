const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');


function click_on_hamburger() {
}
hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    mobile_menu.classList.toggle('active');
})

function click_on_item() {
}
if (window.matchMedia("(max-width:1200px)").matches) {
    menu_item.forEach((item) => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            mobile_menu.classList.toggle('active');
        })

    })
}

if (window.matchMedia("(min-width:1200px)").matches) {
    menu_item.forEach((item) => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('none');
            mobile_menu.classList.toggle('none');
        })
    })

}

// window.addEventListener('load', () => {
//     click_on_hamburger()
//     click_on_item()
// })
window.addEventListener('resize', () => {
    location.reload()
    // click_on_hamburger()
    // console.log(window.innerWidth)
    // if (window.innerWidth < 1200) {
    //     click_on_item()
    // }
})


function show_rest(id) {
    document.getElementById(id).children[1].style.opacity = "1";
    document.getElementById(id).children[1].style.height = "100%";
    document.getElementById(id).children[2].style.display = "none";
}

