let reviewSlider = document.getElementById('reviewSlider')

if(reviewSlider) {

    /* Initializing */
    let sliderTrack = document.getElementById('reviewSlider__inner')
    let slides = sliderTrack.children
    let currentSlide = document.querySelector('.reviewSlider__slide.active')
    let currentSlideQueueNumber = Number(currentSlide.getAttribute('data-queue'))
    let nextButton = document.getElementById('reviewSlider__nextBtn')
    let prevButton = document.getElementById('reviewSlider__prevBtn')

    Array.prototype.forEach.call(slides, element => {
        let queueNum = element.getAttribute('data-queue')
        let elementId = 'reviewSlide_' + queueNum
        element.setAttribute('id', elementId)

        const dot = document.createElement('span')
        dot.classList.add('reviewSlider__dot')
        dot.setAttribute('data-queue', queueNum)
        let dotsWrapper = document.querySelector('#reviewSlider__dots--wrapper')

        if(element.classList.contains('active')) {
            dot.classList.add('active')
        }
        dotsWrapper.appendChild(dot)
    })

    if (currentSlideQueueNumber == 1) {
        var previousSlide = sliderTrack.childElementCount
        var nextSlide = currentSlideQueueNumber + 1
    } else if (currentSlideQueueNumber == sliderTrack.childElementCount) {
        var previousSlide = currentSlideQueueNumber - 1
        var nextSlide = 1
    } else {
        var previousSlide = currentSlideQueueNumber - 1
        var nextSlide = currentSlideQueueNumber + 1
    }

    nextButton.setAttribute('data-currentSlide', currentSlideQueueNumber)
    nextButton.setAttribute('data-nextSlide', nextSlide)
    nextButton.setAttribute('data-prevSlide', previousSlide)

    prevButton.setAttribute('data-currentSlide', currentSlideQueueNumber)
    prevButton.setAttribute('data-nextSlide', nextSlide)
    prevButton.setAttribute('data-prevSlide', previousSlide)

    nextButton.addEventListener("click", (event) => {
        nextButtonClick()
        setInnerHeight()
        handleDots()
    });

    prevButton.addEventListener("click", (event) => {
        prevButtonClick()
        setInnerHeight()
        handleDots()
    });

    function setInnerHeight() {
        let activeSlide = document.querySelector('.reviewSlider__slide.active')
        let offsetHeight = activeSlide.offsetHeight

        let inner = document.querySelector('#reviewSlider__inner')
        inner.style.minHeight = offsetHeight + 'px'
    }

    function handleDots() {
        let dots = document.querySelectorAll('.reviewSlider__dot')
        let activeSlide = document.querySelector('.reviewSlider__slide.active')
        let queueNum = activeSlide.getAttribute('data-queue')
        let newActiveDot = document.querySelector('.reviewSlider__dot[data-queue="' + queueNum + '"]')

        dots.forEach(element => {
            element.classList.remove('active')
        })
        newActiveDot.classList.add('active')
    }

    function nextButtonClick() {
        let currentPosition = getCurrentPosition();
        let preAfterPosition = getPreAfterSlides();
        let currentSlide = document.querySelector('[data-queue="' + currentPosition.current + '"]');
        let nextSlide = document.querySelector('[data-queue="' + currentPosition.next + '"]');
        let previousSlide = document.querySelector('[data-queue="' + currentPosition.previous + '"]');

        let prePreviousSlide = document.querySelector('[data-queue="' + preAfterPosition.prePreviousSlide + '"]');
        let afterNextSlide = document.querySelector('[data-queue="' + preAfterPosition.afterNextSlide + '"]');
    
        if (currentSlide && nextSlide && previousSlide) {
            currentSlide.classList.remove('active');
            currentSlide.classList.add('blurLeft');
            nextSlide.classList.add('active');
            nextSlide.classList.remove('blurRight')
            previousSlide.classList.remove('blurLeft');
            previousSlide.classList.add('invisible');
            prePreviousSlide.classList.remove('blurLeft');
            afterNextSlide.classList.remove('invisible');
            afterNextSlide.classList.add('blurRight')
        } else {
            // Handle the case where currentSlide or nextSlide is null
            console.log("Slide not found.");
        }

        handleButtonClick()
    }

    function prevButtonClick() {
        let currentPosition = getCurrentPosition();
        let preAfterPosition = getPreAfterSlides();
        let currentSlide = document.querySelector('[data-queue="' + currentPosition.current + '"]');
        let nextSlide = document.querySelector('[data-queue="' + currentPosition.next + '"]');
        let previousSlide = document.querySelector('[data-queue="' + currentPosition.previous + '"]');

        let prePreviousSlide = document.querySelector('[data-queue="' + preAfterPosition.prePreviousSlide + '"]');
        let afterNextSlide = document.querySelector('[data-queue="' + preAfterPosition.afterNextSlide + '"]');

        if (currentSlide && nextSlide && previousSlide) {
            currentSlide.classList.remove('active');
            currentSlide.classList.add('blurRight');
            nextSlide.classList.add('invisible');
            nextSlide.classList.remove('blurRight')
            previousSlide.classList.remove('blurLeft');
            previousSlide.classList.add('active');
            prePreviousSlide.classList.add('blurLeft');
            prePreviousSlide.classList.remove('invisible')
            afterNextSlide.classList.add('invisible');
            afterNextSlide.classList.remove('blurRight');
        } else {
            // Handle the case where currentSlide or nextSlide is null
            console.log("Slide not found.");
        }

        handleButtonClick()
    }

    function handleButtonClick() {
        
        let positions = getCurrentPosition()

        nextButton.setAttribute('data-currentSlide', positions.current)
        nextButton.setAttribute('data-nextSlide', positions.next)
        nextButton.setAttribute('data-prevSlide', positions.previous)

        prevButton.setAttribute('data-currentSlide', positions.current)
        prevButton.setAttribute('data-nextSlide', positions.next)
        prevButton.setAttribute('data-prevSlide', positions.previous)
    }

    function getCurrentPosition() {
        let positions = [];
        let currentSlide = document.querySelector('.reviewSlider__slide.active');
        let currentSlideQueueNumber = Number(currentSlide.getAttribute('data-queue'));
    
        let previousSlide, nextSlide;
    
        if (currentSlideQueueNumber === 1) {
            previousSlide = sliderTrack.childElementCount;
            nextSlide = currentSlideQueueNumber + 1;
        } else if (currentSlideQueueNumber === sliderTrack.childElementCount) {
            previousSlide = currentSlideQueueNumber - 1;
            nextSlide = 1;
        } else {
            previousSlide = currentSlideQueueNumber - 1;
            nextSlide = currentSlideQueueNumber + 1;
        }
    
        return positions = {
            'current': currentSlideQueueNumber,
            'previous': previousSlide,
            'next': nextSlide,
        }
    }

    function getPreAfterSlides() {
        let positions = [];

        let currentSlide = document.querySelector('.reviewSlider__slide.active');
        let currentSlideQueueNumber = Number(currentSlide.getAttribute('data-queue'));

        let prePreviousSlide, afterNextSlide;

        if(currentSlideQueueNumber === 1) {
            prePreviousSlide = sliderTrack.childElementCount - 1;
            afterNextSlide = currentSlideQueueNumber + 2;
            positions = {
                'prePreviousSlide': prePreviousSlide,
                'afterNextSlide': afterNextSlide,
            }
        } else if (currentSlideQueueNumber === sliderTrack.childElementCount) {
            prePreviousSlide = currentSlideQueueNumber - 2;
            afterNextSlide = 2;
            positions = {
                'prePreviousSlide': prePreviousSlide,
                'afterNextSlide': afterNextSlide,
            }
        } else if (currentSlideQueueNumber === 2) {
            prePreviousSlide = sliderTrack.childElementCount;
            afterNextSlide = currentSlideQueueNumber + 2
            positions = {
                'prePreviousSlide': prePreviousSlide,
                'afterNextSlide': afterNextSlide,
            }
        } else if (currentSlideQueueNumber === sliderTrack.childElementCount - 1) {
            prePreviousSlide = currentSlideQueueNumber - 2;
            afterNextSlide = 1;
            positions = {
                'prePreviousSlide': prePreviousSlide,
                'afterNextSlide': afterNextSlide,
            }
        } else {
            prePreviousSlide = currentSlideQueueNumber - 2;
            afterNextSlide = currentSlideQueueNumber + 2;
            positions = {
                'prePreviousSlide': prePreviousSlide,
                'afterNextSlide': afterNextSlide,
            }
        }
        return positions
    }
    
}

// cubic-bezier(.46,-0.5,.52,1.4)