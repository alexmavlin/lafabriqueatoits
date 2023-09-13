

if($('.lightgallery').length) {
    $('#lightgallery').slick({
        dots: true,
        centerMode: true,
        variableWidth: true,
        asNavFor: '#slider__modal',
    })
    $('#slider__modal').slick({
        slidesToShow: 1,
        centerMode: true,
    })

    $('.gal-link').on("click", function (e) {
        e.preventDefault()
        $('#slider__modal--wrapper').addClass('active')
        $('body').addClass('noScroll')
        setInterval(function() {
            $('#slider__modal > .slick-prev.slick-arrow').fadeOut(300)
            $('#slider__modal > .slick-next.slick-arrow').fadeOut(300)
        }, 7000)
    })
    $('#close_icon').on('click', function() {
        $('#slider__modal--wrapper').removeClass('active')
        $('body').removeClass('noScroll')
    })
    $('#slider__modal').on("mousemove", function() {
        $('#slider__modal > .slick-prev.slick-arrow').fadeIn(300)
        $('#slider__modal > .slick-next.slick-arrow').fadeIn(300)
    })

    $('#zoom_in').on("click", function() {
        if(!$(this).hasClass('inactive')) {
            $(this).addClass('inactive')
            $('#zoom_out').removeClass('inactive')
            $('#slider__modal > .slick-list').css('overflow', 'visible')
            $('.slider__modal--inner.slick-current.slick-active > .box-item > .slider__modal--img').css('transform', 'scale(1.5)')
            $('#slider__modal > .slick-prev.slick-arrow').css('opacity', '0').css('pointer-events', 'none')
            $('#slider__modal > .slick-next.slick-arrow').css('opacity', '0').css('pointer-events', 'none')
        }
    })
    $('#zoom_out').on("click", function() {
        if(!$(this).hasClass('inactive')) {
            $(this).addClass('inactive')
            $('#zoom_in').removeClass('inactive')
            $('#slider__modal > .slick-list').css('overflow', 'hidden')
            $('.slider__modal--img').css('transform', 'scale(1)')
            $('#slider__modal > .slick-prev.slick-arrow').css('opacity', '1').css('pointer-events', 'all')
            $('#slider__modal > .slick-next.slick-arrow').css('opacity', '1').css('pointer-events', 'all')
        }
    })
}