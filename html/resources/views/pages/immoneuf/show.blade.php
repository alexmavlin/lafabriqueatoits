@extends('layouts/app')

@section('content')
<main>
    <!-- Main Section -->
    @include('parts/main')

    <!-- Section Breadcrumbs -->
    @include('parts/breadcrumbs-home')

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
                        <div class="content hunting__content--immo" style="font-family:'Times New Roman',serif;color:#000000;">
                            {!! $data['content']->h3_main !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="hunting__body">
                <ul>
                    <li>
                        {!! $data['content']->content_main !!}
                    </li>
                </ul>
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
            </div>
        </div>
    </section>

    <!-- Section Hunting -->
    <section class="hunting">
        <h2 class="section__h2--red">{!! $data['content']->h2_content !!}</h2>
        <p class="section__description">{!! $data['content']->p_content !!}</p>
        <div class="container">
            <div class="hunting__body">
                <ul>
                    {!! $data['content']->content_2 !!}
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
                <a  href="{{ route('investissementLocatifParisIleDeFrance') }}" 
                    class="btn-primary" 
                    title="service investissement locatif Paris et Ile de France">
                    Découvrez notre service pour l'Investissement Locatif
                </a>
            </div>
        </div>
    </section>

    @if (count($data['habitations']))
    <section class="housing__widget">
        <h2 class="section__h2--red">{!! $data['content']->dpt_name !!}</h2>
        <p class="section__description">DES PROGRAMMES NEUFS À PARIS SÉLECTIONNÉS POUR VOUS !</p>
        <div class="container">
            <a href="{{ route('immobilierNeufIleDeFrance') }}" class="btn-primary housing__widget--link">Tous nos programmes neufs en Ile de France</a>
            <div class="housing__widget--inner" style="margin-top:60px;">
                @foreach ($data['habitations'] as $habitation)
                    <div class="filter__item">
                        <article>
                            <a  title="{{ $habitation->h1_title }}" 
                                href="{{ url('immobilier-neuf-ile-de-france/' .  $habitation->department->dpt_slug . '/programme-immobilier-appartement-neuf.php?programme=' . $habitation->slug . '&ville=' . $habitation->city ) }}">
                                <img    loading="lazy" 
                                        src="{{ asset($habitation->images()->where('is_first', 1)->first()->src) }}"
                                        alt="{{ $habitation->images()->where('is_first', 1)->first()->alt }}">
                                <div class="filter__backdrop"></div>
                                <ul>
                                    <li>{{ $habitation->type }}</li>
                                    @if (isset($habitation->devices))
                                        <li>{{ $habitation->devices }}</li>
                                    @endif
                                    @if (isset($habitation->delivery_date))
                                        <li>{{ $habitation->trimester }} {{ $habitation->delivery_date }}</li>
                                    @endif
                                </ul>
                            </a>
    
                            <div class="filter__item--content">
                                <a  title="{{ $habitation->h1_title }}"
                                    href="{{ url('immobilier-neuf-ile-de-france/' .  $habitation->department->dpt_slug . '/programme-immobilier-appartement-neuf.php?programme=' . $habitation->slug . '&ville=' . $habitation->city ) }}">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h3 class="title-sin_item">{{ $habitation->h1_title }}</h3>
                                </a>
                                <div class="filter__item--price">à partir de {{ $habitation->lots->first() ? number_format($habitation->lots->first()['price'], 2, ',', '.') : '' }} € TTC</div>
                                <p>{!! $habitation->mini_descreption !!}</p>
                                <ul class="filter__item--lots">
                                    @foreach($habitation->lots as $lot)
                                        <li>
                                            <i class="fas fa-door-open"></i>
                                            <span>T{{$lot->parts}}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>   
    @endif

    <!-- Section Hunting -->
    <section class="hunting" id="info" style="scroll-margin-top: 80px">
        <div class="container">
            <div class="hunting__header">
                <div class="hunting__header--row reverse">
                    <img    srcset="{{ asset('images/bg/' . $data['content']->img_content_3) }} 800w,
                            {{ asset('images/bg/' . $data['content']->img_content_3_430) }} 430w"
                            src="{{ asset('images/bg/' . $data['content']->img_content_3) }}" 
                            loading="lazy"
                            alt="{{ $data['content']->img_content_3_alt }}"
                            title="{{ $data['content']->img_content_3_alt }}"
                            class="hunting__header--img"
                            style="max-width:597px;">
                    <div class="hunting__header--content">
                        <h2>{!! $data['content']->h2_content_3 !!}</h2>
                        <div class="content">
                            {!! $data['content']->h3_content_3 !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="hunting__body noIconHunting hunting__body--immo__neuf">
                <ul>
                    <li>
                        {!! $data['content']->content_3 !!}
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Blog Widget -->
    @include('parts/blog-widget')
</main>
@endsection