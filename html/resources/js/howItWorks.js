let section = document.querySelector('#howItWorks')

if(section) {
    let tabs = document.querySelectorAll('.howItWorks__tab')

    tabs.forEach((element) => {
        element.addEventListener("click", function() {
            tabs.forEach((tab) => {
                tab.classList.remove('active')
            })
            element.classList.add('active')
        })
    })
    console.log(tabs)
}