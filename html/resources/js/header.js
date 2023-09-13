
let header = document.querySelector('#header')
let burger = document.querySelector('#burger')
let header_nav = document.querySelector('#header__nav')
let body = document.querySelector('body')

/* Fill Header on scroll */
if(header) {

    if(document.documentElement.scrollTop) {
        header.classList.add('fill')
    }

    window.onscroll = function () {
        if(document.documentElement.scrollTop) {
            if(!header.classList.contains('fill')) {
                header.classList.add('fill')
            }
        } else {
            header.classList.remove('fill')
        }
    }
}
/* // Fill Header on scroll */

/* Burger menu function */
if(burger) {
    burger.addEventListener("click", (event) => {
        burger.classList.toggle('active')
        header_nav.classList.toggle('active')
        body.classList.toggle('noScroll')
    })

    let header_links = document.querySelectorAll('.header__nav--link')
    header_links.forEach((element) => {
        element.addEventListener("click", (event) => {
            burger.classList.remove('active')
            header_nav.classList.remove('active')
            body.classList.remove('noScroll')
        })
    })
}
/* // Burger menu function */