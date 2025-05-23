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
        <img    srcset="{{ asset('images/content/' . $data['content']['img_main']) }} 1920w,
                        {{ $data['content']['img_main_430'] ? asset('images/content/' . $data['content']['img_main_430']) : asset('images/content/' . $data['content']['img_main']) }}, 430w"
                src="{{ asset('images/content/' . $data['content']['img_main']) }}" 
                width="545"
                height="980"
                alt=""
                title="" 
                class="property__hunter__img">

        <div class="hunter__content">
            {!! $data['content']['h2_main'] !!}
            {!! $data['content']['p_main'] !!}
        </div>
    </section>  
    <!-- // Section Hunter -->

    <!-- Section Chasseur Cards -->
    <section class="chasseurCards">
        <div class="container">
            {!! $data['content']['h2_cards'] !!}
            <div class="chasseurCards__list">
                @foreach($data['content']->cards as $card)
                <div class="chasseurCards__item">
                    {!! $card->heading !!}
                    {!! $card->content !!}
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- // Section Market -->

    <!-- Section Supply -->
    <section class="supply">
        <div class="container">
            <div class="supply__inner">
                <div class="supply__logo__container">
                    <svg class="supply__logo" xmlns="http://www.w3.org/2000/svg" width="910" height="1204" viewBox="0 0 910 1204" fill="none">
                        <path d="M910 602.03C910 607.642 909.94 613.194 909.761 618.746C905.881 762.03 851.911 892.716 764.746 994.149C654.358 1122.63 490.657 1204 307.97 1204C142.196 1204 -7.98517 1136.98 -116.698 1028.59C-118.041 1027.25 -118.108 1025.1 -116.86 1023.68L-91.3134 994.448L-36.92 932.081C-35.5159 930.471 -33.0315 930.426 -31.5526 931.967C-29.5656 934.038 -27.542 936.092 -25.4627 938.09C-22.6774 940.933 -19.8921 943.607 -17.052 946.222C-16.8884 946.372 -16.7422 946.541 -16.5834 946.697C-16.4485 946.829 -16.2988 946.955 -16.1492 947.104C-13.4627 949.672 -10.7761 952.179 -8.02982 954.567C-5.52237 956.776 -3.01492 958.985 -0.447754 961.194C1.58209 962.985 3.67166 964.776 5.7612 966.448C7.85077 968.239 10 969.97 12.1493 971.642C14.9552 973.97 17.8209 976.179 20.7463 978.448C23.5522 980.537 26.4179 982.687 29.2836 984.776C33.7015 988 38.2388 991.164 42.7761 994.269C118.418 1045.55 209.702 1075.46 307.97 1075.46C406.239 1075.46 497.463 1045.55 573.105 994.328C573.395 994.154 573.629 993.98 573.916 993.696C573.932 993.68 573.953 993.672 573.975 993.672C573.991 993.672 574.007 993.667 574.021 993.657C599.924 976.109 623.976 955.994 645.761 933.672C729.702 848.358 781.463 731.224 781.463 602.03C781.463 576.537 779.433 551.463 775.552 527.045C739.612 301.194 543.97 128.537 307.97 128.537C46.4776 128.537 -165.522 340.537 -165.522 602.03C-165.522 631.996 -162.747 661.346 -157.435 689.745C-156.905 692.579 -153.424 693.633 -151.385 691.594L215.325 324.884C216.736 323.473 219.025 323.473 220.436 324.884L596.52 701.027C597.931 702.438 597.931 704.726 596.52 706.137L509.928 792.728C508.517 794.14 506.229 794.14 504.818 792.728L220.436 508.346C219.025 506.935 216.737 506.935 215.325 508.346L-86.255 809.927C-86.9327 810.604 -87.8519 810.985 -88.8103 810.985H-116.985L-254.129 811.161C-255.632 811.163 -256.982 810.235 -257.508 808.827C-258.52 806.12 -259.508 803.376 -260.388 800.597C-282.179 738.448 -294 671.642 -294 602.03C-294 269.552 -24.5074 0 307.97 0C640.448 0 910 269.552 910 602.03Z" fill="url(#paint0_linear_438_6714)"/>
                        <path d="M282 780.748C282 778.752 280.382 777.134 278.386 777.134H155.345C153.349 777.134 151.731 778.752 151.731 780.748V924.924C151.731 926.919 153.349 928.537 155.345 928.537H278.386C280.382 928.537 282 926.919 282 924.924V780.748Z" fill="url(#paint1_linear_438_6714)"/>
                        <defs>
                          <linearGradient id="paint0_linear_438_6714" x1="-580.754" y1="-311.569" x2="1170.1" y2="1584.5" gradientUnits="userSpaceOnUse">
                            <stop offset="0.198761" stop-color="#DAB56B" stop-opacity="0"/>
                            <stop offset="0.492939" stop-color="#DAB56B"/>
                            <stop offset="0.803512" stop-color="#DAB56B" stop-opacity="0"/>
                          </linearGradient>
                          <linearGradient id="paint1_linear_438_6714" x1="-580.754" y1="-311.569" x2="1170.1" y2="1584.5" gradientUnits="userSpaceOnUse">
                            <stop offset="0.198761" stop-color="#DAB56B" stop-opacity="0"/>
                            <stop offset="0.492939" stop-color="#DAB56B"/>
                            <stop offset="0.803512" stop-color="#DAB56B" stop-opacity="0"/>
                          </linearGradient>
                        </defs>
                    </svg>
                </div> 
                <div class="supply__row">
                    <div class="supply__left__first">
                        <img    srcset="{{ asset('images/content/' . $data['content']['supply_img_1']) }} 1920w,
                                        {{ asset('images/content/' . $data['content']['supply_img_1_600']) }} 700w,
                                        {{ asset('images/content/' . $data['content']['supply_img_1_400']) }} 500w"
                                src="{{ asset('images/content/' . $data['content']['supply_img_1']) }}" 
                                width="750"
                                height="820"
                                alt="{{ $data['content']['supply_img_1_alt'] }}"
                                title="{{ $data['content']['supply_img_1_alt'] }}" 
                                class="supply__left__img">
                        {!! $data['content']['supply_h2_1'] !!}
                        {!! $data['content']['supply_p_1'] !!}
                    </div>
                    <div class="supply__right">
                        <img    srcset="{{ asset('images/content/' . $data['content']['supply_img_2']) }} 1920w,
                                        {{ asset('images/content/' . $data['content']['supply_img_2_600']) }} 700w,
                                        {{ asset('images/content/' . $data['content']['supply_img_2_400']) }} 500w"
                                src="{{ asset('images/content/' . $data['content']['supply_img_2']) }}" 
                                width="750"
                                height="820"
                                alt="{{ $data['content']['supply_img_1_alt'] }}"
                                title="{{ $data['content']['supply_img_1_alt'] }}" 
                                class="supply__right__img">
                        {!! $data['content']['supply_h2_2'] !!}
                        {!! $data['content']['supply_p_2'] !!}
                    </div>
                </div>
                <div class="supply__row">
                    <div class="supply__left__second">
                        <img    srcset="{{ asset('images/content/' . $data['content']['supply_img_3']) }} 1920w,
                                        {{ asset('images/content/' . $data['content']['supply_img_3_600']) }} 700w,
                                        {{ asset('images/content/' . $data['content']['supply_img_3_400']) }} 500w"
                                src="{{ asset('images/content/' . $data['content']['supply_img_3']) }}" 
                                width="750"
                                height="820"
                                alt="{{ $data['content']['supply_img_1_alt'] }}"
                                title="{{ $data['content']['supply_img_1_alt'] }}" 
                                class="supply__left__img">
                        {!! $data['content']['supply_h2_3'] !!}
                        {!! $data['content']['supply_p_3'] !!}
                    </div>
                    <div class="supply__right">
                        <img    srcset="{{ asset('images/content/' . $data['content']['supply_img_4']) }} 1920w,
                                        {{ asset('images/content/' . $data['content']['supply_img_4_600']) }} 700w,
                                        {{ asset('images/content/' . $data['content']['supply_img_4_400']) }} 500w"
                                src="{{ asset('images/content/' . $data['content']['supply_img_4']) }}" 
                                width="750"
                                height="820"
                                alt="{{ $data['content']['supply_img_1_alt'] }}"
                                title="{{ $data['content']['supply_img_1_alt'] }}" 
                                class="supply__right__img">
                        {!! $data['content']['supply_h2_4'] !!}
                        {!! $data['content']['supply_p_4'] !!}
                        @switch($data['content']->url_index)
                                @case('paris')
                                    @include('parts/prix-tables/prix-paris')
                                    @break
                                @case('91-essonne')
                                    @include('parts/prix-tables/prix-91-essone')
                                    @break
                                @case('92-hauts-de-seine')
                                    @include('parts/prix-tables/92-hauts-de-seine')
                                    @break
                                @case('93-seine-saint-denis')
                                    @include('parts/prix-tables/93-seine-saint-denis')
                                    @break
                                @case('94-val-de-marne')
                                    @include('parts/prix-tables/94-val-de-marne')
                                    @break
                                @case('95-val-d-oise')
                                    @include('parts/prix-tables/95-val-d-oise')
                                    @break
                                @case('77-seine-et-marne')
                                    @include('parts/prix-tables/77-seine-et-marne')
                                    @break
                                @case('78-yvelines')
                                    @include('parts/prix-tables/78-yvelines')
                                    @break
                                @default
                                    
                            @endswitch
                        <p class="supply__table__discr">Source : Données MeilleursAgents, Notaire de France et Insee</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Section Supply -->

    <!-- Section chasseurAdvice -->
    <section class="chasseurAdvice">
        <div class="container">
            <div class="chasseurAdvice__header">
                <div class="property__content">
                    <h2 class="global__h2">{{ $data['content']['advice_h2_1']}}</h2>
                    <p class="global__description">{{ $data['content']['advice_description_1']}}</p>
                </div>
            </div>
            <div class="chasseurAdvice__row">
                <div class="chasseurAdvice__item">
                    {!! $data['content']['advice_h3_1'] !!}
                    {!! $data['content']['advice_p_1'] !!}
                </div>
                <div class="chasseurAdvice__item">
                    {!! $data['content']['advice_h3_2'] !!}
                    {!! $data['content']['advice_p_2'] !!}
                </div>
            </div>
            @if ($data['content']['advice_h2_2'])
                <div class="chasseurAdvice__top__img">
                    <div class="property__content">
                        <h2 class="global__h2">{{ $data['content']['advice_h2_2']}}</h2>
                        <p class="global__description">{{ $data['content']['advice_description_2']}}</p>
                    </div>
                </div>
            @endif
            <img    srcset="{{ asset('images/content/' . $data['content']['advice_img'] )}} 1920w,
                            {{ asset('images/content/' . $data['content']['advice_img_600'] )}} 700w,
                            {{ asset('images/content/' . $data['content']['advice_img_400'] )}} 500w"
                src="{{ asset('images/content/' . $data['content']['advice_img'] )}}" 
                width="1600"
                height="600"
                alt="{{ $data['content']['advice_img_alt'] }}"
                title="{{ $data['content']['advice_img_alt'] }}" 
                class="chasseurAdvice__img">
            <div class="chasseurAdvice__row">
                <div class="chasseurAdvice__item">
                    {!! $data['content']['advice_h3_3'] !!}
                    {!! $data['content']['advice_p_3'] !!}
                </div>
                <div class="chasseurAdvice__item">
                    {!! $data['content']['advice_h3_4'] !!}
                    {!! $data['content']['advice_p_4'] !!}
                </div>
                <div class="chasseurAdvice__item">
                    {!! $data['content']['advice_h3_5'] !!}
                    {!! $data['content']['advice_p_5'] !!}
                </div>
                <div class="chasseurAdvice__item">
                    {!! $data['content']['advice_h3_6'] !!}
                    {!! $data['content']['advice_p_6'] !!}
                </div>
            </div> 
        </div>
    </section>

    <!-- Slider widget -->
    @include('redesign/page_parts/review-slider')


    <!-- Section Overview -->
    <section class="overview">
        <div class="container">
            <div class="overview__header">
                <div class="property__content">
                    <h2 class="global__h2">{{ $data['content']['overview_h2']}}</h2>
                    <p class="overview__header__p">{{ $data['content']['overview_description']}}</p>
                </div>
            </div>
            <div class="chasseurAdvice__row">
                @for ($i = 1; $i <=14 ; $i++)
                    @if($data['content']['overview_h3_' . $i])
                        <div class="chasseurAdvice__item">
                            {!! $data['content']['overview_h3_' . $i] !!}
                            {!! $data['content']['overview_p_' . $i] !!}
                        </div>
                    @endif
                @endfor
            </div>
        </div>
    </section>

    <!-- Section Statistics -->
    {{-- <section class="statistic">
        <div class="container">
            <div class="statistic__inner">
                <h2 class="statistic__h2">{{ $data['content']['statistics_h2_1']}}</h2>
                <div class="statistic__content">
                    <div class="statistic__item">
                        {!! $data['content']['statistics_h3_1'] !!}
                        {!! $data['content']['statistics_p_1'] !!}
                    </div>
                    <div class="statistic__item">
                        {!! $data['content']['statistics_h3_2'] !!}
                        {!! $data['content']['statistics_p_2'] !!}
                    </div>
                    <div class="statistic__item">
                        {!! $data['content']['statistics_h3_3'] !!}
                        {!! $data['content']['statistics_p_3'] !!}
                    </div>
                </div>
                <h2 class="statistic__h2">{{ $data['content']['statistics_h2_2']}}</h2>
                <div class="statistic__content">
                    <div class="statistic__item__bottom">
                        {!! $data['content']['statistics_h3_4'] !!}
                        {!! $data['content']['statistics_p_4'] !!}
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

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

    <!-- Blog Widget Section -->
    @include('redesign/page_parts/blog-widget')
    
</main>
@endsection