@extends('layouts/app')

@section('content')
<main>

    <!-- Main Section -->
    <section    class="main
                {{ isset($data['main_slider']) && $data['main_slider'] ? 'overflow-unset' : '' }}" 
                style="background-image: url('{{ asset('images/content/' . $data['main_img']) }}')">

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
                    @if ($data['breadcrumbs'] != false)
                        <nav class="breadcrumbs">
                            <ul class="breadcrumbs__ul">
                                <li><a title="Chasse immobilière Ile de France et Paris" href="{{ route('home') }}">La Fabrique à Toits</a></li>
                                @foreach ($data['breadcrumbs'] as $breadcrumb)
                                    @if ($breadcrumb['url'])
                                        <li>
                                            <a  href="{{ $breadcrumb['url']}}"
                                                title="{{ $breadcrumb['title']}}">
                                                {{ $breadcrumb['name'] }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </nav>
                    @endif
                    
                    <div class="main__content--filter {{ isset($data['main_no_filter']) && $data['main_no_filter'] ? 'display-none' : '' }}"></div>
                </div>
            </div>  
        
        </div>
    </section>

    <!-- Section Hunter -->
    <section class="hunter">
        <img    srcset="{{ asset('images/content/' . $data['content']['hunter_img']) }} 1920w,
                        {{ $data['content']['hunter_img_600'] ? asset('images/content/' . $data['content']['hunter_img_600']) : asset('images/content/' . $data['content']['img_main']) }}, 430w
                        {{ $data['content']['hunter_img_400'] ? asset('images/content/' . $data['content']['hunter_img_400']) : asset('images/content/' . $data['content']['img_main']) }}, 430w"
                src="{{ asset('images/content/' . $data['content']['img_main']) }}" 
                width="545"
                height="980"
                alt="{{ $data['content']['hunter_img_alt'] }}"
                title="{{ $data['content']['hunter_img_alt'] }}" 
                class="property__hunter__img">

        <div class="hunter__content">
            {!! $data['content']['hunter_h1'] !!}
            {!! $data['content']['hunter_p'] !!}
        </div>
    </section>  
    <!-- // Section Hunter -->

    <!-- Section Property -->
    <section class="chasseurItemProperty" style="padding-bottom: 120px;">
        <div class="container">
            @for ($i = 1; $i <= 2; $i++)
                @if ($data['content']['property_h2_' . $i])
                
                    <div class="chasseurItemProperty__content">
                        <h2 class="global__h2">{{ $data['content']['property_h2_' . $i] }}</h2>
                        {!! $data['content']['property_p_' . $i] !!}
                    </div>

                @endif
            @endfor
        </div>   
    </section>
    <!-- // Section Property -->

    <!-- Housing Widget Section -->
    @include('redesign/page_parts/housing_widget')

    <!-- Section Property -->
    <section class="chasseurItemProperty">
        <div class="container">
            <div class="chasseurItemProperty__content">
                <h2 class="global__h2">{{ $data['content']['property_h2_3'] }}</h2>
                {!! $data['content']['property_p_3'] !!}
            </div>
        </div>   
    </section>
    <!-- // Section Property -->

    <!-- Section Supply -->
    <section class="immoNeufSupply">
        <div class="container">
            <div class="immoNeufSupply__inner">
                <div class="immoNeufSupply__logo__container">
                    <svg class="immoNeufSupply__logo" xmlns="http://www.w3.org/2000/svg" width="950" height="997" viewBox="0 0 950 997" fill="none">
                    <path d="M1055 527.526C1055 532.444 1054.95 537.309 1054.79 542.174C1051.39 667.725 1004.1 782.239 927.722 871.119C830.995 983.697 687.552 1055 527.474 1055C382.365 1055 250.891 996.398 155.655 901.593C154.311 900.255 154.244 898.105 155.492 896.678L177.603 871.381L224.941 817.104C226.345 815.494 228.829 815.449 230.31 816.988C231.942 818.682 233.602 820.361 235.305 821.997C237.735 824.478 240.166 826.813 242.644 829.095C242.808 829.245 242.954 829.414 243.115 829.568C243.225 829.673 243.345 829.776 243.466 829.896C245.82 832.146 248.174 834.343 250.58 836.435C252.777 838.371 254.974 840.307 257.224 842.242C259.003 843.812 260.834 845.381 262.664 846.846C264.495 848.415 266.379 849.932 268.262 851.397C270.721 853.437 273.232 855.373 275.795 857.361C278.254 859.192 280.765 861.075 283.276 862.906C287.147 865.731 291.123 868.503 295.099 871.224C361.379 916.161 441.366 942.37 527.474 942.37C613.581 942.37 693.516 916.161 759.797 871.276C760.051 871.123 760.256 870.971 760.508 870.722C760.521 870.708 760.54 870.701 760.559 870.701C760.574 870.701 760.588 870.696 760.6 870.688C783.297 855.311 804.373 837.686 823.462 818.126C897.014 743.37 942.37 640.732 942.37 527.526C942.37 505.188 940.591 483.217 937.191 461.821C905.698 263.92 734.268 112.63 527.474 112.63C298.342 112.63 112.578 298.394 112.578 527.526C112.578 553.496 114.957 578.937 119.512 603.567C120.036 606.402 123.516 607.456 125.555 605.417L445.978 284.994C447.389 283.583 449.677 283.583 451.089 284.995L779.998 613.956C781.409 615.367 781.409 617.655 779.998 619.066L704.755 694.309C703.344 695.72 701.056 695.72 699.645 694.309L451.089 445.753C449.677 444.341 447.389 444.341 445.978 445.753L182.167 709.564C181.489 710.242 180.57 710.622 179.611 710.622H155.109L35.2458 710.776C33.7427 710.778 32.3928 709.85 31.8679 708.442C31.0189 706.163 30.1922 703.856 29.4523 701.52C10.358 647.062 0 588.523 0 527.526C0 236.194 236.142 0 527.474 0C818.806 0 1055 236.194 1055 527.526Z" fill="url(#paint0_linear_438_5542)"/>
                    <path d="M504.718 684.575C504.718 682.579 503.1 680.961 501.104 680.961H394.184C392.188 680.961 390.57 682.579 390.57 684.575V810.013C390.57 812.009 392.188 813.627 394.184 813.627H501.104C503.1 813.627 504.718 812.009 504.718 810.013V684.575Z" fill="url(#paint1_linear_438_5542)"/>
                    <defs>
                      <linearGradient id="paint0_linear_438_5542" x1="-251.267" y1="-273.011" x2="1282.91" y2="1388.41" gradientUnits="userSpaceOnUse">
                        <stop offset="0.198761" stop-color="#DAB56B" stop-opacity="0"/>
                        <stop offset="0.492939" stop-color="#DAB56B"/>
                        <stop offset="0.803512" stop-color="#DAB56B" stop-opacity="0"/>
                      </linearGradient>
                      <linearGradient id="paint1_linear_438_5542" x1="-251.267" y1="-273.011" x2="1282.91" y2="1388.41" gradientUnits="userSpaceOnUse">
                        <stop offset="0.198761" stop-color="#DAB56B" stop-opacity="0"/>
                        <stop offset="0.492939" stop-color="#DAB56B"/>
                        <stop offset="0.803512" stop-color="#DAB56B" stop-opacity="0"/>
                      </linearGradient>
                    </defs>
                  </svg>
                </div> 
                <div class="immoNeufSupply__row">
                    <div class="immoNeufSupply__left__first">
                        <img    srcset="{{ asset('images/content/' . $data['content']['supply_img_1']) }} 1920w,
                                        {{ asset('images/content/' . $data['content']['supply_img_600_1']) }} 700w,
                                        {{ asset('images/content/' . $data['content']['supply_img_400_1']) }} 500w"
                                src="{{ asset('images/content/' . $data['content']['supply_img_1']) }}" 
                                width="750"
                                height="820"
                                alt="{{ $data['content']['supply_img_alt_1'] }}"
                                title="{{ $data['content']['supply_img_alt_1'] }}" 
                                class="immoNeufSupply__img__1">
                        {!! $data['content']['supply_h2_1'] !!}
                        {!! $data['content']['supply_p_1'] !!}
                    </div>
                    <div class="immoNeufSupply__right">
                        <img    srcset="{{ asset('images/content/' . $data['content']['supply_img_2']) }} 1920w,
                                        {{ asset('images/content/' . $data['content']['supply_img_600_2']) }} 700w,
                                        {{ asset('images/content/' . $data['content']['supply_img_400_2']) }} 500w"
                                src="{{ asset('images/content/' . $data['content']['supply_img_2']) }}" 
                                width="790"
                                height="820"
                                alt="{{ $data['content']['supply_img_alt_2'] }}"
                                title="{{ $data['content']['supply_img_alt_2'] }}" 
                                class="immoNeufSupply__img__2">
                        {!! $data['content']['supply_h2_2'] !!}
                        {!! $data['content']['supply_p_2'] !!}
                    </div>
                </div>
                <div class="immoNeufSupply__row">
                    <div class="immoNeufSupply__left__second">
                        <img    srcset="{{ asset('images/content/' . $data['content']['supply_img_3']) }} 1920w,
                                        {{ asset('images/content/' . $data['content']['supply_img_600_3']) }} 700w,
                                        {{ asset('images/content/' . $data['content']['supply_img_400_3']) }} 500w"
                                src="{{ asset('images/content/' . $data['content']['supply_img_3']) }}" 
                                width="750"
                                height="540"
                                alt="{{ $data['content']['supply_img_alt_3'] }}"
                                title="{{ $data['content']['supply_img_alt_3'] }}" 
                                class="immoNeufSupply__img__3">
                        {!! $data['content']['supply_h2_3'] !!}
                        {!! $data['content']['supply_p_3'] !!}
                    </div>
                    <div class="immoNeufSupply__right">
                        <img    srcset="{{ asset('images/content/' . $data['content']['supply_img_4']) }} 1920w,
                                        {{ asset('images/content/' . $data['content']['supply_img_600_4']) }} 700w,
                                        {{ asset('images/content/' . $data['content']['supply_img_400_4']) }} 500w"
                                src="{{ asset('images/content/' . $data['content']['supply_img_4']) }}" 
                                width="790"
                                height="612"
                                alt="{{ $data['content']['supply_img_alt_4'] }}"
                                title="{{ $data['content']['supply_img_alt_4'] }}" 
                                class="immoNeufSupply__img__4">
                        {!! $data['content']['supply_h2_4'] !!}
                        {!! $data['content']['supply_p_4'] !!}
                    </div>
                </div>
                <div class="immoNeufSupply__row">
                    <div class="immoNeufSupply__left__second">
                        <img    srcset="{{ asset('images/content/' . $data['content']['supply_img_5']) }} 1920w,
                                        {{ asset('images/content/' . $data['content']['supply_img_600_5']) }} 700w,
                                        {{ asset('images/content/' . $data['content']['supply_img_400_5']) }} 500w"
                                src="{{ asset('images/content/' . $data['content']['supply_img_5']) }}" 
                                width="750"
                                height="660"
                                alt="{{ $data['content']['supply_img_alt_5'] }}"
                                title="{{ $data['content']['supply_img_alt_5'] }}" 
                                class="immoNeufSupply__img__5">
                        {!! $data['content']['supply_h2_5'] !!}
                        {!! $data['content']['supply_p_5'] !!}
                    </div>
                    <div class="immoNeufSupply__right">
                        <img    srcset="{{ asset('images/content/' . $data['content']['supply_img_6']) }} 1920w,
                                        {{ asset('images/content/' . $data['content']['supply_img_600_6']) }} 700w,
                                        {{ asset('images/content/' . $data['content']['supply_img_400_6']) }} 500w"
                                src="{{ asset('images/content/' . $data['content']['supply_img_6']) }}" 
                                width="790"
                                height="612"
                                alt="{{ $data['content']['supply_img_alt_6'] }}"
                                title="{{ $data['content']['supply_img_alt_6'] }}" 
                                class="immoNeufSupply__img__6">
                        {!! $data['content']['supply_h2_6'] !!}
                        {!! $data['content']['supply_p_6'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Section Supply -->

    <!-- Section Bank -->
    <section class="bank">
        <div class="container">
            <div class="bank__header">
                <div class="property__content">
                    <h2 class="global__h2">{{ $data['content']['bank_h2'] }}</h2>
                    <p class="global__description">{{ $data['content']['bank_description'] }}</p>
                </div>
            </div>
            <div class="bank__inner">
                <div class="bank__row">
                    @for ($i = 1; $i <= 14; $i++)
                        <div class="bank__item">
                            {!! $data['content']['bank_h3_' . $i] !!}
                            {!! $data['content']['bank_p_' . $i] !!}
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
    <!-- // Section Bank -->

    <!-- Section FAQ -->
    <section class="homePageFAQ" id="faq">
        <div class="container">
            <div class="homePageFAQ__inner">
                <h2 class="homePageFAQ__h2">Foire Aux Questions</h2>
                <?php $i = 1; ?>
                @foreach ($data['content']['faqs'] as $faq)

                    <div class="homePageFAQ__item">
                        <div class="homePageFAQ__item--icon__btn {{$i == 1 ? 'active' : '' }}"></div>
                        <h3 class="homePageFAQ__h3 {{$i == 1 ? 'active' : '' }}">{{ $faq['main_title'] }}</h3>
                        {!! $faq['content'] !!}
                    </div>
                    <?php $i++; ?>

                @endforeach
            </div>
        </div>
    </section>
    <!-- // Section FAQ -->

    <!-- Blog Widget Section -->
    @include('redesign/page_parts/blog-widget')

</main>
@endsection