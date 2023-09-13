@extends('layouts/app')

@section('content')
<main>

    <!-- Section Sliders -->
    <section class="list-single-carousel-wrap carousel-wrap fl-wrap housing__slider" id="sec1">
        <div class="fw-carousel single-carousel carousel fl-wrap full-height lightgallery housing__slider--carousel" id="lightgallery">
            @foreach ($data['habitation']->images()->get() as $image)
                <div class="slick-slide-item">
                    <div class="box-item">
                        <img    loading="lazy"  
                                src="{{ asset($image->src) }}" 
                                alt="{{ $image->alt }}">
                        <a href="{{ asset($image->src) }}" class="gal-link popup-image dynamic-gal housing__slider--search__link" title="{{ $image->alt }}">
                            <i class="fal fa-search"></i>
                        </a>
                        <div class="show-info">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-prev sw-btn"><i class="fal fa-angle-left"></i></div>
        <div class="swiper-button-next sw-btn"><i class="fal fa-angle-right"></i></div>
        <!-- Slider Modal -->
        <div class="slider__modal--wrapper" id="slider__modal--wrapper">
            <div class="slider__modal--icons">
                <div class="zoom_out inactive" id="zoom_out"></div>
                <div class="zoom_in" id="zoom_in"></div>
                <div class="close_icon" id="close_icon"></div>
            </div>
            <div class="slider__modal" id="slider__modal">
                @foreach ($data['habitation']->images()->get() as $image)
                    <div class="slider__modal--inner">
                        <div class="box-item">
                            <img    loading="lazy"  
                                    src="{{ asset($image->src) }}" 
                                    alt="{{ $image->alt }}"
                                    data-img_id="slider_image_{{ $image->id }}"
                                    class="slider__modal--img">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section Breadcrumbs -->
    @include('parts/breadcrumbs-accueil')

    <!-- Section Housing Single -->
    <section class="housing__single" id="housing__single--content">
        <div class="container" id="container">
            <div class="housing__single--inner">
                <div class="housing__single--scroll__nav" id="housing__single--scroll__nav">
                    <a href="#sec1" id="nav_sec_1">
                        <i class="fas fa-camera active"><span>Photos</span></i>
                    </a>
                    <a href="#sec2" id="nav_sec_2">
                        <i class="fas fa-info-circle"><span>Informations</span></i>
                    </a>
                    <a href="#sec3" id="nav_sec_3">
                        <i class="fas fa-ruler-combined"><span>Plan par lot</span></i>
                    </a>
                    <a href="#sec4" id="nav_sec_4">
                        <i class="fas fa-map-marked"><span>Map</span></i>
                    </a>
                </div>

                <!-- Main Content -->
                <div class="housing__single--content">
                    <div class="housing__single--content__block">
                        <h1 id="sec2">{{ $data['habitation']->h1_title }}</h1>
                        <div class="housing__single--address">
                            <a  href="{{ route('immoneuf.show', $data['habitation']->department->num . '-' . $data['habitation']->department->dpt_slug) }}"
                                title="{{ $data['habitation']->address }}">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>{{ $data['habitation']->address }}</p>
                            </a>
                        </div>
                    
                        <div class="housing__single--details">
                            <div class="housing__single--details__item"><strong>Prix : à partir de </strong>{{ number_format($data['habitation']->min_price, 0, ',', '.') }} €</div>
                            <div class="housing__single--details__item"><strong>Date de livraison : </strong>{{ $data['habitation']->trimester . ' ' . $data['habitation']->delivery_date }}</div>
                        </div>
                        <div class="housing__single--details">
                            <div class="housing__single--details__item"><strong>Type d'Habitation : </strong>{{ $data['habitation']->type }}</div>
                            <div class="housing__single--details__item"><strong>Dispositifs Fiscaux : </strong>{{ $data['habitation']->devices }}</div>
                        </div>
                    </div>

                    <div>
                        <div class="housing__single--lots">
                            @foreach ($data['habitation']->lots()->orderBy('id', 'ASC')->limit(4)->get() as $lot)
                                <div class="housing__single--lots__item">
                                    <i class="fas fa-building"></i>
                                    <div>
                                        <h6>{{ $lot->name }}</h6>
                                        <p>{{ number_format($lot->price, 0, ',', '.') }} €</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="housing__single--content__block">
                        <h2 class="housing__single--h2">{{ $data['habitation']->h2_title }}</h2>
                        <p class="housing__single--p">{!! $data['habitation']->description !!}</p>
                    </div>

                    <div class="housing__single--content__block">
                        <h3 class="housing__single--h3">{{ $data['habitation']->h3_title }}</h3>
                        <div class="housing__single--city__info">
                            @for ($i = 1; $i <= 4; $i++)
                                <div class="housing__single--city__info--item">
                                    <h4>{{ $data['habitation']->{'city_info_title_' . $i} . ' :'}}</h4>
                                    <p>{{ $data['habitation']->{'city_info_' . $i} }}</p>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <div class="housing__single--content__block">
                        <h3 class="housing__single--h3" id="sec3">Informations par Lots</h3>
                        @foreach ($data['habitation']->lots()->get() as $lot)
                            <h4 class="housing__single--lot__heading" data-link="#lot_{{ $lot->id }}">
                                {{ $lot->name }} 
                                <span class="housing__single--lot__heading--price">{{ number_format($lot->price, 0, ',', '.') }} €</span>
                                <span class="housing__single--lot__heading--plus"></span>
                            </h4>
                            <div class="housing__single--lot__content" id="lot_{{ $lot->id }}">
                                <img    loading="lazy" 
                                        src="{{ asset($lot->img) }}" 
                                        alt="{{ $lot->alt }}">
                                <p>{!! $lot->descreption !!}</p>
                            </div>
                        @endforeach
                    </div>

                    <div class="housing__single--content__block" id="sec4">
                        <div    class="housing__single--map" 
                                id="housing__single--map sec4"
                                data-latitude="{{ $data['habitation']->lat }}"
                                data-longitude="{{ $data['habitation']->lon }}"
                                data-mapTitle="Our Location"
                                data-infotitle="{{ $data['habitation']->title }}"
                                data-infotext="{{ $data['habitation']->address }}">

                        </div>
                    </div>
                </div>
                <!-- // Main Content -->

                <!-- Sidebar -->
                <div class="housing__single--sidebar">

                    <!-- Profile -->
                    <div class="housing__single--sidebar__block">
                        <div class="housing__single--profile">
                            <a class="housing__single--profile__call--now" href="tel:123456789"><i class="fas fa-phone-alt"></i></a>
                            <div class="housing__single--profile__person">
                                <img    loading="lazy"    
                                        src="{{ asset('images/bg/agent-immobilier-neuf-ile-de-france.webp') }}" 
                                        alt="Sarah Godard Agence La Fabrique à Toits">
                                <div class="housing__single--profile__person--details">
                                    <h4>Sarah Godard</h4>
                                    <p>Votre Expert Neuf</p>
                                    <div class="housing__single--profile__person--rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    

                        <div class="housing__single--profile__contact">
                            <a href="tel:00330782090595" title="Call now">
                                <i class="fal fa-phone-rotary"></i>
                                <span>Tel : </span>
                                <p>+33 (0) 7 82 09 05 95</p>
                            </a>
                            <a href="mailto:projet@lafabriqueatoits.com" title="Phone number">
                                <i class="fal fa-envelope"></i>
                                <span>Email : </span>
                                <p>projet@lafabriqueatoits.com</p>
                            </a>
                        </div>
                        <div class="housing__single--profile__links">
                            <a  href="{{ route('equipeChasseurMaisonAppartementIleDeFrance') }}" 
                                class="btn-primary"
                                title="Réseau LFAT">
                                Réseau LFAT
                            </a>
                            <a  href="#sec-contact"
                                title="Contact me button">
                                <i class="fal fa-phone-alt"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Programmes Neufs à la Une -->
                    <div class="housing__single--h3" style="margin-top:20px">Programmes Neufs à la Une !</div>

                    <div class="housing__single--sidebar__block">
                        <div class="housing__single--sidebar__items">
                            @foreach (App\Models\Habitation::where('is_selected', 1)->orderBy('id', 'DESC')->limit(6)->get() as $item)
                                <div class="housing__single--sidebar__item">
                                    <img    loading="lazy" 
                                            src="{{ asset($item->images()->first()->src) }}" 
                                            alt="{{ $item->images()->first()->alt }}">
                                    <div>item
                                        <a href="{{ url('immobilier-neuf-ile-de-france/' .  $item->department->dpt_slug . '/programme-immobilier-appartement-neuf.php?programme=' . $item->slug . '&ville=' . $item->city ) }}"><i class="fas fa-map-marker-alt"></i>{{ $item->h1_title}}</a>
                                        <p>Prix : <span>à partir de {{ number_format($item->min_price, 0, ',', '.') }} €</span></p>
                                    </div>
                                </div>
                            @endforeach
                            <a href="{{ route('immobilierNeufIleDeFrance') }}" class="btn-primary housing__single--sidebar__items--link">Tous les Programmes Neufs</a>
                        </div>
                    </div>

                    <!-- Contact form -->
                    <form action="{{ route('main.mail.send') }}" method="POST" class="housing__single--sidebar__form" id="sec-contact" style="scroll-margin-top:80px;">
                        @csrf
                        <h5>Rappelez moi !</h5>
                        <div class="housing__single--sidebar__form--inner">
                            <div class="modal__form--group">
                                <p class="housing__single--sidebar__form--p">Nom et Prénom* </p>
                                <label for="">
                                    <i class="fas fa-user"></i>
                                </label>
                                <input  name="name" 
                                        placeholder="Nom et Prénom*" 
                                        type="text">
                            </div>
                            <div class="modal__form--group">
                                <p class="housing__single--sidebar__form--p">Téléphone* </p>
                                <label for="">
                                    <i class="fas fa-phone"></i>
                                </label>
                                <input  name="phone" 
                                        placeholder="Téléphone" 
                                        type="text">
                            </div>
                            <div class="modal__form--group">
                                <p class="housing__single--sidebar__form--p">Raison de l'Appel* </p>
                                <label for="">
                                    <i class="fas fa-question circle"></i>
                                </label>
                                <input  name="raison" 
                                        placeholder="Raison de l'appel" 
                                        type="text">
                            </div>
                            <button type="submit" class="modal__form--btn">Envoyer</button>
                        </div>
                    </form>

                </div>
                <!-- // Sidebar -->
            </div>
        </div>
    </section>
</main>
@endsection