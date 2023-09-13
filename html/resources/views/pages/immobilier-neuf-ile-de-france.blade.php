@extends('layouts/app')

@section('content')
<main>
    <!-- Main Section -->
    @include('parts/main2')

    <!-- Section Breadcrumbs -->
    @include('parts/breadcrumbs-home')

    <!-- Section Map -->
    <section class="map" id="map" data-items="{{ $data['habitation_json'] }}"></section>

    <!-- Section FIlter -->
    <section class="filter" id="search">
        <div class="container">
            <form method="GET" action="" class="filter__form" id="filter">
                <button class="btn-primary filter__sidebar--btn" type="button" id="filter__sidebar--btn">Affiner votre Recherche (Filtres)</button>
                <div class="filter__row">
                    <!-- search sidebar-->
                    <div class="filter__sidebar" id="filter__sidebar">
                        <div class="">
                            <div class="filter__heading">
                                <i class="far fa-sliders-h"></i>
                                <span>Affiner votre recherche</span>
                            </div>
                            <div class="filter__column" id="filters-column">

                                <!-- Input Habitation-->
                                <div class="filter__formgroup">
                                    <label>Type d'Habitation</label>
                                    <select name="type" id="habitation" data-placeholder="Habitation"
                                            class="filter__select">
                                        <option value="tous">Tous</option>
                                        <option value="appartement" {{ request()->get('type') === 'appartement' ? 'selected' : '' }}>
                                            Appartement
                                        </option>
                                        <option value="maison" {{ request()->get('type') === 'maison' ? 'selected' : '' }}>
                                            Maison
                                        </option>
                                    </select>
                                </div>
                                <!-- listsearch-input-item end-->
                                <!-- listsearch-input-item -->
                                <div class="filter__formgroup">
                                    <div class="row">
                                        <div class="select">
                                            <label>Nb de pièces MIN</label>
                                            <select name="min_pieces" 
                                                    data-placeholder="Bedrooms"
                                                    class="filter__select">
                                                @for ($i = 1; $i < 5; $i++)
                                                    <option value="{{ $i }}" {{ request()->get('min_pieces') == $i ? 'selected' : '' }}>T{{ $i }}</option>
                                                @endfor
                                                <option value="5" {{ request()->get('min_pieces') == 5 ? 'selected' : '' }}>T5+</option>
                                            </select>
                                        </div>
                                        <div class="select">
                                            <label>Nb de pièces MAX</label>
                                            <select name="max_pieces" 
                                                    data-placeholder="Bathrooms"
                                                    class="filter__select">
                                                @for ($i = 1; $i < 5; $i++)
                                                    <option value="{{ $i }}" {{ request()->get('max_pieces') == $i ? 'selected' : '' }}>T{{ $i }}</option>
                                                @endfor
                                                <option value="5" {{ request()->get('max_pieces') == 5 ? 'selected' : (!request()->get('max_pieces')  ? 'selected' : '') }}>T5+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- listsearch-input-item end-->
                                <!-- listsearch-input-item -->
                                <div class="filter__formgroup"
                                     style="margin-top: 20px; margin-bottom: 20px;">
                                    <span class="pr_title">Prix</span>
                                    <div class="range_slider">

                                        <span class="range_value_min" id="price-min-value"></span>
                                        <span class="range_value_max" id="price-max-value"></span>
                                        <div class="slider-track"></div>
                                        <input  type="range" 
                                                class="filter__range" 
                                                id="price-slider-min" 
                                                min="50000" 
                                                max="2000000" 
                                                step="10000"
                                                name="min_price"
                                                value="{{ request()->get('min_price') ? request()->get('min_price') : '50000' }}">
                                        <input  type="range" 
                                                class="filter__range" 
                                                id="price-slider-max" 
                                                min="50000" 
                                                max="2000000" 
                                                step="10000"
                                                name="max_price"
                                                value="{{ request()->get('max_price') ? request()->get('max_price') : '2000000' }}">
                                    </div>
                                </div>
                                <!-- listsearch-input-item end-->
                                <!-- listsearch-input-item-->
                                <div class="filter__formgroup">
                                    <label>Département</label>
                                    <select name="departement" data-placeholder="Departement"
                                            class="filter__select">
                                        <option>Tous</option>
                                        @foreach ($data['departments'] as $department)
                                            <option value="{{ $department->id }}" {{ request()->get('departement') == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- listsearch-input-item end-->
                                <!-- listsearch-input-item-->



                                <!-- Date of delivery -->
                                <div class="filter__formgroup">
                                    <label>Date de Livraison</label>
                                    <select name="livraison" data-placeholder="Livraison"
                                            class="filter__select">
                                        <option>Pas de préférence</option>
                                    </select>
                                </div>
                                <!-- listsearch-input-item end-->
                                <!-- listsearch-input-item-->
                                <div class="filter__formgroup">
                                    <label>Dispositifs Fiscaux</label>
                                    <select name="fiscaux" data-placeholder="Livraison"
                                            class="filter__select">
                                        <option>Tous</option>
                                        <option {{ request()->get('fiscaux') == 'PINEL' ? 'selected' : '' }} value="PINEL">
                                            Pinel
                                        </option>
                                        <option {{ request()->get('fiscaux') == 'LMNP' ? 'selected' : '' }} value="LMNP">
                                            LMNP
                                        </option>
                                        <option {{ request()->get('fiscaux') == 'autres' ? 'selected' : '' }} value="autres">
                                            Autres
                                        </option>
                                    </select>
                                </div>
                                <!-- listsearch-input-item-->
                                <!-- listsearch-input-item end-->
                                <div class="filter__footer">
                                    <button type="submit"
                                            class="filter__search--btn">Rechercher
                                    </button>
                                    <a href="{{ route('immobilierNeufIleDeFrance') }}"
                                       class="filter__reset"><i class="far fa-sync-alt"></i>
                                        Réinitialiser
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- search sidebar end-->
                    <div class="filter__content">
                        <!-- list-main-wrap-header-->
                        <div class="filter__content--head">
                            <p>Trier par</p>
                            <select name="order"
                                        class="filter__select"
                                        onchange="this.form.submit()">
                                <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>Prix Croissant</option>
                                <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>Prix Décroissant</option>
                            </select>
                            <div class="filter__grid-opt">
                                <ul class="">
                                    <li class="filter__grid-opt_act">
                                        <span class="two-col-grid act-grid-opt tolt" id="show-grid">
                                            <i class="far fa-th"></i>
                                        </span>
                                    </li>
                                    <li class="filter__grid-opt_act">
                                        <span class="one-col-grid tolt" id="show-list">
                                            <i class="far fa-list"></i>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- list-main-wrap-header end-->
                        <!-- listing-item-wrap-->
                        <div class="filter__item-container" id="filter__item-container">
                            @foreach($data['habitations'] as $habitation)
                                <div class="filter__item">
                                    <article>
                                        <a title="{{ $habitation->h1_title }}" href="{{ url('immobilier-neuf-ile-de-france/' .  $habitation->department->dpt_slug . '/programme-immobilier-appartement-neuf.php?programme=' . $habitation->slug . '&ville=' . $habitation->city ) }}">
                                            <img    loading="lazy" 
                                                    src="{{ $habitation->images()->where('is_first', 1)->first()->src }}"
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
                            <!-- listing-item end-->
                        </div>
                        <!-- listing-item-wrap end-->
                        
                    </div>
                    <!-- col-md 8 end -->
                </div>
            </form>
        </div>
    </section>

    <!-- Question Cards -->
    <section class="question__cards">
        <h2 class="section__h2--red">Où souhaitez-vous investir dans l'immobilier neuf en Ile de France ?</h2>
        <p class="section__description">Connaître toutes les opportunités qu'offre l'immo neuf par département francilien</p>
        <div class="container">
            <div class="question__cards--inner">

                <!-- Card #1 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">IMMOBILIER NEUF PARIS</h3>
                    </div>
                    <a  href="{{ route('chasseur.show', 'paris') }}" 
                        class="question__cards--link small-link"
                        title="IMMOBILIER NEUF PARIS"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #2 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">IMMOBILIER NEUF 92</h3>
                    </div>
                    <a  href="{{ route('chasseur.show', '92-hauts-de-seine') }}" 
                        class="question__cards--link small-link"
                        title="IMMOBILIER NEUF 92"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #3 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">IMMOBILIER NEUF 93</h3>
                    </div>
                    <a  href="{{ route('chasseur.show', '93-seine-saint-denis') }}" 
                        class="question__cards--link small-link"
                        title="IMMOBILIER NEUF 93"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #4 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">IMMOBILIER NEUF 94</h3>
                    </div>
                    <a  href="{{ route('chasseur.show', '94-val-de-marne') }}" 
                        class="question__cards--link small-link"
                        title="IMMOBILIER NEUF 94"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #5 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">IMMOBILIER NEUF 95</h3>
                    </div>
                    <a  href="{{ route('chasseur.show', '95-val-d-oise') }}" 
                        class="question__cards--link small-link"
                        title="IMMOBILIER NEUF 95"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #6 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">IMMOBILIER NEUF 77</h3>
                    </div>
                    <a  href="{{ route('chasseur.show', '77-seine-et-marne') }}" 
                        class="question__cards--link small-link"
                        title="IMMOBILIER NEUF 77"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>

                <!-- Card #7 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <h3 class="question__cards--card__heading">IMMOBILIER NEUF 78</h3>
                    </div>
                    <a  href="{{ route('chasseur.show', '78-yvelines') }}" 
                        class="question__cards--link small-link"
                        title="IMMOBILIER NEUF 78"
                        style="text-transform:uppercase;">
                        Découvrir
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax -->
    <section class="parallax" data-scrollax-parent="true">
        <div    class="parallax__parallax-window"
                data-scrollax="properties: { translateY: '30%' }"
                style="background-image:url('{{ asset('images/bg/BM-programme-neuf-ile-de-france.webp') }}')">
        </div>
        <div class="backdrop__filter--darken__parallax"></div>
        <h2 class="parallax__heading">Immobilier Neuf : On vous aide à choisir !</h2>
        <div class="container">
            <div class="parallax__inner">
                <p class="parallax__text">Nos experts en immobilier neuf trouveront la maison ou l'appartement neuf qui vous corresponds parfaitement !</p>
                <button  class="btn-primary contact_btn">
                    Contactez-Nous
                </button>
            </div>
        </div>
    </section>

    <!-- Section Hunting -->
    <section class="hunting">
        <div class="container">
            <div class="hunting__header">
                <div class="hunting__header--row reverse">
                    <img    srcset="{{ asset('images/bg/programme-immobilier-neuf-ile-de-france-min.webp') }} 800w,
                                    {{ asset('images/bg/programme-immobilier-neuf-ile-de-france-min_430.webp') }} 430w"
                            src="{{ asset('images/bg/programme-immobilier-neuf-ile-de-france-min.webp') }}" 
                            loading="lazy"
                            alt="programme immobilier neuf en Ile de France"
                            title="programme immobilier neuf en Ile de France"
                            class="hunting__header--img">
                    <div class="hunting__header--content">
                        <h2 class="hunting__header--chasseur" style="font-weight:600">Pourquoi investir dans l’immobilier neuf en Ile de France ? </h2>
                        <p>Acheter une maison neuve ou un appartement neuf en Ile de France est un placement sûr offrant de nombreux avantages fiscaux tout en vous permettant de développer votre patrimoine. Avec la construction du Grand Paris Express, de nombreux programmes immobiliers représentent une belle opportunité pour les investisseurs.</p>
                    </div>
                </div>
            </div>
            <div class="hunting__body">
                <ul>
                    <li>
                        <i class="fal fa-check-double"></i>
                        <h3>L’immobilier neuf, un investissement aux risques limités</h3>
                        <p>L’immobilier neuf est synonyme de sérénité. En investissant dans un appartement ou une maison neuve, vous évitez d’éventuels coûts de rénovation divers et non négligeables. De plus, votre nouveau bien sera en phase avec les dernières normes en matière d'isolation et d'énergie, acoustique et pratique (parking souterrain et sécurisé…).<br>
                            Attention toutefois à rester vigilant car ce type d’achat se réalise sur plan. C'est pour cette raison que nos spécialistes de l’Immobilier Neuf s'assurent de la fiabilité du Promoteur et que les assurances de celui-ci permettent de couvrir les éventuels vices cachés ou travaux imprévus, et cela, pour plusieurs années après l'acquisition.<br>
                            Enfin, nos Experts Immobilier vous conseillent de porter une attention particulière sur le lieu, le type d'investissement (LMNP, Loi Pinel, Résidence étudiante ou Senior..), le dynamisme locatif et de bien étudier le programme immobilier du promoteur.
                        </p>
                    </li>
                    <li>
                        <i class="fal fa-city"></i>
                        <h3>Avec l’immobilier neuf vous pourrez bâtir votre patrimoine à moindre coût</h3>
                        <p>Lorsque l'on compare les investissements permettant de développer son patrimoine, l'immobilier se révèle être un choix idéal du fait qu'il puisse s'acquérir à crédit.<br>
                            Ce n'est pas une "grande révélation", mais cela fait toute la différence car bien calculé votre investissement pourrait être remboursé entièrement ou en partie par les montants des loyers perçus.<br>
                            Grâce à nos partenaires Fiscalistes et Comptables, nos Experts Immobilier s'assurent de la rentabilité de chaque opération en créant avec nos clients investisseurs un "Business Plan Immobilier". Le réel atout d'investir dans une maison ou un appartement neuf en Ile de France, c'est que financièrement parlant vous pourrez vous poser sur des chiffres très proches de la réalité car les frais liés à la maintenance seront limités, voir inexistants les premières années.
                        </p>
                    </li>
                    <li>
                        <i class="fal fa-euro-sign"></i>
                        <h3>Bénéficier d'avantages fiscaux en investissant dans le neuf</h3>
                        <p>Plusieurs systèmes sont à disposition des investisseurs locatifs :<br>
                            * la loi Pinel permet de bénéficier d'une déduction fiscale de 12% à 21% en fonction de la durée de location qui est de minimum 6 ans à 12 ans.<br>
                            * le dispositif Censi-Bouvard permet une réduction d'impôt à hauteur de 11% du prix de l'acquisition hors taxe (jusque 300 000 €) et de récupérer la TVA (20%). Pour bénéficier de ce dispositif, le bien doit être loué meublé pendant 9 années en résidence de services ou en location meublée non professionnelle (LMNP).<br>
                            De plus, lorsque vous investissez dans un bien immobilier neuf les frais de notaires sont de 2% à 3% contre 6% à 7% dans l'ancien et certaines collectivités locales accordent une exonération d'une partie de la Taxe Foncière les 2 premières années.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="question__cards">
        <h2 class="section__h2--red section__h2--chasseur">Les dispositifs fiscaux Pinel et LMNP pour l’Immobilier Neuf</h2>
        <p class="section__description">Comprendre pour bien investir dans le Neuf</p>
        <div class="container">
            <div class="question__cards--inner" style="flex-wrap:nowrap;">
    
                <!-- Card #1 -->
                <div class="question__cards--card" style="max-width:unset;flex-grow:1;">
                    <div class="question__cards--card__header">
                        <i class="far fa-building"></i>
                        <h3 class="question__cards--card__heading">Investir tout en bénéficiant de la défiscalisation PINEL</h3>
                    </div>
                    <p class="question__cards--card__content">Avec le dispositif Pinel, vous bénéficiez d’une réduction d’impôt si vous effectuez des investissements locatifs. Les caractéristiques de cette réduction dépendent de la date à laquelle vous avez réalisé votre investissement.</p>
                </div>
    
                <!-- Card #2 -->
                <div class="question__cards--card" style="max-width:unset;flex-grow:1;">
                    <div class="question__cards--card__header">
                        <i class="fas fa-couch"></i>
                        <h3 class="question__cards--card__heading">Le statut de Location Meublée Non Professionnelle (LMNP)</h3>
                    </div>
                    <p class="question__cards--card__content">Avec le dispositive Location Meublée Non Professionnelle, en achetant une maison ou un appartement neuf, vous devenez propriétaire d’un bien meublé en percevant des revenus locatifs non imposés, tout en récupérant la TVA.</p>
                </div>
            </div>
        </div>
    </section>

    @include('parts/blog-widget')

</main>
@endsection