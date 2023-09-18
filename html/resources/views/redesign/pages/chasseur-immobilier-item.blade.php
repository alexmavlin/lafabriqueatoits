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
                        {{ $data['content']['hunter_img_600'] ? asset('images/content/' . $data['content']['hunter_img_600']) : asset('images/content/' . $data['content']['hunter_img']) }}, 700w
                        {{ $data['content']['hunter_img_400'] ? asset('images/content/' . $data['content']['hunter_img_400']) : asset('images/content/' . $data['content']['hunter_img']) }}, 700w"
                src="{{ asset('images/content/' . $data['content']['hunter_img']) }}" 
                width="815"
                height="980"
                alt=""
                title="" 
                class="property__hunter__img">

        <div class="hunter__content">
            {!! $data['content']['hunter_h1'] !!}
            {!! $data['content']['hunter_p'] !!}
        </div>
    </section>  
    <!-- // Section Hunter -->

    <!-- Section Property -->
    <section class="chasseurItemProperty">
        <div class="container">
            @for ($i = 1; $i <= 5; $i++)
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

    <!-- Section Offer -->
    @if ($data['content']['page_type'] == 1)
        @include('redesign/page_parts/chasseur-offer-type1')
    @elseif ($data['content']['page_type'] == 2)
        @include('redesign/page_parts/chasseur-offer-type2')
    @endif
    <!-- // Section Offer -->

    @if($data['content']['page_type'] == 2)
        <!-- Section chasseurAdvice -->
        <section class="chasseurAdvice">
            <div class="container">
                <div class="chasseurAdvice__header">
                    <div class="property__content">
                        <h2 class="global__h2">{{ $data['content']['advice_h2_1']}}</h2>
                        {!! $data['content']['advice_description_1'] !!}
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
                </div> 
            </div>
        </section>
    @endif

    <!-- Section Statistics -->
    <section class="statistic">
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
            </div>
        </div>
    </section>

    <!-- Slider widget -->
    @include('redesign/page_parts/review-slider')

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