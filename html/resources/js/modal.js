if($('#modal__open').length) {
    let open = $('#modal__open')
    let close = $('#modal__close')
    let modal = $('#modal')
    let tab_btn = $('.modal__tabs--btn')
    let tabs = $('.modal__tab')

    $(open).on("click", function() {
        $(modal).toggleClass('active')
        $(document.body).toggleClass('noScroll')
    })
    $(close).on("click", function() {
        $(modal).removeClass('active')
        $(document.body).removeClass('noScroll')
    })
    $(tab_btn).on("click", function() {
        let link = $(this).attr('data-link')
        let tab = $(link)
        $(tab_btn).removeClass('active')
        $(this).addClass('active')
        $(tabs).removeClass('active')
        $(tab).addClass('active')
    })
}

if($('.contact_btn').length) {
    let open = $('.contact_btn')
    let close = $('#modal__close')
    let modal = $('#modal')
    let tab_btn = $('.modal__tabs--btn')
    let tabs = $('.modal__tab')

    $(open).on("click", function() {
        $(modal).toggleClass('active')
        $(document.body).toggleClass('noScroll')
    })
    $(close).on("click", function() {
        $(modal).removeClass('active')
        $(document.body).removeClass('noScroll')
    })
    $(tab_btn).on("click", function() {
        let link = $(this).attr('data-link')
        let tab = $(link)
        $(tab_btn).removeClass('active')
        $(this).addClass('active')
        $(tabs).removeClass('active')
        $(tab).addClass('active')
    })
}