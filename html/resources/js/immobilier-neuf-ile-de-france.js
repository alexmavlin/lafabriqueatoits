

    let formTop = document.querySelector('#searchForm__top')

    if(formTop) {
        let svg = document.querySelectorAll('#searchForm__top > svg')
        svg.forEach((element) => {
            element.addEventListener("click", function() {
                svg.forEach((element) => {
                    element.classList.remove('active')
                })
                element.classList.add('active')
            })
        })
    }

    let searchWidget = document.querySelector('#searchForm__widget');

    if (searchWidget) {
      let thumbnailView = document.querySelector('#thumbnail-view');
      let rowView = document.querySelector('#row-view');

      thumbnailView.addEventListener("click", function() {
        fadeOut(searchWidget, function() {
          searchWidget.style.flexDirection = "row";
          searchWidget.classList.remove('column');
          searchWidget.classList.add('row');
          fadeIn(searchWidget);
        });
      });

      rowView.addEventListener("click", function() {
        fadeOut(searchWidget, function() {
          searchWidget.style.flexDirection = "column";
          searchWidget.classList.remove('row');
          searchWidget.classList.add('column');
          fadeIn(searchWidget);
        });
      });
    }

    let searchBarBtn = document.querySelector('#search-bar-btn')

    if (searchBarBtn) {
        let sideBar = document.querySelector('#earchForm__sidebar--wrapper')
        searchBarBtn.addEventListener("click", function() {
            let body = document.querySelector('body')
            let closeBtn = document.querySelector('#searchForm__close')
            fadeIn(sideBar)
            sideBar.style.pointerEvents = "all"
            body.classList.toggle('noScroll')

            closeBtn.addEventListener("click", function() {
              fadeOut(sideBar)
              sideBar.style.pointerEvents = "none"
              body.classList.toggle('noScroll')
            })
        })
    }

    let priceRangePicker = document.querySelector('#searchForm__rangeGroup')

    if (priceRangePicker) {
        let rangeInput = document.querySelectorAll('#searchForm__rangeGroup > input')
        let progress = document.querySelector('#searchForm__sliderTrack--progress')
        
        let minValSpan = document.querySelector('#searchForm__rangeGroup--minValue')
        let maxValSpan = document.querySelector('#searchForm__rangeGroup--maxValue')
        
        minValSpan.textContent = '€ ' + parseInt(rangeInput[0].value).toLocaleString({style: 'decimal', useGrouping: true, maximumFractionDigits: 0})
        maxValSpan.textContent = '€ ' + parseInt(rangeInput[1].value).toLocaleString({style: 'decimal', useGrouping: true, maximumFractionDigits: 0})

        let minVal = parseInt(rangeInput[0].value)
        let maxVal = parseInt(rangeInput[1].value)
        progress.style.left = (minVal / rangeInput[0].max) * 100 + "%"
        progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%"

        rangeInput.forEach(input => {

            input.addEventListener("input", (e) => {
                let minVal = parseInt(rangeInput[0].value),
                maxVal = parseInt(rangeInput[1].value)

                let priceGap = 100000

                if(maxVal - minVal < priceGap) {
                    if(e.target.className === "range-min") {
                        rangeInput[0].value = maxVal - priceGap
                    } else {
                        rangeInput[1].value = minVal + priceGap
                    }
                } else {
                    progress.style.left = (minVal / rangeInput[0].max) * 100 + "%"
                    progress.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%"
                }

                minValSpan.textContent = '€ ' + parseInt(rangeInput[0].value).toLocaleString({style: 'decimal', useGrouping: true, maximumFractionDigits: 0})
                maxValSpan.textContent = '€ ' + parseInt(rangeInput[1].value).toLocaleString({style: 'decimal', useGrouping: true, maximumFractionDigits: 0})
            })
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