@extends('layouts/app')

@section('content')
<main>
    <!-- Main Section -->
    @include('parts/main')

    <!-- Section Breadcrumbs -->
    @include('parts/breadcrumbs')

    <!-- Section Hunting -->
    <section class="hunting">
        <div class="container">
            <div class="hunting__header">
                <div class="hunting__header--row reverse">
                    <img    srcset="{{ asset('images/bg/' . $data['content']->img_main) }} 800w,
                            {{ asset('images/bg/' . $data['content']->img_main_430) }} 430w"
                            src="{{ asset('images/bg/' . $data['content']->img_main) }}" 
                            loading="lazy"
                            alt="{{ $data['content']->img_main_title }}"
                            title="{{ $data['content']->img_main_title }}"
                            class="hunting__header--img">
                    <div class="hunting__header--content">
                        <h1 class="hunting__header--chasseur" style="color: #e3546d;font-size: 26px;font-weight: 500;font-family: Playfair Display,Times New Roman,serif;margin-bottom: 15px;max-width: 597px;width: 100%;">{!! $data['content']->h2_main !!}</h1>
                        <div class="content hunting__content--chasseurs">
                            {!! $data['content']->p_main !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax section #1 -->
    <section class="parallax" data-scrollax-parent="true">
        <div    class="parallax__parallax-window"
                data-scrollax="properties: { translateY: '30%' }"
                style="background-image:url('{{ asset('img/content/bg/' . $data['content']->parallax1_img) }}')">
        </div>
        <div class="backdrop__filter--darken__parallax"></div>
        <p class="parallax__heading">{!! $data['content']->parallax1_heading !!}</p>
        <div class="container">
            <div class="parallax__inner">
                <p class="parallax__text">{!! $data['content']->parallax1_p !!}</p>
                <button  class="btn-primary contact_btn">
                    Contactez-Nous
                </button>
                <p class="parallax__ps">{!! $data['content']->parallax1_desc !!}</p>
            </div>
        </div>
    </section>

    <!-- Section Hunting -->
    <section class="hunting">
        <h2 class="section__h2--red section__h2--chasseur">{!! $data['content']->h2_content !!}</h2>
        <p class="section__description">{!! $data['content']->p_content !!}</p>
        <div class="container">
            <div class="hunting__body noIconHunting">
                <ul>
                    @for ($i = 1; $i <= 10; $i++)
                        @if($data['content']->{'h3_content_' . $i})
                        <li>
                            <h3 class="hunting__h3--header__chasseur">{!! $data['content']->{'h3_content_' . $i} !!}</h3>
                            {!! $data['content']->{'p_content_' . $i} !!}
                        </li>
                        @endif
                    @endfor
                </ul>
            </div>
        </div>
    </section>

    <!-- Parallax section #2 -->
    <section class="parallax" data-scrollax-parent="true">
        <div    class="parallax__parallax-window"
                data-scrollax="properties: { translateY: '30%' }"
                style="background-image:url('{{ asset('img/content/bg/' . $data['content']->parallax2_img) }}')">
        </div>
        <div class="backdrop__filter--darken__parallax"></div>
        <p class="parallax__heading">{!! $data['content']->parallax2_heading !!}</p>
        <div class="container">
            <div class="parallax__inner">
                <p class="parallax__text">{!! $data['content']->parallax2_p !!}</p>
                <a href="{{ route('acheterAppartementParisIleDeFrance') }}" class="btn-primary">
                    + Service Chasseur Immobilier
                </a>
            </div>
        </div>
    </section>

    <!-- Section Cards -->
    <section class="question__cards">
        <h2 class="section__h2--red section__h2--chasseur">{!! $data['content']->h2_cards !!}</h2>
        <p class="section__description">{!! $data['content']->p_cards !!}</p>
        <div class="container">
            <div class="question__cards--inner">
    
                @foreach($data['content']->cards as $card)
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        {!! $card->icon !!}
                        <div class="question__cards--card__heading" style="font-weight: 600;color: #144273;font-size: 16px;padding-bottom: 10px;display: flex;justify-content: space-between;">{!! $card->heading !!}</div>
                    </div>
                    <p class="question__cards--card__content">{!! $card->content !!}</p>
                </div>
                @endforeach
    
            </div>
        </div>
    </section>

    <!-- Section Hunting -->
    <section class="hunting">
        <div class="container">
            <div class="hunting__body">
                <ul>
                    @for ($i = 11; $i <= 20; $i++)
                        @if ($data['content']->{'h3_content_' . $i})
                            <li>
                                {!! $data['content']->{'icon_content_' . $i} !!}
                                {!! $data['content']->{'h3_content_' . $i} !!}
                                {!! $data['content']->{'p_content_' . $i} !!}
                            </li>
                        @endif
                    @endfor
                </ul>
            </div>
        </div>
    </section>

    <!-- Parallax section #3 -->
    <section class="parallax" data-scrollax-parent="true">
        <div    class="parallax__parallax-window"
                data-scrollax="properties: { translateY: '30%' }"
                style="background-image:url('{{ asset('img/content/bg/' . $data['content']->parallax3_img) }}')">
        </div>
        <div class="backdrop__filter--darken__parallax"></div>
        <p class="parallax__heading">{!! $data['content']->parallax3_heading !!}</p>
        <div class="container">
            <div class="parallax__inner">
                <p class="parallax__text">{!! $data['content']->parallax3_p !!}</p>
                <a  href="{{ route('equipeChasseurMaisonAppartementIleDeFrance') }}" 
                    class="btn-primary" 
                    title="Contact chasseur immobilier">
                    Découvrez notre Réseau
                </a>
            </div>
        </div>
    </section>

    @if ($data['content']->url_index === 'paris-IDF')
        @include('parts/cities')
    @endif

    <!-- Section Price Table -->
    @if($data['content']->h2_items)
    <section class="hunting">
        <div class="container">
            <div class="hunting__header">
                <div class="hunting__header--row reverse">
                    <img    srcset="{{ asset('images/bg/' . $data['content']->img_items) }} 800w,
                            {{ asset('images/bg/' . $data['content']->img_items_430) }} 430w"
                            src="{{ asset('images/bg/' . $data['content']->img_items) }}" 
                            loading="lazy"
                            alt="{{ $data['content']->img_items_title }}"
                            title="{{ $data['content']->img_items_title }}"
                            class="hunting__header--img"
                            style="max-width:597px;">
                    <div class="hunting__header--content">
                        <h2 class="hunting__header--chasseur" style="font-weight:600;">{!! $data['content']->h2_items !!}</h2>
                        <p style="color:#1f2c6e;font-size:14px;font-weight:500;">{!! $data['content']->p_items !!}</p>
                        <div class="content">
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
                            <p style="font-style:italic; margin-top:10px;">{!! $data['content']->p_items_src !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Parallax section #4 -->
    @if($data['content']->parallax4_heading)
    <section class="parallax" data-scrollax-parent="true">
        <div    class="parallax__parallax-window"
                data-scrollax="properties: { translateY: '30%' }"
                style="background-image:url('{{ asset('img/content/bg/' . $data['content']->parallax4_img) }}')">
        </div>
        <div class="backdrop__filter--darken__parallax"></div>
        <p class="parallax__heading">{!! $data['content']->parallax4_heading !!}</p>
        <div class="container">
            <div class="parallax__inner">
                <p class="parallax__text">{!! $data['content']->parallax4_p !!}</p>
            </div>
        </div>
    </section>
    @endif

    <!-- Section FAQ's -->
    @if (count($data['content']->faqs))
    <section class="faq" id="faq">
        <h2 class="section__h2--red section__h2--chasseur">{!! $data['content']->h2_faq !!}</h2>
        <p class="section__description">{!! $data['content']->p_faq !!}</p>
        <div class="container">
            @foreach ($data['content']->faqs as $faq)
                <div class="faq__inner">
                    <h3>{!! $faq->main_title !!}</h3>
                    @for ($i = 1; $i <= 10; $i++)
                        @if ($faq->{'h4_title_' . $i})
                            <div class="faq__tab">
                                <h4 class="faq__tab--heading">{!! $faq->{'h4_title_' . $i} !!}</h4>
                                <div class="faq__tab--content">{!! $faq->{'content_' . $i} !!}</div>
                            </div>
                        @endif
                    @endfor
                </div>
            @endforeach
        </div>
    </section>
    @endif

    <!-- Slider -->
    @if($data['slider'])
        @include('parts/slider')
    @endif

    <!-- Blog Widget -->
    @include('parts/blog-widget')
</main>
@endsection