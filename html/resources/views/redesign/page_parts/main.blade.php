<section    class="main
            {{ isset($data['main_slider']) && $data['main_slider'] ? 'overflow-unset' : '' }}" 
            style="background-image: url('{{ asset('images/content/' . $data['main_img']) }}')">

            <!-- Slider part -->
            @if(isset($data['main_slider']) && $data['main_slider'])
            <div class="main__slider--btn__wrapper" id="main__slider--btn__wrapper">
                <div class="main__slider--wrapper__img--holder">
                    <img    src="{{ asset('images/content/nosSecteurs_03.webp') }}"
                            width="290"
                            height="156"
                            alt="">
                </div>
                <div class="main__slider--wrapper__img--holder">
                    <img    src="{{ asset('images/content/nosSecteurs_02.webp') }}"
                            width="290"
                            height="156"
                            alt="">
                </div>
                <div class="main__slider--wrapper__img--holder">
                    <img    src="{{ asset('images/content/nosSecteurs_04.webp') }}"
                            width="290"
                            height="156"
                            alt="">
                    <div class="main__slider--wrapper__img--filter">
                        <span class="main__slider--wrapper__img--filter__num">12</span>
                        <span class="main__slider--wrapper__img--filter__text">more photos</span>
                    </div>
                </div>
            </div>
            <div class="main__slider--popUp" id="main__slider--popUp">
                <div class="main__slider--popUp__close" id="main__slider--popUp__close"></div>
                <div class="main__slider--popUp__slider" id="slick-slider">
                    <img src="{{ asset('images/content/nosSecteurs_03.webp') }}" alt="" class="main__slider--popUp__slide">
                    <img src="{{ asset('images/content/nosSecteurs_02.webp') }}" alt="" class="main__slider--popUp__slide">
                    <img src="{{ asset('images/content/nosSecteurs_04.webp') }}" alt="" class="main__slider--popUp__slide">
                    <img src="{{ asset('images/content/nosSecteurs_01.webp') }}" alt="" class="main__slider--popUp__slide">
                </div>
            </div>
            @endif
    
    <div class="container">
        <div    class="main__inner
                {{ isset($data['main_no_filter']) && $data['main_no_filter'] ? 'vh50' : '' }} 
                {{ $data['main_reverse'] ? 'active' : '' }}{{ isset($data['main_full_filter']) &&  $data['main_full_filter'] ? 'full-filter' : '' }}">
            @if(isset($data['main_form']) && $data['main_form'])
                @include('redesign/page_parts/main_form')
            @elseif(!isset($data['main_form']))
                @include('redesign/page_parts/main_form')
            @endif
            <div class="main__content">
                @if($data['main_preheading'])
                    <p class="main__p1">{!! $data['main_preheading'] !!}</p>
                @endif
                @if($data['main_heading'])
                    <p class="main__p2">{!! $data['main_heading'] !!}</p>
                @endif
                @if(isset($data['main_afterheading']) && $data['main_afterheading'])
                    <p class="main__p3">{!! $data['main_afterheading'] !!}</p>
                @endif
        
                <!-- Section Breadcrumbs -->
                @if(isset($data['breadcrumbs']) && $data['breadcrumbs'])
                    @include('redesign/page_parts/breadcrumbs')
                @endif
                
                <div class="main__content--filter {{ isset($data['main_no_filter']) && $data['main_no_filter'] ? 'display-none' : '' }}"></div>
            </div>
        </div>

    </div>
    @if(isset($data['main_arrow']) && $data['main_arrow'])
        <svg width="124" height="124" viewBox="0 0 124 124" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g>
            <path id="Vector" d="M39.5179 65.5039C39.85 65.1692 40.3001 64.9812 40.7694 64.9812C41.2387 64.9812 41.6889 65.1692 42.0209 65.5039L60.2503 83.898L60.2503 35.7873C60.2503 35.3133 60.4369 34.8587 60.769 34.5235C61.1012 34.1883 61.5516 34 62.0213 34C62.491 34 62.9415 34.1883 63.2736 34.5235C63.6057 34.8587 63.7923 35.3133 63.7923 35.7873L63.7923 83.898L82.0217 65.5039C82.3574 65.1882 82.8014 65.0163 83.2603 65.0245C83.7191 65.0326 84.1568 65.2202 84.4813 65.5477C84.8058 65.8751 84.9916 66.3169 84.9997 66.7799C85.0078 67.243 84.8375 67.6911 84.5247 68.0299L63.2728 89.4773C62.9407 89.812 62.4906 90 62.0213 90C61.552 90 61.1019 89.812 60.7698 89.4773L39.5179 68.0299C39.1863 67.6948 39 67.2405 39 66.7669C39 66.2932 39.1863 65.839 39.5179 65.5039Z" fill="#DAB56B"/>
            <rect x="0.775" y="0.775" width="122.45" height="122.45" rx="61.225" stroke="#DAB56B" stroke-width="1.55"/>
            </g>
        </svg>
    @endif
</section>