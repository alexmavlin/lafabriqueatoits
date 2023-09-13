let faq = document.querySelector('#faq')

if(faq) {
    let headers = document.querySelectorAll('.homePageFAQ__h3')
    let buttons = document.querySelectorAll('.homePageFAQ__item--icon__btn')

    headers.forEach((element) => {
        element.addEventListener("click", (event) => {

            let parent = element.closest('.homePageFAQ__item')
            let dom_parents_children = parent.children

            console.log(dom_parents_children)

            Array.prototype.forEach.call(dom_parents_children, element => {
                element.classList.toggle('active')
            })
        })
    })

    buttons.forEach((element) => {
        element.addEventListener("click", (event) => {

            let parent = element.closest('.homePageFAQ__item')
            let dom_parents_children = parent.children

            Array.prototype.forEach.call(dom_parents_children, element => {
                element.classList.toggle('active')
            })
        })
    })
}