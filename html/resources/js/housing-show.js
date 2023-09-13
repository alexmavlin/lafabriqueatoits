let sliderMain = document.querySelector('#main__slider--btn__wrapper')

if(sliderMain) {
    let sliderBtns = document.querySelectorAll('.main__slider--wrapper__img--holder > img')
    let popUp = document.querySelector('#main__slider--popUp')
    let popUpClose = document.querySelector('#main__slider--popUp__close')
    let body = document.querySelector('body')

    sliderBtns.forEach((img) => {
        img.addEventListener("click", function() {
            fadeIn(popUp)
            popUp.style.pointerEvents = "all"
            body.classList.toggle('noScroll')
        })
    })
    popUpClose.addEventListener("click", function() {
        fadeOut(popUp)
        popUp.style.pointerEvents = "none"
        body.classList.toggle('noScroll')
    })
    let slickSlider = document.querySelector('#slick-slider')
    $(slickSlider).slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    })
}


function fadeOut(elementToFadeOut, callback) {
    let opacity = 1;
    const fadeInterval = setInterval(function () {
      if (opacity > 0) {
        opacity -= 0.1;
        elementToFadeOut.style.opacity = opacity;
      } else {
        clearInterval(fadeInterval);
        if (callback) {
          callback(); // Call the callback function after fading out
        }
      }
    }, 15);
  }
  
  function fadeIn(elementToFadeIn) {
    let opacity = 0;
    const fadeInterval = setInterval(function () {
      if (opacity < 1) {
        opacity += 0.1;
        elementToFadeIn.style.opacity = opacity;
      } else {
        clearInterval(fadeInterval);
      }
    }, 15);
  }