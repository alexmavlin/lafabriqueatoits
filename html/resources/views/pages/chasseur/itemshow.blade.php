@extends('layouts/app')

@section('content')
<main>
    <!-- Main Section -->
    @include('parts/main')

    <!-- Section Breadcrumbs -->
    @include('parts/breadcrumbs')

    <!-- Section Hunting -->
    <section class="hunting" style="padding-top:30px;">
        <div class="container">
            <div class="hunting__header">
                <div class="hunting__header--row reverse">
                    <img    srcset="{{ asset('images/bg/chasseur-appartement-maison-min.webp') }} 800w,
                            {{ asset('images/bg/chasseur-appartement-maison-min_430.webp') }} 430w"
                            src="{{ asset('images/bg/chasseur-appartement-maison-min.webp') }}" 
                            loading="lazy"
                            alt="{{ $data['content']->img_main_title }}"
                            title="{{ $data['content']->img_main_title }}"
                            class="hunting__header--img">
                    <div class="hunting__header--content">
                        <h1 class="section__h2--chasseur" style="color: #e3546d;font-size: 26px;font-weight: 500;font-family: Playfair Display,Times New Roman,serif;margin-bottom: 15px;max-width: 597px;width: 100%;">{!! $data['content']->h2_main !!}</h1>
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
    @if($data['content']->main_content)
    <section class="hunting">
        <h2 class="section__h2--red section__h2--chasseur">{!! $data['content']->h2_content_1 !!}</h2>
        <p class="section__description">{!! $data['content']->h3_content_1 !!}</p>
        <div class="container">
            <div class="hunting__body noIconHunting">
                <ul>
                    <li>
                        {!! $data['content']->main_content !!}
                    </li>
                </ul>
            </div>
        </div>
    </section>
    @endif

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
                <a href="{{ route('acheterAppartementParisIleDeFrance') }}" class="btn-primary">+ Service Chasseur Immobilier</a>
            </div>
        </div>
    </section>

    <!-- Section Hunting -->
    @if($data['content']->arts_et_metiers_content)
    <section class="hunting">
        <h2 class="section__h2--red section__h2--chasseur">{!! $data['content']->h2_content_2 !!}</h2>
        <p class="section__description">{!! $data['content']->h3_content_2 !!}</p>
        <div class="container">
            <div class="hunting__body noIconHunting">
                <ul>
                    <li>
                        {!! $data['content']->arts_et_metiers_content !!}
                    </li>
                </ul>
            </div>
        </div>
    </section>
    @endif

    <!-- Parallax section #3 -->
    @if($data['content']->parallax3_img)
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
            </div>
        </div>
    </section>
    @endif

    <!-- Section Hunting -->
    @if($data['content']->enfants_rouges_content)
    <section class="hunting">
        <div class="container">
            <div class="hunting__body noIconHunting">
                <ul>
                    <li>{!! $data['content']->enfants_rouges_content !!}</li>
                </ul>
            </div>
        </div>
    </section>
    @endif

    <!-- Parallax section #3 -->
    @if($data['content']->parallax4_img)
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
                <a href="{{ route('equipeChasseurMaisonAppartementIleDeFrance') }}" class="btn-primary">
                    Découvrez notre Réseau
                </a>
            </div>
        </div>
    </section>
    @endif

    <!-- Section Hunting -->
    @if($data['content']->sainte_avoye_content)
    <section class="hunting lessPadding">
        <div class="container">
            <div class="hunting__body noIconHunting">
                <ul>
                    <li>{!! $data['content']->sainte_avoye_content !!}</li>
                </ul>
            </div>
        </div>
    </section>
    @endif

    <!-- Section Hunting -->
    @if($data['content']->archives_content)
    <section class="hunting lessPadding">
        <div class="container">
            <div class="hunting__body noIconHunting">
                <ul>
                    <li>{!! $data['content']->archives_content !!}</li>
                </ul>
            </div>
        </div>
    </section>
    @endif

    <!-- Section FAQ's -->
    @if (count($data['content']->faqs))
    <section class="faq" id="faq">
        <h2 class="section__h2--red">{!! $data['content']->h2_faq !!}</h2>
        <p class="section__description">{!! $data['content']->h3_faq !!}</p>
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

    <!-- Section Price Table -->
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
                            class="hunting__header--img section__items"
                            style="max-width:597px;">
                    <div class="hunting__header--content">
                        <h2>{!! $data['content']->h2_items !!}</h2>
                        <p style="color:#1f2c6e;font-weight:500;font-size:14px;">{!! $data['content']->h3_items !!}</p>
                        <div class="content">
                            @switch(explode('-', $data['content']->url_index)[0])
                                @case('paris')
                                    @include('parts/prix-tables/prix-paris')
                                    @break
                                @default
                                    @include('parts/prix-tables/92-hauts-de-seine')
                                    
                            @endswitch
                            <p style="font-style:italic; margin-top:10px;">{!! $data['content']->p_items_src !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Parallax section #3 -->
    <section class="parallax" data-scrollax-parent="true">
        <div    class="parallax__parallax-window"
                data-scrollax="properties: { translateY: '30%' }"
                style="background-image:url('{{ asset('img/content/bg/BM-demenagement-inclus-pack-chasse-immobiliere-min.webp') }}')">
        </div>
        <div class="backdrop__filter--darken__parallax"></div>
        <p class="parallax__heading">Service tout inclus : avec la Fabrique à Toits ça déménage</p>
        <div class="container">
            <div class="parallax__inner">
                <p class="parallax__text">Votre déménagement inclus dans notre service de chasse immobilière, acheter n’a jamais été aussi simple</p>
                {{-- <a  href="{{ route('equipeChasseurMaisonAppartementIleDeFrance') }}" 
                    class="btn-primary" 
                    title="Contact chasseur immobilier">
                    Découvrez notre Réseau
                </a> --}}
            </div>
        </div>
    </section>

    

    <!-- Slider -->
    @include('parts/slider')

    <!-- Blog Widget -->
    @include('parts/blog-widget')
</main>
@endsection