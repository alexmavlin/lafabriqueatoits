@extends('layouts/app')

@section('content')
<main>
    <!-- Main Section -->
    @include('redesign/page_parts/main')

    <!-- Section Investing -->
    <section class="investing">
        <img    srcset="images/content/investing.webp 1920w,
                        images/content/investing_600.webp 700w,
                        images/content/investing_400.webp 500w"
                src="images/content/investing.webp" 
                width="815"
                height="922"
                alt=""
                title="" 
                class="investing__img">

        <div class="investing__content">
            <h1 class="investing__h1">Investir dans l'immobilier neuf en Île-de-France, une bonne idée?</h1>
            <p class="investing__p">C'est parti pour une aventure immobilière de folie en Île-de-France! Que diriez-vous d'investir dans un appartement neuf ou une maison neuve?
                 Avec la construction du Grand Paris Express, c'est le moment idéal pour sauter dans le train de l'immobilier et profiter de nombreux avantages fiscaux. 
                Devenez le maître de votre patrimoine et vivez une expérience immobilière ultra-confortable!</p>
        </div>
    </section>

    <!-- Section opportunities -->
    <section class="opportunities">
        <div class="container">
           <div class="opportunities__header">
            <h2 class="opportunities__h2">Nos opportunités d'investissement neuf en Île-de-France</h2>
            </div>
            <div class="opportunities__content">
               <p class="opportunities__p">Vous êtes prêt à découvrir nos pépites immobilières? Nous avons tout ce qu'il vous faut: des programmes immobiliers neufs, des appartements de style, des maisons de rêve et bien plus encore! Vous n'avez plus qu'à choisir celui qui fera battre votre cœur et fructifier votre argent.</p>
            </div> 
        </div>
    </section>

    <!-- Map Section -->
    {{-- <iframe class="searchForm__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.9185124462!2d2.347035!3d48.85885484999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%2C%20France!5e0!3m2!1sfr!2srs!4v1694535156700!5m2!1sfr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

    <!-- Search Form Section -->
    <section class="searchForm">
        <div class="container">
            <form action="{{ route('immobilierNeufIleDeFrance') }}" class="searchForm__form" method="GET">
                <div class="searchForm__sidebar">
                    <h2 class="searchForm__h2">
                        Affiner votre recherche
                        <svg id="search-bar-btn" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M14.0365 20.9376C13.8539 20.9367 13.675 20.8866 13.5185 20.7926L10.1845 18.7926C9.80946 18.5663 9.499 18.2472 9.28304 17.8661C9.06709 17.485 8.95291 17.0547 8.95151 16.6166V12.0916C8.95242 11.7722 8.85309 11.4606 8.66751 11.2006L4.01251 4.6586C3.90381 4.50758 3.83895 4.32946 3.82508 4.14391C3.8112 3.95835 3.84886 3.77257 3.93389 3.60706C4.01892 3.44155 4.14802 3.30275 4.30694 3.20597C4.46587 3.10919 4.64844 3.05819 4.83451 3.0586H19.1645C19.3507 3.05783 19.5335 3.1086 19.6927 3.2053C19.8518 3.30201 19.9811 3.44087 20.0662 3.60651C20.1513 3.77215 20.1889 3.95811 20.1748 4.1438C20.1608 4.32949 20.0956 4.50767 19.9865 4.6586L15.3315 11.2006C15.1456 11.4605 15.046 11.7721 15.0465 12.0916V19.9256C15.0462 20.1936 14.9398 20.4505 14.7505 20.6402C14.5612 20.8299 14.3045 20.9368 14.0365 20.9376ZM4.83451 4.0636L9.48151 10.6206C9.78856 11.0495 9.95298 11.5641 9.95151 12.0916V16.6156C9.95217 16.881 10.0213 17.1417 10.1521 17.3726C10.283 17.6035 10.4712 17.7967 10.6985 17.9336L14.0325 19.9336L14.0465 12.0906C14.0454 11.563 14.2102 11.0484 14.5175 10.6196L19.1715 4.0776L4.83451 4.0636Z" fill="white"/>
                        </svg>
                    </h2>
                    <div class="searchForm__sidebar--wrapper" id="earchForm__sidebar--wrapper">
                        
                        <span class="searchForm__close" id="searchForm__close"></span>

                        <!-- Name and Surname -->
                        <div class="searchForm__formGroup">
                            <label for="" class="searchForm__label">
                                Type d'Habitation
                            </label>
                            <div class="searchForm__select--wrapper">
                                <select name="type" type="text" class="searchForm__select">
                                    <option value="tous" {{ request()->get('type') == 'tous' ? 'selected' : '' }}>Tous</option>
                                    <option value="appartement" {{ request()->get('type') == 'appartement' ? 'selected' : '' }}>Appartement</option>
                                    <option value="maison" {{ request()->get('type') == 'maison' ? 'selected' : '' }}>Maison</option>
                                </select>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                    <path d="M19.9977 7.98878L12.5007 15.2968L5.00372 7.98878C4.86978 7.85795 4.68997 7.7847 4.50272 7.7847C4.31548 7.7847 4.13567 7.85795 4.00172 7.98878C3.93687 8.05233 3.88534 8.12818 3.85017 8.21189C3.81499 8.2956 3.79687 8.38548 3.79688 8.47628C3.79687 8.56708 3.81499 8.65697 3.85017 8.74068C3.88534 8.82439 3.93687 8.90024 4.00172 8.96378L11.9772 16.7398C12.1173 16.8763 12.3051 16.9527 12.5007 16.9527C12.6963 16.9527 12.8842 16.8763 13.0242 16.7398L20.9997 8.96528C21.065 8.90169 21.117 8.82565 21.1524 8.74167C21.1878 8.65768 21.2061 8.56744 21.2061 8.47628C21.2061 8.38512 21.1878 8.29488 21.1524 8.2109C21.117 8.12691 21.065 8.05088 20.9997 7.98728C20.8658 7.85645 20.686 7.7832 20.4987 7.7832C20.3115 7.7832 20.1317 7.85645 19.9977 7.98728V7.98878Z" fill="#333333"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Pieces min/max -->
                        <div class="searchForm__formRow">
                            <div class="searchForm__formGroup">
                                <label for="" class="searchForm__label">
                                    Nb de pièces MIN
                                </label>
                                <div class="searchForm__select--wrapper">
                                    <select name="min_pieces" type="text" class="searchForm__select">
                                        <option value="1" {{ request()->get('min_pieces') == 1 ? 'selected' : '' }}>T1</option>
                                        <option value="2" {{ request()->get('min_pieces') == 2 ? 'selected' : '' }}>T2</option>
                                        <option value="3" {{ request()->get('min_pieces') == 3 ? 'selected' : '' }}>T3</option>
                                        <option value="4" {{ request()->get('min_pieces') == 4 ? 'selected' : '' }}>T4</option>
                                        <option value="5" {{ request()->get('min_pieces') == 5 ? 'selected' : '' }}>T5+</option>
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                        <path d="M19.9977 7.98878L12.5007 15.2968L5.00372 7.98878C4.86978 7.85795 4.68997 7.7847 4.50272 7.7847C4.31548 7.7847 4.13567 7.85795 4.00172 7.98878C3.93687 8.05233 3.88534 8.12818 3.85017 8.21189C3.81499 8.2956 3.79687 8.38548 3.79688 8.47628C3.79687 8.56708 3.81499 8.65697 3.85017 8.74068C3.88534 8.82439 3.93687 8.90024 4.00172 8.96378L11.9772 16.7398C12.1173 16.8763 12.3051 16.9527 12.5007 16.9527C12.6963 16.9527 12.8842 16.8763 13.0242 16.7398L20.9997 8.96528C21.065 8.90169 21.117 8.82565 21.1524 8.74167C21.1878 8.65768 21.2061 8.56744 21.2061 8.47628C21.2061 8.38512 21.1878 8.29488 21.1524 8.2109C21.117 8.12691 21.065 8.05088 20.9997 7.98728C20.8658 7.85645 20.686 7.7832 20.4987 7.7832C20.3115 7.7832 20.1317 7.85645 19.9977 7.98728V7.98878Z" fill="#333333"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="searchForm__formGroup">
                                <label for="" class="searchForm__label">
                                    Nb de pièces MAX
                                </label>
                                <div class="searchForm__select--wrapper">
                                    <select name="max_pieces" type="text" class="searchForm__select">
                                        <option value="1" {{ request()->get('max_pieces') == 1 ? 'selected' : '' }}>T1</option>
                                        <option value="2" {{ request()->get('max_pieces') == 2 ? 'selected' : '' }}>T2</option>
                                        <option value="3" {{ request()->get('max_pieces') == 3 ? 'selected' : '' }}>T3</option>
                                        <option value="4" {{ request()->get('max_pieces') == 4 ? 'selected' : '' }}>T4</option>
                                        <option value="5" {{ request()->get('max_pieces') == 5 ? 'selected' : '' }}>T5+</option>
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                        <path d="M19.9977 7.98878L12.5007 15.2968L5.00372 7.98878C4.86978 7.85795 4.68997 7.7847 4.50272 7.7847C4.31548 7.7847 4.13567 7.85795 4.00172 7.98878C3.93687 8.05233 3.88534 8.12818 3.85017 8.21189C3.81499 8.2956 3.79687 8.38548 3.79688 8.47628C3.79687 8.56708 3.81499 8.65697 3.85017 8.74068C3.88534 8.82439 3.93687 8.90024 4.00172 8.96378L11.9772 16.7398C12.1173 16.8763 12.3051 16.9527 12.5007 16.9527C12.6963 16.9527 12.8842 16.8763 13.0242 16.7398L20.9997 8.96528C21.065 8.90169 21.117 8.82565 21.1524 8.74167C21.1878 8.65768 21.2061 8.56744 21.2061 8.47628C21.2061 8.38512 21.1878 8.29488 21.1524 8.2109C21.117 8.12691 21.065 8.05088 20.9997 7.98728C20.8658 7.85645 20.686 7.7832 20.4987 7.7832C20.3115 7.7832 20.1317 7.85645 19.9977 7.98728V7.98878Z" fill="#333333"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Price min/max -->
                        <div class="searchForm__formRow">
                            <label for="" class="searchForm__label">Prix</label>
                            <div class="searchForm__rangeGroup" id="searchForm__rangeGroup">
                                <div class="searchForm__sliderTrack">
                                    <div class="searchForm__sliderTrack--progress" id="searchForm__sliderTrack--progress"></div>
                                </div>

                                <input  name="min_price" 
                                        class="range-min" 
                                        type="range" 
                                        min="10000" 
                                        max="1999990" 
                                        step="10" 
                                        value="{{ request()->get('min_price') ? request()->get('min_price') : '100000' }}">

                                <input  name="max_price" 
                                        class="range-max" 
                                        type="range" 
                                        min="10" 
                                        max="2000000" 
                                        step="10" 
                                        value="{{ request()->get('max_price') ? request()->get('max_price') : '1500000' }}">

                                <span class="searchForm__rangeGroup--minValue" id="searchForm__rangeGroup--minValue">€ 100 000</span>
                                <span class="searchForm__rangeGroup--maxValue" id="searchForm__rangeGroup--maxValue">€ 2 000 000</span>
                            </div>
                        </div>

                        <!-- Département -->
                        <div class="searchForm__formGroup">
                            <label for="" class="searchForm__label">
                                Département
                            </label>
                            <div class="searchForm__select--wrapper">
                                <select name="departement" type="text" class="searchForm__select">
                                    <option selected>Tous</option>
                                    <option value="1" {{ request()->get('departement') == 1 ? 'selected' : '' }}>Seine et Marne</option>
                                    <option value="2" {{ request()->get('departement') == 2 ? 'selected' : '' }}>Paris</option>
                                    <option value="3" {{ request()->get('departement') == 3 ? 'selected' : '' }}>Essonne</option>
                                    <option value="4" {{ request()->get('departement') == 4 ? 'selected' : '' }}>Hauts de Seine</option>
                                    <option value="5" {{ request()->get('departement') == 5 ? 'selected' : '' }}>Seine St Denis</option>
                                    <option value="6" {{ request()->get('departement') == 6 ? 'selected' : '' }}>Val de Marne</option>
                                    <option value="7" {{ request()->get('departement') == 7 ? 'selected' : '' }}>Val d'Oise</option>
                                    <option value="8" {{ request()->get('departement') == 8 ? 'selected' : '' }}>Yvelines</option>
                                </select>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                    <path d="M19.9977 7.98878L12.5007 15.2968L5.00372 7.98878C4.86978 7.85795 4.68997 7.7847 4.50272 7.7847C4.31548 7.7847 4.13567 7.85795 4.00172 7.98878C3.93687 8.05233 3.88534 8.12818 3.85017 8.21189C3.81499 8.2956 3.79687 8.38548 3.79688 8.47628C3.79687 8.56708 3.81499 8.65697 3.85017 8.74068C3.88534 8.82439 3.93687 8.90024 4.00172 8.96378L11.9772 16.7398C12.1173 16.8763 12.3051 16.9527 12.5007 16.9527C12.6963 16.9527 12.8842 16.8763 13.0242 16.7398L20.9997 8.96528C21.065 8.90169 21.117 8.82565 21.1524 8.74167C21.1878 8.65768 21.2061 8.56744 21.2061 8.47628C21.2061 8.38512 21.1878 8.29488 21.1524 8.2109C21.117 8.12691 21.065 8.05088 20.9997 7.98728C20.8658 7.85645 20.686 7.7832 20.4987 7.7832C20.3115 7.7832 20.1317 7.85645 19.9977 7.98728V7.98878Z" fill="#333333"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Date de Livraison -->
                        <div class="searchForm__formGroup">
                            <label for="" class="searchForm__label">
                                Date de Livraison
                            </label>
                            <div class="searchForm__select--wrapper">
                                <select name="livraison" type="text" class="searchForm__select">
                                    <option value="" selected disabled style="display:none;">Pas de préférence</option>
                                </select>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                    <path d="M19.9977 7.98878L12.5007 15.2968L5.00372 7.98878C4.86978 7.85795 4.68997 7.7847 4.50272 7.7847C4.31548 7.7847 4.13567 7.85795 4.00172 7.98878C3.93687 8.05233 3.88534 8.12818 3.85017 8.21189C3.81499 8.2956 3.79687 8.38548 3.79688 8.47628C3.79687 8.56708 3.81499 8.65697 3.85017 8.74068C3.88534 8.82439 3.93687 8.90024 4.00172 8.96378L11.9772 16.7398C12.1173 16.8763 12.3051 16.9527 12.5007 16.9527C12.6963 16.9527 12.8842 16.8763 13.0242 16.7398L20.9997 8.96528C21.065 8.90169 21.117 8.82565 21.1524 8.74167C21.1878 8.65768 21.2061 8.56744 21.2061 8.47628C21.2061 8.38512 21.1878 8.29488 21.1524 8.2109C21.117 8.12691 21.065 8.05088 20.9997 7.98728C20.8658 7.85645 20.686 7.7832 20.4987 7.7832C20.3115 7.7832 20.1317 7.85645 19.9977 7.98728V7.98878Z" fill="#333333"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Dispositifs Fiscaux -->
                        <div class="searchForm__formGroup">
                            <label for="" class="searchForm__label">
                                Dispositifs Fiscaux
                            </label>
                            <div class="searchForm__select--wrapper">
                                <select name="fiscaux" type="text" class="searchForm__select">
                                    <option>Tous</option>
                                    <option value="PINEL" {{ request()->get('fiscaux') == 'PINEL' ? 'selected' : '' }}>Pinel</option>
                                    <option value="LMNP" {{ request()->get('fiscaux') == 'LMNP' ? 'selected' : '' }}>LMNP</option>
                                    <option value="autres" {{ request()->get('fiscaux') == 'autres' ? 'selected' : '' }}>Autres</option>
                                </select>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                    <path d="M19.9977 7.98878L12.5007 15.2968L5.00372 7.98878C4.86978 7.85795 4.68997 7.7847 4.50272 7.7847C4.31548 7.7847 4.13567 7.85795 4.00172 7.98878C3.93687 8.05233 3.88534 8.12818 3.85017 8.21189C3.81499 8.2956 3.79687 8.38548 3.79688 8.47628C3.79687 8.56708 3.81499 8.65697 3.85017 8.74068C3.88534 8.82439 3.93687 8.90024 4.00172 8.96378L11.9772 16.7398C12.1173 16.8763 12.3051 16.9527 12.5007 16.9527C12.6963 16.9527 12.8842 16.8763 13.0242 16.7398L20.9997 8.96528C21.065 8.90169 21.117 8.82565 21.1524 8.74167C21.1878 8.65768 21.2061 8.56744 21.2061 8.47628C21.2061 8.38512 21.1878 8.29488 21.1524 8.2109C21.117 8.12691 21.065 8.05088 20.9997 7.98728C20.8658 7.85645 20.686 7.7832 20.4987 7.7832C20.3115 7.7832 20.1317 7.85645 19.9977 7.98728V7.98878Z" fill="#333333"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Button Group -->
                        <div class="searchForm__btnGroup" id="searchForm__btnGroup">
                            <button type="submit" class="searchForm__submit--btn">rechercher</button>
                            <a href="#" class="searchForm__refresh--btn">réinitialiser</a>
                        </div>

                    </div>
                </div>

                <!-- Search form content -->
                <div class="searchForm__content">
                    <div class="searchForm__top" id="searchForm__top">

                        <!-- Prix Croissant -->
                        <div class="searchForm__formGroup">
                            <div class="searchForm__select--wrapper">
                                <select name="order" type="text" class="searchForm__select">
                                    <option value="asc" {{ request()->get('order') == 'asc' ? 'selected' : '' }}>Prix Croissant</option>
                                    <option value="desc" {{ request()->get('order') == 'desc' ? 'selected' : '' }}>Prix Decroissant</option>
                                </select>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                    <path d="M19.9977 7.98878L12.5007 15.2968L5.00372 7.98878C4.86978 7.85795 4.68997 7.7847 4.50272 7.7847C4.31548 7.7847 4.13567 7.85795 4.00172 7.98878C3.93687 8.05233 3.88534 8.12818 3.85017 8.21189C3.81499 8.2956 3.79687 8.38548 3.79688 8.47628C3.79687 8.56708 3.81499 8.65697 3.85017 8.74068C3.88534 8.82439 3.93687 8.90024 4.00172 8.96378L11.9772 16.7398C12.1173 16.8763 12.3051 16.9527 12.5007 16.9527C12.6963 16.9527 12.8842 16.8763 13.0242 16.7398L20.9997 8.96528C21.065 8.90169 21.117 8.82565 21.1524 8.74167C21.1878 8.65768 21.2061 8.56744 21.2061 8.47628C21.2061 8.38512 21.1878 8.29488 21.1524 8.2109C21.117 8.12691 21.065 8.05088 20.9997 7.98728C20.8658 7.85645 20.686 7.7832 20.4987 7.7832C20.3115 7.7832 20.1317 7.85645 19.9977 7.98728V7.98878Z" fill="#333333"/>
                                </svg>
                            </div>
                        </div>

                        <svg id="thumbnail-view" class="active" xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
                            <rect width="52.0004" height="52" rx="8" fill="none"/>
                            <path d="M10.5 11.8462C10.5 11.1027 11.1027 10.5 11.8462 10.5H21.8683C22.6118 10.5 23.2145 11.1027 23.2145 11.8462V21.8681C23.2145 22.6116 22.6118 23.2143 21.8683 23.2143H11.8462C11.1027 23.2143 10.5 22.6116 10.5 21.8681V11.8462ZM10.5 30.1319C10.5 29.3884 11.1027 28.7857 11.8462 28.7857H21.8683C22.6118 28.7857 23.2145 29.3884 23.2145 30.1319V40.1538C23.2145 40.8973 22.6118 41.5 21.8683 41.5H11.8462C11.1027 41.5 10.5 40.8973 10.5 40.1538V30.1319ZM28.786 11.8462C28.786 11.1027 29.3887 10.5 30.1321 10.5H40.1543C40.8978 10.5 41.5005 11.1027 41.5005 11.8462V21.8681C41.5005 22.6116 40.8978 23.2143 40.1543 23.2143H30.1321C29.3887 23.2143 28.786 22.6116 28.786 21.8681V11.8462ZM28.786 30.1319C28.786 29.3884 29.3887 28.7857 30.1321 28.7857H40.1543C40.8978 28.7857 41.5005 29.3884 41.5005 30.1319V40.1538C41.5005 40.8973 40.8978 41.5 40.1543 41.5H30.1321C29.3887 41.5 28.786 40.8973 28.786 40.1538V30.1319Z" stroke="white"/>
                        </svg>

                        <svg id="row-view" class="" xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
                            <rect width="52.0004" height="52" rx="8" fill="none"/>
                            <path d="M10.5 11.8462C10.5 11.1027 11.1027 10.5 11.8462 10.5H17.2968C18.0403 10.5 18.643 11.1027 18.643 11.8462V17.2967C18.643 18.0402 18.0403 18.6429 17.2968 18.6429H11.8462C11.1027 18.6429 10.5 18.0402 10.5 17.2967V11.8462ZM10.5 23.2747C10.5 22.5313 11.1027 21.9286 11.8462 21.9286H17.2968C18.0403 21.9286 18.643 22.5313 18.643 23.2747V28.7253C18.643 29.4687 18.0403 30.0714 17.2968 30.0714H11.8462C11.1027 30.0714 10.5 29.4687 10.5 28.7253V23.2747ZM10.5 34.7033C10.5 33.9598 11.1027 33.3571 11.8462 33.3571H17.2968C18.0403 33.3571 18.643 33.9598 18.643 34.7033V40.1538C18.643 40.8973 18.0403 41.5 17.2968 41.5H11.8462C11.1027 41.5 10.5 40.8973 10.5 40.1538V34.7033ZM21.9287 11.8462C21.9287 11.1027 22.5314 10.5 23.2749 10.5H40.1543C40.8978 10.5 41.5005 11.1027 41.5005 11.8462V17.2967C41.5005 18.0402 40.8978 18.6429 40.1543 18.6429H23.2749C22.5314 18.6429 21.9287 18.0402 21.9287 17.2967V11.8462ZM21.9287 23.2747C21.9287 22.5313 22.5314 21.9286 23.2749 21.9286H40.1543C40.8978 21.9286 41.5005 22.5313 41.5005 23.2747V28.7253C41.5005 29.4687 40.8978 30.0714 40.1543 30.0714H23.2749C22.5314 30.0714 21.9287 29.4687 21.9287 28.7253V23.2747ZM21.9287 34.7033C21.9287 33.9598 22.5314 33.3571 23.2749 33.3571H40.1543C40.8978 33.3571 41.5005 33.9598 41.5005 34.7033V40.1538C41.5005 40.8973 40.8978 41.5 40.1543 41.5H23.2749C22.5314 41.5 21.9287 40.8973 21.9287 40.1538V34.7033Z" stroke="#DAB56B"/>
                        </svg>

                    </div>
                    <div class="searchForm__widget row" id="searchForm__widget">
                        @foreach ($data['habitations'] as $habitation)
                            <a  class="searchForm__item"
                                title="{{ $habitation->h1_title }}"
                                href="{{ url('immobilier-neuf-ile-de-france/' .  $habitation->department->dpt_slug . '/programme-immobilier-appartement-neuf.php?programme=' . $habitation->slug . '&ville=' . $habitation->city ) }}">
                                <div class="searchForm__item--top">
                                    <img    src="{{ asset('uploads/images/habitations') . '/' . $habitation->images[0]->src }}" 
                                            alt="{{ $habitation->images[0]->alt }}" 
                                            title="{{ $habitation->images[0]->alt }}" 
                                            width="340"
                                            height="340"
                                            class="searchForm__item--img">
                                    <div class="searchForm__item--tags">
                                        <div class="searchForm__item--tag">{{ $habitation['type'] }}</div>
                                        <div class="searchForm__item--tag">{{ $habitation['devices'] }}</div>
                                        <div class="searchForm__item--tag">{{ $habitation['trimester'] }}</div>
                                    </div>
                                </div>
                                <div class="searchForm__item--content">
                                    <h3 class="searchForm__item--h3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                            <path d="M6.99865 7.82775C6.58945 7.82775 6.18944 7.70641 5.8492 7.47907C5.50896 7.25173 5.24377 6.9286 5.08718 6.55054C4.93058 6.17249 4.88961 5.75649 4.96944 5.35515C5.04927 4.95381 5.24632 4.58516 5.53567 4.29581C5.82502 4.00646 6.19368 3.80941 6.59502 3.72957C6.99636 3.64974 7.41236 3.69072 7.79041 3.84731C8.16847 4.00391 8.4916 4.26909 8.71894 4.60933C8.94628 4.94957 9.06762 5.34958 9.06762 5.75879C9.06696 6.30731 8.84877 6.83318 8.46091 7.22104C8.07304 7.6089 7.54718 7.82709 6.99865 7.82775ZM6.99865 4.51741C6.75313 4.51741 6.51312 4.59021 6.30898 4.72662C6.10484 4.86302 5.94573 5.0569 5.85177 5.28373C5.75781 5.51056 5.73323 5.76016 5.78113 6.00097C5.82903 6.24177 5.94726 6.46296 6.12087 6.63657C6.29448 6.81018 6.51567 6.92841 6.75647 6.97631C6.99728 7.02421 7.24688 6.99963 7.47371 6.90567C7.70054 6.81171 7.89442 6.6526 8.03082 6.44846C8.16723 6.24432 8.24003 6.00431 8.24003 5.75879C8.23971 5.42965 8.10881 5.11409 7.87608 4.88136C7.64335 4.64863 7.32779 4.51774 6.99865 4.51741Z" fill="#FAFAFA"/>
                                            <path d="M7.00095 12.7936L3.51019 8.67678C3.46168 8.61496 3.41368 8.55275 3.36619 8.49016C2.76991 7.70469 2.44778 6.74528 2.44922 5.75912C2.44922 4.55193 2.92878 3.39418 3.78239 2.54057C4.63601 1.68695 5.79376 1.2074 7.00095 1.2074C8.20814 1.2074 9.36589 1.68695 10.2195 2.54057C11.0731 3.39418 11.5527 4.55193 11.5527 5.75912C11.5541 6.74484 11.2321 7.7038 10.6361 8.48891L10.6357 8.49016C10.6357 8.49016 10.5116 8.65319 10.4929 8.67512L7.00095 12.7936ZM4.0266 7.99154C4.02743 7.99154 4.12343 8.11898 4.14536 8.14629L7.00095 11.5142L9.86026 8.14174C9.87846 8.11898 9.97529 7.99071 9.97571 7.99029C10.4628 7.34855 10.726 6.56479 10.7251 5.75912C10.7251 4.77142 10.3327 3.82417 9.63431 3.12576C8.9359 2.42735 7.98865 2.03498 7.00095 2.03498C6.01324 2.03498 5.066 2.42735 4.36758 3.12576C3.66917 3.82417 3.27681 4.77142 3.27681 5.75912C3.27594 6.56529 3.53906 7.3495 4.0266 7.99154Z" fill="#FAFAFA"/>
                                        </svg>
                                        {{ $habitation['address'] }}
                                    </h3>
                                    <p class="searchForm__item--p">{{ strlen($habitation['description']) > 200 ? Str::substr($habitation['description'], 0, 200) . '...' : $habitation['description'] }}</p>
                                    <div class="searchForm__item--flats">
                                        <div class="searchForm__item--flat__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect width="24" height="24" rx="4" fill="#DAB56B"/>
                                                <path d="M19.5636 18.9634H17.6727V6.01794C17.6727 5.7479 17.5655 5.48892 17.3745 5.29797C17.1836 5.10703 16.9246 4.99976 16.6545 4.99976H7.34545C7.07542 4.99976 6.81644 5.10703 6.62549 5.29797C6.43455 5.48892 6.32727 5.7479 6.32727 6.01794V18.9634H4.43636C4.32063 18.9634 4.20964 19.0094 4.12781 19.0912C4.04597 19.173 4 19.284 4 19.3998C4 19.5155 4.04597 19.6265 4.12781 19.7083C4.20964 19.7901 4.32063 19.8361 4.43636 19.8361H19.5636C19.6794 19.8361 19.7904 19.7901 19.8722 19.7083C19.954 19.6265 20 19.5155 20 19.3998C20 19.284 19.954 19.173 19.8722 19.0912C19.7904 19.0094 19.6794 18.9634 19.5636 18.9634ZM16.8 6.01794V18.9634H15.3455V6.01794C15.3449 5.96924 15.341 5.92065 15.3338 5.87248H16.6545C16.6931 5.87248 16.7301 5.88781 16.7574 5.91509C16.7847 5.94236 16.8 5.97936 16.8 6.01794ZM7.2 6.01794C7.2 5.97936 7.21532 5.94236 7.2426 5.91509C7.26988 5.88781 7.30688 5.87248 7.34545 5.87248H14.3273C14.3658 5.87248 14.4028 5.88781 14.4301 5.91509C14.4574 5.94236 14.4727 5.97936 14.4727 6.01794V18.9634H7.2V6.01794ZM13.1636 12.7088C13.1636 12.8815 13.1125 13.0502 13.0166 13.1937C12.9207 13.3372 12.7844 13.4491 12.6249 13.5151C12.4654 13.5812 12.2899 13.5985 12.1206 13.5648C11.9514 13.5311 11.7959 13.448 11.6738 13.326C11.5517 13.2039 11.4686 13.0484 11.435 12.8791C11.4013 12.7098 11.4186 12.5343 11.4846 12.3749C11.5507 12.2154 11.6625 12.0791 11.806 11.9832C11.9496 11.8873 12.1183 11.8361 12.2909 11.8361C12.5224 11.8361 12.7444 11.9281 12.908 12.0917C13.0717 12.2554 13.1636 12.4774 13.1636 12.7088Z" fill="white"/>
                                            </svg>
                                            <span>T3</span>
                                        </div>
                                        <div class="searchForm__item--flat__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect width="24" height="24" rx="4" fill="#DAB56B"/>
                                                <path d="M19.5636 18.9634H17.6727V6.01794C17.6727 5.7479 17.5655 5.48892 17.3745 5.29797C17.1836 5.10703 16.9246 4.99976 16.6545 4.99976H7.34545C7.07542 4.99976 6.81644 5.10703 6.62549 5.29797C6.43455 5.48892 6.32727 5.7479 6.32727 6.01794V18.9634H4.43636C4.32063 18.9634 4.20964 19.0094 4.12781 19.0912C4.04597 19.173 4 19.284 4 19.3998C4 19.5155 4.04597 19.6265 4.12781 19.7083C4.20964 19.7901 4.32063 19.8361 4.43636 19.8361H19.5636C19.6794 19.8361 19.7904 19.7901 19.8722 19.7083C19.954 19.6265 20 19.5155 20 19.3998C20 19.284 19.954 19.173 19.8722 19.0912C19.7904 19.0094 19.6794 18.9634 19.5636 18.9634ZM16.8 6.01794V18.9634H15.3455V6.01794C15.3449 5.96924 15.341 5.92065 15.3338 5.87248H16.6545C16.6931 5.87248 16.7301 5.88781 16.7574 5.91509C16.7847 5.94236 16.8 5.97936 16.8 6.01794ZM7.2 6.01794C7.2 5.97936 7.21532 5.94236 7.2426 5.91509C7.26988 5.88781 7.30688 5.87248 7.34545 5.87248H14.3273C14.3658 5.87248 14.4028 5.88781 14.4301 5.91509C14.4574 5.94236 14.4727 5.97936 14.4727 6.01794V18.9634H7.2V6.01794ZM13.1636 12.7088C13.1636 12.8815 13.1125 13.0502 13.0166 13.1937C12.9207 13.3372 12.7844 13.4491 12.6249 13.5151C12.4654 13.5812 12.2899 13.5985 12.1206 13.5648C11.9514 13.5311 11.7959 13.448 11.6738 13.326C11.5517 13.2039 11.4686 13.0484 11.435 12.8791C11.4013 12.7098 11.4186 12.5343 11.4846 12.3749C11.5507 12.2154 11.6625 12.0791 11.806 11.9832C11.9496 11.8873 12.1183 11.8361 12.2909 11.8361C12.5224 11.8361 12.7444 11.9281 12.908 12.0917C13.0717 12.2554 13.1636 12.4774 13.1636 12.7088Z" fill="white"/>
                                            </svg>
                                            <span>T3</span>
                                        </div>
                                    </div>
                                    <span class="searchForm__item--span">Prix</span>
                                    <p class="searchForm__item--price">€50,000</p>
                                </div>
                            </a>
                        @endforeach
                        
                    </div>
                </div>
                <div class="searchForm__content"></div>
            </form>
        </div>
    </section>
    <!-- // Search Form Section -->

    <!-- Section Resons -->
    <section class="reasons">
        <div class="container">
            <div class="reasons__inner">
                <div class="reasons__header">
                    <h2 class="reasons__h2">Les bonnes raisons de choisir l'immobilier neuf en Île-de-France pour votre investissement</h2>
                    <p class="reasons__header__p">Vous souhaitez découvrir les raisons pour lesquelles investir dans l'immobilier neuf en Île-de-France est incroyablement avantageux? Nous allons tout vous dévoiler!</p>
                </div>
                <div class="reasons__list">
                    <div class="reasons__item">
                        <svg class="reasons__icon" xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                            <rect width="74" height="74" rx="4" fill="#DAB56B"/>
                            <path d="M27.3192 11.0001C25.0875 10.985 23.2479 12.7466 23.1662 14.9769C23.1659 17.2288 24.9911 19.0547 27.243 19.055C27.2683 19.055 27.2938 19.0548 27.3192 19.0543C29.5433 19.0539 31.3459 17.2505 31.3454 15.0264C31.3449 12.8029 29.5427 11.0006 27.3192 11.0001ZM27.3208 16.5373C27.3203 16.5373 27.3198 16.5373 27.3192 16.5373C26.473 16.5931 25.742 15.9524 25.6862 15.1062C25.6834 15.0631 25.6823 15.02 25.6831 14.9768C25.7499 14.1307 26.471 13.4874 27.3192 13.517C28.1092 13.555 28.741 14.1869 28.779 14.9768C28.8073 15.8104 28.1544 16.509 27.3208 16.5373Z" fill="white"/>
                            <path d="M39.999 23.6799C39.8416 21.6806 38.2536 20.0925 36.2543 19.9352C34.072 19.9212 32.2915 21.679 32.2775 23.8615C32.2774 23.8783 32.2774 23.8951 32.2775 23.9119C32.1802 26.106 33.88 27.9637 36.0741 28.061C36.1341 28.0637 36.1941 28.065 36.2542 28.0649C38.4992 27.888 40.1759 25.9248 39.999 23.6799ZM36.2543 25.5731C35.4342 25.5635 34.7772 24.8908 34.7868 24.0708C34.7873 24.0262 34.7899 23.9816 34.7945 23.9371C34.7665 23.1452 35.3858 22.4807 36.1777 22.4528C36.2032 22.4518 36.2288 22.4516 36.2544 22.452C37.0484 22.5025 37.6774 23.1422 37.7142 23.9371C37.7571 24.79 37.1066 25.5191 36.2543 25.5731Z" fill="white"/>
                            <path d="M38.2921 12.3055C37.9096 12.133 37.4663 12.1627 37.1101 12.3843L24.5254 24.9691C24.1336 25.5432 24.2814 26.3261 24.8555 26.7179C25.0341 26.8398 25.2412 26.9136 25.4567 26.9323C25.7887 26.9276 26.1053 26.7919 26.3377 26.5547L38.9223 13.97C39.2079 13.3365 38.9258 12.5912 38.2921 12.3055Z" fill="white"/>
                            <path d="M45.6173 43.7706L29.3075 29.2982C28.8285 28.8659 28.1002 28.8659 27.6212 29.2982L11.4121 43.7706C10.8977 44.238 10.8597 45.0339 11.3271 45.5483C11.5618 45.8067 11.8935 45.9559 12.2427 45.9603H15.5399V61.7415C15.5399 62.4365 16.1034 63 16.7984 63H40.2814C40.9765 63 41.54 62.4365 41.54 61.7415V45.9603H44.7868C45.4818 45.9516 46.0381 45.3811 46.0294 44.6862C46.0249 44.337 45.8758 44.0054 45.6173 43.7706ZM30.6415 60.5082L26.4635 60.4831V52.3534H30.6415V60.5082ZM40.3066 43.4434C39.6115 43.4434 39.0481 44.0069 39.0481 44.7019V60.4831H33.1584V51.095C33.1584 50.3999 32.595 49.8365 31.8999 49.8365H25.205C24.5099 49.8365 23.9465 50.3999 23.9465 51.095V60.5084H18.0568V44.7018C18.0568 44.0068 17.4934 43.4433 16.7983 43.4433H15.5399L28.4769 31.9661L41.4895 43.4937L40.3066 43.4434Z" fill="white"/>
                            <path d="M22.9648 29.3234H16.7984C16.1034 29.3234 15.5399 29.8869 15.5399 30.5819V37.6042H18.0568V31.9662H21.7063V32.2178L24.2232 32.0919V30.5818C24.2233 29.8868 23.6599 29.3234 22.9648 29.3234Z" fill="white"/>
                            <path d="M62.9215 38.3215C62.6795 38.0384 62.3246 37.8772 61.9523 37.8809H58.4789V30.0532C58.4789 29.3582 57.9154 28.7947 57.2204 28.7947H49.4431C48.748 28.7947 48.1845 29.3582 48.1845 30.0532V37.8809H44.7867C44.0917 37.8739 43.5225 38.4316 43.5156 39.1266C43.5118 39.4989 43.6731 39.8538 43.9561 40.0958L52.4885 47.6466C52.9636 48.064 53.6746 48.064 54.1497 47.6466L62.7827 40.0958C63.3111 39.6442 63.3731 38.8498 62.9215 38.3215ZM53.3442 45.0038L48.1342 40.3978H49.4682C50.1632 40.3978 50.7267 39.8344 50.7267 39.1393V31.3116H55.9871V39.1393C55.9871 39.8344 56.5506 40.3978 57.2456 40.3978H58.6552L53.3442 45.0038Z" fill="white"/>
                            <path d="M58.4787 24.4657H48.1845V26.9826H58.4787V24.4657Z" fill="white"/>
                            <path d="M58.4787 19.91H48.1845V22.4269H58.4787V19.91Z" fill="white"/>
                            <path d="M58.4787 15.5054H48.1845V18.0223H58.4787V15.5054Z" fill="white"/>
                            <path d="M58.4787 11.0001H48.1845V13.517H58.4787V11.0001Z" fill="white"/>
                        </svg>
                        <div class="reasons__item__header">L'investissement dans le neuf encouragé par l’État</div>
                        <div class="reasons__p">Les investisseurs locatifs, préparez-vous à découvrir des systèmes pour maximiser vos avantages!</div>
                        <div class="reasons__p">Vous connaissez la loi Pinel? Cette déduction fiscale est très appréciée des investisseurs! Elle offre des réductions d'impôts allant de 12% à 21%, selon la durée de location choisie, de 6 ans à 12 ans.</div>
                        <div class="reasons__p">Le dispositif Censi-Bouvard, c'est la formule magique pour alléger votre facture fiscale! Imaginez une réduction d'impôt de 11% sur le prix d'achat (jusqu'à 300 000€) et la récupération de la TVA à hauteur de 20%. Il suffit de louer votre bien meublé pendant 9 ans en résidence de services ou en tant que location meublée non professionnelle (LMNP).</div>
                        <div class="reasons__p">Et ce n'est pas tout ! Lorsque vous investissez dans un bien immobilier neuf, les frais de notaire sont moindres, seulement 2 % à 3 % comparés à 6 % à 7% dans l'ancien. C'est de l'argent en moins à sortir de votre poche, pour profiter encore plus de vos investissements!</div>
                        <div class="reasons__p">Et pour couronner le tout, certaines collectivités locales font preuve de générosité en accordant une exonération partielle de la Taxe Foncière pendant les deux premières années.</div>
                        <a class="reasons__a" href="#">Lire la suite</a>
                    </div>
                    <div class="reasons__item">
                        <svg class="reasons__icon" xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                            <rect width="74" height="74" rx="4" fill="#DAB56B"/>
                            <path d="M21.174 47.1738H25.6958C25.9956 47.1738 26.2831 47.0547 26.4951 46.8427C26.7071 46.6307 26.8262 46.3432 26.8262 46.0434C26.8262 45.7436 26.7071 45.456 26.4951 45.244C26.2831 45.032 25.9956 44.9129 25.6958 44.9129H21.174C20.8742 44.9129 20.5866 45.032 20.3746 45.244C20.1626 45.456 20.0435 45.7436 20.0435 46.0434C20.0435 46.3432 20.1626 46.6307 20.3746 46.8427C20.5866 47.0547 20.8742 47.1738 21.174 47.1738Z" fill="white"/>
                            <path d="M48.3046 47.1738H52.8264C53.1262 47.1738 53.4137 47.0547 53.6257 46.8427C53.8377 46.6307 53.9568 46.3432 53.9568 46.0434C53.9568 45.7436 53.8377 45.456 53.6257 45.244C53.4137 45.032 53.1262 44.9129 52.8264 44.9129H48.3046C48.0048 44.9129 47.7172 45.032 47.5052 45.244C47.2932 45.456 47.1741 45.7436 47.1741 46.0434C47.1741 46.3432 47.2932 46.6307 47.5052 46.8427C47.7172 47.0547 48.0048 47.1738 48.3046 47.1738Z" fill="white"/>
                            <path d="M59.609 29.0868H58.4785V24.565H59.609C59.8325 24.565 60.051 24.4987 60.2369 24.3744C60.4227 24.2502 60.5676 24.0737 60.6531 23.8672C60.7387 23.6606 60.7611 23.4334 60.7175 23.2141C60.6739 22.9949 60.5662 22.7935 60.4082 22.6354L53.6256 15.8527C53.4136 15.6408 53.1261 15.5218 52.8263 15.5218C52.5266 15.5218 52.2391 15.6408 52.0271 15.8527L45.2445 22.6354C45.0864 22.7935 44.9788 22.9949 44.9352 23.2141C44.8916 23.4334 44.914 23.6606 44.9995 23.8672C45.0851 24.0737 45.2299 24.2502 45.4158 24.3744C45.6016 24.4987 45.8201 24.565 46.0437 24.565H47.1741V29.0868H42.6524V20.0433H43.7828C44.0063 20.0432 44.2249 19.9769 44.4107 19.8527C44.5966 19.7285 44.7414 19.5519 44.827 19.3454C44.9125 19.1389 44.9349 18.9116 44.8913 18.6924C44.8477 18.4731 44.7401 18.2717 44.582 18.1136L37.7994 11.331C37.5874 11.1191 37.2999 11 37.0002 11C36.7004 11 36.4129 11.1191 36.2009 11.331L29.4183 18.1136C29.2602 18.2717 29.1526 18.4731 29.109 18.6924C29.0654 18.9116 29.0878 19.1389 29.1733 19.3454C29.2589 19.5519 29.4037 19.7285 29.5896 19.8527C29.7754 19.9769 29.994 20.0432 30.2175 20.0433H31.3479V29.0868H26.8262V24.565H27.9566C28.1802 24.565 28.3987 24.4987 28.5845 24.3744C28.7704 24.2502 28.9152 24.0737 29.0008 23.8672C29.0863 23.6606 29.1087 23.4334 29.0651 23.2141C29.0215 22.9949 28.9139 22.7935 28.7558 22.6354L21.9732 15.8527C21.7612 15.6408 21.4737 15.5218 21.174 15.5218C20.8742 15.5218 20.5867 15.6408 20.3748 15.8527L13.5921 22.6354C13.4341 22.7935 13.3264 22.9949 13.2828 23.2141C13.2392 23.4334 13.2616 23.6606 13.3472 23.8672C13.4327 24.0737 13.5776 24.2502 13.7634 24.3744C13.9493 24.4987 14.1678 24.565 14.3913 24.565H15.5218V29.0868H14.3913C13.4922 29.0878 12.6302 29.4454 11.9944 30.0812C11.3586 30.717 11.001 31.579 11 32.4781V59.6087C11.001 60.5078 11.3586 61.3698 11.9944 62.0056C12.6302 62.6414 13.4922 62.999 14.3913 63H59.609C60.5081 62.999 61.3701 62.6414 62.0059 62.0056C62.6417 61.3698 62.9993 60.5078 63.0003 59.6087V32.4781C62.9993 31.579 62.6417 30.717 62.0059 30.0812C61.3701 29.4454 60.5081 29.0878 59.609 29.0868ZM51.8101 31.3477C52.0659 33.6281 53.089 35.754 54.7116 37.3766C56.3343 38.9992 58.4601 40.0223 60.7406 40.2782V51.8109C58.4601 52.0667 56.3343 53.0898 54.7116 54.7125C53.089 56.3351 52.0659 58.4609 51.8101 60.7414H22.1914C21.9358 58.4607 20.9128 56.3346 19.2901 54.7118C17.6675 53.0889 15.5415 52.0656 13.2609 51.8098V40.2782C15.5413 40.0223 17.6672 38.9992 19.2898 37.3766C20.9124 35.754 21.9356 33.6281 22.1914 31.3477H51.8101ZM60.7394 32.4781V38.0498C59.0496 37.8033 57.4844 37.0178 56.2768 35.8102C55.0693 34.6027 54.2838 33.0375 54.0373 31.3477H59.609C59.9088 31.3477 60.1963 31.4668 60.4083 31.6788C60.6203 31.8908 60.7394 32.1783 60.7394 32.4781ZM48.7009 22.3758L52.8263 18.2504L56.9518 22.3758C56.7361 22.4566 56.5503 22.6012 56.4191 22.7904C56.2879 22.9796 56.2176 23.2044 56.2177 23.4346V29.0868H49.435V23.4346C49.435 23.2044 49.3647 22.9796 49.2336 22.7904C49.1024 22.6012 48.9165 22.4566 48.7009 22.3758ZM32.8747 17.8541L37.0002 13.7286L41.1256 17.8541C40.91 17.9348 40.7241 18.0794 40.5929 18.2686C40.4617 18.4578 40.3915 18.6826 40.3915 18.9128V29.0868H33.6088V18.9128C33.6088 18.6826 33.5386 18.4578 33.4074 18.2686C33.2762 18.0794 33.0903 17.9348 32.8747 17.8541ZM17.0485 22.3758L21.174 18.2504L25.2994 22.3758C25.0838 22.4566 24.8979 22.6012 24.7668 22.7904C24.6356 22.9796 24.5653 23.2044 24.5653 23.4346V29.0868H17.7826V23.4346C17.7827 23.2044 17.7124 22.9796 17.5812 22.7904C17.45 22.6012 17.2642 22.4566 17.0485 22.3758ZM13.2609 32.4781C13.2609 32.1783 13.38 31.8908 13.592 31.6788C13.804 31.4668 14.0915 31.3477 14.3913 31.3477H19.963C19.7165 33.0375 18.931 34.6027 17.7235 35.8102C16.5159 37.0178 14.9508 37.8033 13.2609 38.0498V32.4781ZM14.3913 60.7391C14.0915 60.7391 13.804 60.62 13.592 60.408C13.38 60.196 13.2609 59.9085 13.2609 59.6087V54.037C14.9508 54.2835 16.5159 55.069 17.7235 56.2766C18.931 57.4841 19.7165 59.0493 19.963 60.7391H14.3913ZM60.7394 59.6087C60.7394 59.9085 60.6203 60.196 60.4083 60.408C60.1963 60.62 59.9088 60.7391 59.609 60.7391H54.0373C54.2838 59.0493 55.0693 57.4841 56.2768 56.2766C57.4844 55.069 59.0496 54.2835 60.7394 54.037V59.6087Z" fill="white"/>
                            <path d="M41.2232 48.911C41.6959 48.911 42.0782 49.0429 42.3702 49.3067C42.6761 49.5567 42.829 49.89 42.829 50.3065C42.829 50.6259 42.7386 50.9175 42.5579 51.1814C42.3772 51.4452 42.12 51.6674 41.7863 51.8479C40.9938 52.2645 40.0415 52.4728 38.9292 52.4728C37.1774 52.4728 35.7524 52.0006 34.654 51.0564C33.5557 50.0983 32.9162 48.7582 32.7354 47.0364H31.1713V46.6198H32.6937C32.6798 46.4809 32.6729 46.2657 32.6729 45.9741C32.6729 45.6269 32.6937 45.2867 32.7354 44.9534H31.1713V44.5369H32.798C32.9787 43.4676 33.3541 42.5373 33.9241 41.7458C34.5081 40.9404 35.231 40.3224 36.093 39.892C36.955 39.4476 37.9004 39.2254 38.9292 39.2254C39.5548 39.2254 40.0971 39.274 40.5559 39.3712C41.0147 39.4684 41.4248 39.6281 41.7863 39.8503C42.4814 40.2808 42.829 40.7946 42.829 41.3917C42.829 41.8082 42.6761 42.1485 42.3702 42.4123C42.0782 42.6622 41.6959 42.7872 41.2232 42.7872C40.7783 42.7872 40.4099 42.6761 40.1179 42.454C39.8399 42.2179 39.7008 41.8985 39.7008 41.4958C39.7008 41.2042 39.8051 40.9195 40.0137 40.6418C40.2361 40.3641 40.5281 40.1766 40.8895 40.0794C40.7088 39.9267 40.4655 39.8086 40.1596 39.7253C39.8677 39.642 39.5409 39.6004 39.1795 39.6004C38.248 39.6004 37.5042 40.0378 36.948 40.9126C36.3919 41.7735 36.0513 42.9816 35.9262 44.5369H40.2639L40.0345 44.9534H35.9053C35.8914 45.1479 35.8845 45.4603 35.8845 45.8908C35.8845 46.224 35.8914 46.467 35.9053 46.6198H39.0961L38.8458 47.0364H35.9053C36.1139 50.3968 37.2052 52.077 39.1795 52.077C39.9997 52.077 40.5628 51.9243 40.8687 51.6188C40.5072 51.5216 40.2222 51.3341 40.0137 51.0564C39.8051 50.7787 39.7008 50.494 39.7008 50.2024C39.7008 49.7997 39.8399 49.4873 40.1179 49.2651C40.396 49.029 40.7644 48.911 41.2232 48.911Z" fill="white"/>
                        </svg>
                        <div class="reasons__item__header">Le neuf très attractif en Île-de-France</div>
                        <div class="reasons__p">En Île-de-France, le marché immobilier neuf est tout simplement irrésistible! Cette région dynamique offre un environnement propice à l'investissement immobilier. Les quartiers se développent à une vitesse folle, attirant une demande constante et créant ainsi une véritable effervescence.</div>
                        <div class="reasons__p">Et devinez quoi? La valeur des biens immobiliers neufs grimpe en flèche! C'est comme si vous aviez un superpouvoir qui fait fructifier votre patrimoine à vue d'œil.</div>
                        <div class="reasons__p">Alors, préparez-vous à vivre une aventure passionnante et lucrative dans l'immobilier neuf en Île-de-France!</div>
                        <a class="reasons__a" href="#">Lire la suite</a>
                    </div>
                    <div class="reasons__item">
                        <svg class="reasons__icon" xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                            <rect width="74" height="74" rx="4" fill="#DAB56B"/>
                            <path d="M30.9334 36.9999H27.4667C27.2369 36.9999 27.0164 37.0912 26.8539 37.2537C26.6914 37.4163 26.6001 37.6367 26.6001 37.8665V43.9332C26.6001 44.1631 26.6914 44.3835 26.8539 44.5461C27.0164 44.7086 27.2369 44.7999 27.4667 44.7999H30.9334C31.1633 44.7999 31.3837 44.7086 31.5462 44.5461C31.7088 44.3835 31.8001 44.1631 31.8001 43.9332V37.8665C31.8001 37.6367 31.7088 37.4163 31.5462 37.2537C31.3837 37.0912 31.1633 36.9999 30.9334 36.9999ZM30.0667 43.0666H28.3334V38.7332H30.0667V43.0666Z" fill="white"/>
                            <path d="M43.0668 44.7999H46.5335C46.7633 44.7999 46.9838 44.7086 47.1463 44.5461C47.3088 44.3835 47.4001 44.1631 47.4001 43.9332V37.8665C47.4001 37.6367 47.3088 37.4163 47.1463 37.2537C46.9838 37.0912 46.7633 36.9999 46.5335 36.9999H43.0668C42.8369 36.9999 42.6165 37.0912 42.454 37.2537C42.2914 37.4163 42.2001 37.6367 42.2001 37.8665V43.9332C42.2001 44.1631 42.2914 44.3835 42.454 44.5461C42.6165 44.7086 42.8369 44.7999 43.0668 44.7999ZM43.9335 38.7332H45.6668V43.0666H43.9335V38.7332Z" fill="white"/>
                            <path d="M49.2014 27.5324C50.1393 27.1062 50.8941 26.359 51.33 25.4255L57.1202 28.4365C57.7335 28.7554 58.4186 28.9109 59.1095 28.888C59.8004 28.8652 60.4738 28.6647 61.0647 28.306C61.6556 27.9472 62.1441 27.4423 62.4831 26.8398C62.8221 26.2374 63.0002 25.5578 63.0002 24.8665C63.0002 24.712 62.9589 24.5602 62.8805 24.427C62.8021 24.2938 62.6895 24.184 62.5544 24.109L39.1543 11.1089C38.9596 11.0009 38.7307 10.9719 38.5152 11.0279L19.6667 15.9447V15.3332C19.6667 15.1033 19.5754 14.8829 19.4129 14.7203C19.2503 14.5578 19.0299 14.4665 18.8 14.4665H11.8667C11.6368 14.4665 11.4164 14.5578 11.2538 14.7203C11.0913 14.8829 11 15.1033 11 15.3332V27.4665C11 27.6964 11.0913 27.9168 11.2538 28.0794C11.4164 28.2419 11.6368 28.3332 11.8667 28.3332H18.8C19.0299 28.3332 19.2503 28.2419 19.4129 28.0794C19.5754 27.9168 19.6667 27.6964 19.6667 27.4665V26.5999H24.8667C24.9473 26.5999 25.0275 26.5886 25.1051 26.5665L31.4043 24.7668L19.125 34.5898C19.0299 34.666 18.9519 34.7613 18.8962 34.8696C18.8404 34.9779 18.8081 35.0968 18.8013 35.2184C18.7946 35.3401 18.8136 35.4618 18.8571 35.5756C18.9005 35.6894 18.9675 35.7928 19.0536 35.879L21.6537 38.479C21.8021 38.6275 21.9995 38.7171 22.209 38.731C22.4186 38.745 22.626 38.6824 22.7929 38.5548L23.1332 38.2948V47.8016C22.952 48.0421 22.7968 48.3011 22.67 48.5743L16.88 45.5634C16.2667 45.2444 15.5816 45.0889 14.8907 45.1118C14.1998 45.1346 13.5264 45.3351 12.9355 45.6939C12.3446 46.0526 11.8561 46.5575 11.5171 47.16C11.1781 47.7624 11 48.442 11 49.1333C11 49.2878 11.0413 49.4396 11.1197 49.5728C11.1981 49.706 11.3107 49.8158 11.4458 49.8909L34.8459 62.8909C35.0408 62.9992 35.2699 63.0282 35.4856 62.9719L54.3335 58.0551V58.6666C54.3335 58.8965 54.4248 59.1169 54.5873 59.2795C54.7499 59.442 54.9703 59.5333 55.2002 59.5333H62.1335C62.3634 59.5333 62.5838 59.442 62.7464 59.2795C62.9089 59.1169 63.0002 58.8965 63.0002 58.6666V46.5333C63.0002 46.3034 62.9089 46.083 62.7464 45.9204C62.5838 45.7579 62.3634 45.6666 62.1335 45.6666H55.2002C54.9703 45.6666 54.7499 45.7579 54.5873 45.9204C54.4248 46.083 54.3335 46.3034 54.3335 46.5333V47.3999H50.8668V38.2948L51.2071 38.5548C51.374 38.6824 51.5814 38.745 51.791 38.731C52.0005 38.7171 52.1979 38.6275 52.3463 38.479L54.9464 35.879C55.0325 35.7928 55.0995 35.6894 55.1429 35.5756C55.1864 35.4618 55.2054 35.3401 55.1987 35.2184C55.1919 35.0968 55.1596 34.9779 55.1038 34.8696C55.0481 34.7613 54.9701 34.666 54.875 34.5898L46.3973 27.8081C47.3363 28.0347 48.3244 27.9377 49.2014 27.5328V27.5324ZM17.9334 26.5999H12.7333V16.1998H17.9334V26.5999ZM56.0668 47.3999H61.2669V57.8H56.0668V47.3999ZM54.3335 49.1333V56.2637L35.3841 61.2071L12.7835 48.6512C12.8579 48.3066 13.0108 47.9839 13.2302 47.708C13.4497 47.4321 13.7298 47.2106 14.0488 47.0607C14.3678 46.9107 14.7171 46.8363 15.0696 46.8434C15.422 46.8504 15.7681 46.9386 16.0809 47.1012L33.1336 55.9691C33.3376 56.0752 33.5753 56.0959 33.7946 56.0266C34.0138 55.9573 34.1965 55.8038 34.3026 55.5998C34.4086 55.3958 34.4293 55.1581 34.3601 54.9388C34.2908 54.7196 34.1373 54.5368 33.9333 54.4308L24.2102 49.375C24.4668 48.7833 24.9343 48.3084 25.5218 48.0425C25.8737 47.8778 26.2586 47.7959 26.647 47.803C27.0355 47.8101 27.4172 47.906 27.7628 48.0833L36.6125 52.5081C36.8064 52.6051 37.0297 52.6258 37.2382 52.5663L49.2549 49.1333H54.3335ZM37.0699 34.4007C37.0583 34.4007 37.0465 34.3999 37.0348 34.3999H37.0001C36.9886 34.3999 36.9771 34.4001 36.9657 34.4005C36.0495 34.4197 35.1773 34.7968 34.5358 35.4511C33.8943 36.1054 33.5345 36.9849 33.5334 37.9012V49.031L28.538 46.5333C27.971 46.2477 27.3477 46.0911 26.713 46.0747C26.0783 46.0584 25.4478 46.1826 24.8667 46.4385V36.9694L37.0001 27.6909L49.1335 36.9694V47.3999C49.0529 47.3999 48.9727 47.4112 48.8952 47.4333L40.4668 49.8415V37.9012C40.4701 36.9896 40.1165 36.1129 39.4817 35.4587C38.8468 34.8045 37.9812 34.4247 37.0699 34.4007ZM38.7334 37.9012V50.3368L37.0861 50.8074L35.2668 49.8977V37.9012C35.2673 37.4355 35.4514 36.9887 35.7791 36.6577C36.1068 36.3268 36.5518 36.1383 37.0175 36.1332C37.2467 36.1354 37.4731 36.1829 37.6838 36.2732C37.8944 36.3634 38.085 36.4946 38.2446 36.659C38.4042 36.8235 38.5296 37.0179 38.6135 37.2311C38.6974 37.4444 38.7382 37.6721 38.7334 37.9012ZM53.036 35.3384L51.6577 36.7173L37.5265 25.9115C37.3754 25.796 37.1904 25.7333 37.0001 25.7333C36.8098 25.7333 36.6249 25.796 36.4737 25.9115L22.3425 36.7173L20.9638 35.3384L35.7204 23.534L36.9141 23.193L39.4193 24.4457L53.036 35.3384ZM46.2374 25.9162L37.3877 21.4914C37.1938 21.3944 36.9705 21.3736 36.762 21.4332L24.7453 24.8665H19.6667V17.7361L38.6161 12.7927L61.2167 25.3486C61.1423 25.6932 60.9895 26.0159 60.77 26.2918C60.5505 26.5677 60.2704 26.7892 59.9514 26.9392C59.6324 27.0891 59.2831 27.1635 58.9306 27.1565C58.5782 27.1494 58.2321 27.0612 57.9194 26.8987L40.8666 18.0307C40.6627 17.9246 40.4249 17.904 40.2056 17.9732C39.9864 18.0425 39.8037 18.196 39.6976 18.4C39.5916 18.604 39.5709 18.8417 39.6402 19.061C39.7094 19.2802 39.8629 19.463 40.0669 19.569L49.79 24.6249C49.5334 25.2166 49.0659 25.6916 48.4784 25.9575C48.1265 26.122 47.7415 26.2039 47.3531 26.1967C46.9647 26.1895 46.583 26.0936 46.2374 25.9162Z" fill="white"/>
                        </svg>
                        <div class="reasons__item__header">Un investissement aux risques limités</div>
                        <div class="reasons__p">Pas besoin de stresser, on a tout prévu pour que votre investissement soit un vrai jeu d'enfant! En optant pour l'immobilier neuf, vous bénéficiez de garantie constructeur 
                            qui vous met à l'abri des soucis liés aux vices de construction. Plus de sueurs froides à craindre!</div>
                        <div class="reasons__p">De plus, avec la demande locative élevée en Île-de-France, vous pouvez dormir sur vos deux oreilles en évitant les cauchemars de vacance locative. 
                            Vous aurez l'assurance de trouver rapidement des locataires intéressés par votre bien immobilier neuf, ce qui vous garantit une rentabilité solide et régulière.</div>
                        <a class="reasons__a" href="#">Lire la suite</a>
                    </div>
                    <div class="reasons__item">
                        <svg class="reasons__icon" xmlns="http://www.w3.org/2000/svg" width="74" height="74" viewBox="0 0 74 74" fill="none">
                            <rect width="74" height="74" rx="4" fill="#DAB56B"/>
                            <path d="M54.93 18.8527L37.6965 11.0741C37.4772 10.9753 37.2258 10.9753 37.0065 11.0741L30.9865 13.7914V13.0642C30.9865 12.601 30.611 12.2255 30.1478 12.2255H25.7537C25.2905 12.2255 24.915 12.601 24.915 13.0642V16.5319L19.7729 18.8527C19.2041 19.1094 18.8988 19.7157 19.0303 20.3271C19.1619 20.9385 19.6897 21.3655 20.3137 21.3655H22.2354L25.241 38.7112C23.323 41.2514 22.1839 44.4113 22.1839 47.8325C22.1839 56.1958 28.988 63 37.3514 63C45.7148 63 52.5189 56.1959 52.5189 47.8325C52.5189 44.4114 51.3798 41.2516 49.4618 38.7112L52.4675 21.3655H54.3892C55.0134 21.3655 55.5411 20.9385 55.6727 20.3269C55.8043 19.7156 55.4988 19.1092 54.93 18.8527ZM26.5924 13.9028H29.3091V14.5484L26.5924 15.7746V13.9028ZM37.3514 61.3227C29.913 61.3227 23.8613 55.2711 23.8613 47.8326C23.8613 40.3942 29.913 34.3426 37.3514 34.3426C44.7898 34.3426 50.8415 40.3942 50.8415 47.8326C50.8415 55.2711 44.7898 61.3227 37.3514 61.3227ZM30.2478 28.5027H36.3525L35.8125 32.7427C34.0941 32.9166 32.4599 33.3795 30.9582 34.0805L30.2478 28.5027ZM51.7616 19.6881C51.3535 19.6881 51.0048 19.9817 50.9351 20.3836L48.0413 37.0834C45.3329 34.3897 41.6155 32.7104 37.5131 32.6672L38.1369 27.77C38.1674 27.5311 38.0936 27.2906 37.9343 27.1097C37.775 26.9289 37.5458 26.8253 37.3049 26.8253H29.2955C29.0545 26.8253 28.8254 26.9289 28.666 27.1097C28.5068 27.2906 28.4329 27.5311 28.4635 27.77L29.3764 34.9366C28.3908 35.5483 27.4799 36.2692 26.6614 37.0833L23.7678 20.3836C23.6981 19.9817 23.3494 19.6881 22.9414 19.6881H21.9995L37.3515 12.7588L52.7035 19.6881H51.7616ZM39.9848 29.3788C40.0922 29.732 40.418 29.9734 40.7871 29.9734H45.0906C45.4598 29.9734 45.7855 29.732 45.893 29.3788L47.5903 23.8019C47.6677 23.5477 47.62 23.2719 47.4618 23.0584C47.3036 22.845 47.0535 22.719 46.7879 22.719H39.0895C38.8239 22.719 38.5738 22.845 38.4156 23.0584C38.2574 23.2719 38.2097 23.5477 38.2871 23.8019L39.9848 29.3788ZM45.6561 24.3965L44.4693 28.296H41.4087L40.2218 24.3965H45.6561ZM37.3514 36.0524C30.8558 36.0524 25.5713 41.337 25.5713 47.8326C25.5713 54.3282 30.8558 59.6128 37.3514 59.6128C43.847 59.6128 49.1317 54.3282 49.1317 47.8326C49.1317 41.337 43.847 36.0524 37.3514 36.0524ZM37.3514 57.9353C31.7807 57.9353 27.2487 53.4032 27.2487 47.8326C27.2487 42.262 31.7808 37.7298 37.3514 37.7298C42.922 37.7298 47.4542 42.2619 47.4542 47.8326C47.4542 53.4033 42.9221 57.9353 37.3514 57.9353Z" fill="white"/>
                            <path d="M40.4449 50.7736C40.8725 50.7736 41.2183 50.8931 41.4824 51.1321C41.7591 51.3585 41.8975 51.6604 41.8975 52.0377C41.8975 52.327 41.8157 52.5912 41.6522 52.8302C41.4887 53.0692 41.2561 53.2704 40.9542 53.434C40.2374 53.8113 39.3759 54 38.3697 54C36.7851 54 35.496 53.5723 34.5025 52.717C33.5089 51.8491 32.9304 50.6352 32.7669 49.0755H31.3521V48.6981H32.7292C32.7166 48.5723 32.7103 48.3774 32.7103 48.1132C32.7103 47.7987 32.7292 47.4906 32.7669 47.1887H31.3521V46.8113H32.8235C32.987 45.8428 33.3266 45 33.8422 44.283C34.3704 43.5535 35.0244 42.9937 35.8041 42.6038C36.5839 42.2013 37.4391 42 38.3697 42C38.9357 42 39.4262 42.044 39.8412 42.1321C40.2562 42.2201 40.6272 42.3648 40.9542 42.566C41.583 42.956 41.8975 43.4214 41.8975 43.9623C41.8975 44.3396 41.7591 44.6478 41.4824 44.8868C41.2183 45.1132 40.8725 45.2264 40.4449 45.2264C40.0424 45.2264 39.7091 45.1258 39.445 44.9245C39.1935 44.7107 39.0677 44.4214 39.0677 44.0566C39.0677 43.7925 39.1621 43.5346 39.3507 43.283C39.5519 43.0314 39.816 42.8616 40.143 42.7736C39.9795 42.6352 39.7595 42.5283 39.4828 42.4528C39.2187 42.3774 38.9231 42.3396 38.5961 42.3396C37.7535 42.3396 37.0807 42.7359 36.5776 43.5283C36.0745 44.3082 35.7664 45.4025 35.6532 46.8113H39.5771L39.3696 47.1887H35.6344C35.6218 47.3648 35.6155 47.6478 35.6155 48.0377C35.6155 48.3396 35.6218 48.5597 35.6344 48.6981H38.5207L38.2943 49.0755H35.6344C35.823 52.1195 36.8103 53.6415 38.5961 53.6415C39.3381 53.6415 39.8475 53.5031 40.1242 53.2264C39.7972 53.1384 39.5394 52.9686 39.3507 52.717C39.1621 52.4654 39.0677 52.2076 39.0677 51.9434C39.0677 51.5786 39.1935 51.2956 39.445 51.0943C39.6966 50.8805 40.0298 50.7736 40.4449 50.7736Z" fill="white"/>
                        </svg>
                        <div class="reasons__item__header">Valeur qui augmentera à moyen/long terme</div>
                        <div class="reasons__p">Voyez grand pour votre avenir! En choisissant d'investir dans l'immobilier neuf en Île-de-France, vous optez pour une valeur sûre qui ne fera que s'élever, s'élever, s'élever!</div>
                        <div class="reasons__p">Avec les nombreux projets d'infrastructures en cours et à venir dans la région, la demande pour les biens immobiliers neufs est constamment en hausse. Cela signifie que votre patrimoine a toutes les chances de briller pour les années à venir!</div>
                        <div class="reasons__p">En investissant dans l'immobilier neuf en Île-de-France, vous êtes au sommet de la tendance et vous vous positionnez pour profiter pleinement de la croissance du marché immobilier.</div>
                        <a class="reasons__a" href="#">Lire la suite</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Where to Invest 2 -->
    <section class="whereToInvest2">
        <div class="container">
            <h2 class="global__h2">Où souhaitez-vous investir dans <br>  l'immobilier neuf en Ile de France?</h2>
            <div class="whereToInvest2__inner">
                <div class="whereToInvest2__item">
                    <img    srcset="{{ asset('images/content/where_to_invest2_1.webp') }}, 1920
                                    {{ asset('images/content/where_to_invest2_1_800.webp') }}, 500"
                            src="{{ asset('images/content/where_to_invest2_1.webp') }}" 
                            width="1600"
                            height="340"
                            alt="" 
                            class="whereToInvest2__img">
                    <div class="whereToInvest2__item--content">
                        <p class="whereToInvest2__item--p">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.00081 10.1042C8.45521 10.1042 7.92185 9.94237 7.4682 9.63925C7.01455 9.33612 6.66097 8.90529 6.45218 8.40121C6.24338 7.89714 6.18875 7.34248 6.29519 6.80736C6.40164 6.27224 6.66437 5.7807 7.05017 5.3949C7.43597 5.0091 7.92751 4.74636 8.46263 4.63992C8.99775 4.53348 9.55242 4.58811 10.0565 4.7969C10.5606 5.0057 10.9914 5.35928 11.2945 5.81293C11.5976 6.26658 11.7594 6.79993 11.7594 7.34554C11.7586 8.0769 11.4676 8.77806 10.9505 9.29521C10.4333 9.81236 9.73217 10.1033 9.00081 10.1042ZM9.00081 5.69036C8.67345 5.69036 8.35344 5.78744 8.08125 5.96931C7.80905 6.15118 7.59691 6.40969 7.47163 6.71213C7.34635 7.01457 7.31358 7.34737 7.37744 7.66844C7.44131 7.98952 7.59895 8.28444 7.83043 8.51592C8.06191 8.7474 8.35683 8.90504 8.6779 8.9689C8.99897 9.03277 9.33177 8.99999 9.63422 8.87472C9.93666 8.74944 10.1952 8.53729 10.377 8.2651C10.5589 7.99291 10.656 7.6729 10.656 7.34554C10.6555 6.90669 10.481 6.48595 10.1707 6.17564C9.8604 5.86533 9.43965 5.6908 9.00081 5.69036Z" fill="#FAFAFA"/>
                                <path d="M9.00061 16.7246L4.34627 11.2355C4.2816 11.1531 4.21759 11.0702 4.15427 10.9867C3.35922 9.93942 2.92972 8.66021 2.93165 7.34533C2.93165 5.73574 3.57105 4.19208 4.70921 3.05393C5.84736 1.91577 7.39102 1.27637 9.00061 1.27637C10.6102 1.27637 12.1539 1.91577 13.292 3.05393C14.4302 4.19208 15.0696 5.73574 15.0696 7.34533C15.0715 8.65962 14.6422 9.93824 13.8475 10.9851L13.847 10.9867C13.847 10.9867 13.6814 11.2041 13.6566 11.2333L9.00061 16.7246ZM5.03482 10.3219C5.03592 10.3219 5.16392 10.4918 5.19316 10.5282L9.00061 15.0187L12.813 10.5222C12.8373 10.4918 12.9664 10.3208 12.967 10.3202C13.6164 9.46457 13.9674 8.41956 13.9661 7.34533C13.9661 6.0284 13.443 4.7654 12.5118 3.83418C11.5805 2.90297 10.3175 2.37982 9.00061 2.37982C7.68368 2.37982 6.42068 2.90297 5.48946 3.83418C4.55825 4.7654 4.0351 6.0284 4.0351 7.34533C4.03394 8.42022 4.38477 9.46583 5.03482 10.3219Z" fill="#FAFAFA"/>
                            </svg>
                            IMMOBILIER NEUF PARIS
                        </p>
                        <a href="#" class="whereToInvest2__item--a">découvrir</a>
                    </div>
                </div>
                <div class="whereToInvest2__item">
                    <img    srcset="{{ asset('images/content/where_to_invest2_2.webp') }}, 1920"
                            src="{{ asset('images/content/where_to_invest2_2.webp') }}" 
                            width="520"
                            height="340"
                            alt="" 
                            class="whereToInvest2__img">
                    <div class="whereToInvest2__item--content">
                        <p class="whereToInvest2__item--p">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.00081 10.1042C8.45521 10.1042 7.92185 9.94237 7.4682 9.63925C7.01455 9.33612 6.66097 8.90529 6.45218 8.40121C6.24338 7.89714 6.18875 7.34248 6.29519 6.80736C6.40164 6.27224 6.66437 5.7807 7.05017 5.3949C7.43597 5.0091 7.92751 4.74636 8.46263 4.63992C8.99775 4.53348 9.55242 4.58811 10.0565 4.7969C10.5606 5.0057 10.9914 5.35928 11.2945 5.81293C11.5976 6.26658 11.7594 6.79993 11.7594 7.34554C11.7586 8.0769 11.4676 8.77806 10.9505 9.29521C10.4333 9.81236 9.73217 10.1033 9.00081 10.1042ZM9.00081 5.69036C8.67345 5.69036 8.35344 5.78744 8.08125 5.96931C7.80905 6.15118 7.59691 6.40969 7.47163 6.71213C7.34635 7.01457 7.31358 7.34737 7.37744 7.66844C7.44131 7.98952 7.59895 8.28444 7.83043 8.51592C8.06191 8.7474 8.35683 8.90504 8.6779 8.9689C8.99897 9.03277 9.33177 8.99999 9.63422 8.87472C9.93666 8.74944 10.1952 8.53729 10.377 8.2651C10.5589 7.99291 10.656 7.6729 10.656 7.34554C10.6555 6.90669 10.481 6.48595 10.1707 6.17564C9.8604 5.86533 9.43965 5.6908 9.00081 5.69036Z" fill="#FAFAFA"/>
                                <path d="M9.00061 16.7246L4.34627 11.2355C4.2816 11.1531 4.21759 11.0702 4.15427 10.9867C3.35922 9.93942 2.92972 8.66021 2.93165 7.34533C2.93165 5.73574 3.57105 4.19208 4.70921 3.05393C5.84736 1.91577 7.39102 1.27637 9.00061 1.27637C10.6102 1.27637 12.1539 1.91577 13.292 3.05393C14.4302 4.19208 15.0696 5.73574 15.0696 7.34533C15.0715 8.65962 14.6422 9.93824 13.8475 10.9851L13.847 10.9867C13.847 10.9867 13.6814 11.2041 13.6566 11.2333L9.00061 16.7246ZM5.03482 10.3219C5.03592 10.3219 5.16392 10.4918 5.19316 10.5282L9.00061 15.0187L12.813 10.5222C12.8373 10.4918 12.9664 10.3208 12.967 10.3202C13.6164 9.46457 13.9674 8.41956 13.9661 7.34533C13.9661 6.0284 13.443 4.7654 12.5118 3.83418C11.5805 2.90297 10.3175 2.37982 9.00061 2.37982C7.68368 2.37982 6.42068 2.90297 5.48946 3.83418C4.55825 4.7654 4.0351 6.0284 4.0351 7.34533C4.03394 8.42022 4.38477 9.46583 5.03482 10.3219Z" fill="#FAFAFA"/>
                            </svg>
                            IMMOBILIER <br> NEUF 92
                        </p>
                        <a href="#" class="whereToInvest2__item--a">découvrir</a>
                    </div>
                </div>
                <div class="whereToInvest2__item">
                    <img    srcset="{{ asset('images/content/where_to_invest2_3.webp') }}, 1920"
                            src="{{ asset('images/content/where_to_invest2_3.webp') }}" 
                            width="520"
                            height="340"
                            alt="" 
                            class="whereToInvest2__img">
                    <div class="whereToInvest2__item--content">
                        <p class="whereToInvest2__item--p">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.00081 10.1042C8.45521 10.1042 7.92185 9.94237 7.4682 9.63925C7.01455 9.33612 6.66097 8.90529 6.45218 8.40121C6.24338 7.89714 6.18875 7.34248 6.29519 6.80736C6.40164 6.27224 6.66437 5.7807 7.05017 5.3949C7.43597 5.0091 7.92751 4.74636 8.46263 4.63992C8.99775 4.53348 9.55242 4.58811 10.0565 4.7969C10.5606 5.0057 10.9914 5.35928 11.2945 5.81293C11.5976 6.26658 11.7594 6.79993 11.7594 7.34554C11.7586 8.0769 11.4676 8.77806 10.9505 9.29521C10.4333 9.81236 9.73217 10.1033 9.00081 10.1042ZM9.00081 5.69036C8.67345 5.69036 8.35344 5.78744 8.08125 5.96931C7.80905 6.15118 7.59691 6.40969 7.47163 6.71213C7.34635 7.01457 7.31358 7.34737 7.37744 7.66844C7.44131 7.98952 7.59895 8.28444 7.83043 8.51592C8.06191 8.7474 8.35683 8.90504 8.6779 8.9689C8.99897 9.03277 9.33177 8.99999 9.63422 8.87472C9.93666 8.74944 10.1952 8.53729 10.377 8.2651C10.5589 7.99291 10.656 7.6729 10.656 7.34554C10.6555 6.90669 10.481 6.48595 10.1707 6.17564C9.8604 5.86533 9.43965 5.6908 9.00081 5.69036Z" fill="#FAFAFA"/>
                                <path d="M9.00061 16.7246L4.34627 11.2355C4.2816 11.1531 4.21759 11.0702 4.15427 10.9867C3.35922 9.93942 2.92972 8.66021 2.93165 7.34533C2.93165 5.73574 3.57105 4.19208 4.70921 3.05393C5.84736 1.91577 7.39102 1.27637 9.00061 1.27637C10.6102 1.27637 12.1539 1.91577 13.292 3.05393C14.4302 4.19208 15.0696 5.73574 15.0696 7.34533C15.0715 8.65962 14.6422 9.93824 13.8475 10.9851L13.847 10.9867C13.847 10.9867 13.6814 11.2041 13.6566 11.2333L9.00061 16.7246ZM5.03482 10.3219C5.03592 10.3219 5.16392 10.4918 5.19316 10.5282L9.00061 15.0187L12.813 10.5222C12.8373 10.4918 12.9664 10.3208 12.967 10.3202C13.6164 9.46457 13.9674 8.41956 13.9661 7.34533C13.9661 6.0284 13.443 4.7654 12.5118 3.83418C11.5805 2.90297 10.3175 2.37982 9.00061 2.37982C7.68368 2.37982 6.42068 2.90297 5.48946 3.83418C4.55825 4.7654 4.0351 6.0284 4.0351 7.34533C4.03394 8.42022 4.38477 9.46583 5.03482 10.3219Z" fill="#FAFAFA"/>
                              </svg>
                            IMMOBILIER <br> NEUF 93
                        </p>
                        <a href="#" class="whereToInvest2__item--a">découvrir</a>
                    </div>
                </div>
                <div class="whereToInvest2__item">
                    <img    srcset="{{ asset('images/content/where_to_invest2_4.webp') }}, 1920"
                            src="{{ asset('images/content/where_to_invest2_4.webp') }}" 
                            width="520"
                            height="340"
                            alt="" 
                            class="whereToInvest2__img">
                    <div class="whereToInvest2__item--content">
                        <p class="whereToInvest2__item--p">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.00081 10.1042C8.45521 10.1042 7.92185 9.94237 7.4682 9.63925C7.01455 9.33612 6.66097 8.90529 6.45218 8.40121C6.24338 7.89714 6.18875 7.34248 6.29519 6.80736C6.40164 6.27224 6.66437 5.7807 7.05017 5.3949C7.43597 5.0091 7.92751 4.74636 8.46263 4.63992C8.99775 4.53348 9.55242 4.58811 10.0565 4.7969C10.5606 5.0057 10.9914 5.35928 11.2945 5.81293C11.5976 6.26658 11.7594 6.79993 11.7594 7.34554C11.7586 8.0769 11.4676 8.77806 10.9505 9.29521C10.4333 9.81236 9.73217 10.1033 9.00081 10.1042ZM9.00081 5.69036C8.67345 5.69036 8.35344 5.78744 8.08125 5.96931C7.80905 6.15118 7.59691 6.40969 7.47163 6.71213C7.34635 7.01457 7.31358 7.34737 7.37744 7.66844C7.44131 7.98952 7.59895 8.28444 7.83043 8.51592C8.06191 8.7474 8.35683 8.90504 8.6779 8.9689C8.99897 9.03277 9.33177 8.99999 9.63422 8.87472C9.93666 8.74944 10.1952 8.53729 10.377 8.2651C10.5589 7.99291 10.656 7.6729 10.656 7.34554C10.6555 6.90669 10.481 6.48595 10.1707 6.17564C9.8604 5.86533 9.43965 5.6908 9.00081 5.69036Z" fill="#FAFAFA"/>
                                <path d="M9.00061 16.7246L4.34627 11.2355C4.2816 11.1531 4.21759 11.0702 4.15427 10.9867C3.35922 9.93942 2.92972 8.66021 2.93165 7.34533C2.93165 5.73574 3.57105 4.19208 4.70921 3.05393C5.84736 1.91577 7.39102 1.27637 9.00061 1.27637C10.6102 1.27637 12.1539 1.91577 13.292 3.05393C14.4302 4.19208 15.0696 5.73574 15.0696 7.34533C15.0715 8.65962 14.6422 9.93824 13.8475 10.9851L13.847 10.9867C13.847 10.9867 13.6814 11.2041 13.6566 11.2333L9.00061 16.7246ZM5.03482 10.3219C5.03592 10.3219 5.16392 10.4918 5.19316 10.5282L9.00061 15.0187L12.813 10.5222C12.8373 10.4918 12.9664 10.3208 12.967 10.3202C13.6164 9.46457 13.9674 8.41956 13.9661 7.34533C13.9661 6.0284 13.443 4.7654 12.5118 3.83418C11.5805 2.90297 10.3175 2.37982 9.00061 2.37982C7.68368 2.37982 6.42068 2.90297 5.48946 3.83418C4.55825 4.7654 4.0351 6.0284 4.0351 7.34533C4.03394 8.42022 4.38477 9.46583 5.03482 10.3219Z" fill="#FAFAFA"/>
                              </svg>
                            IMMOBILIER<br> NEUF 94
                        </p>
                        <a href="#" class="whereToInvest2__item--a">découvrir</a>
                    </div>
                </div>
                <div class="whereToInvest2__item">
                    <img    srcset="{{ asset('images/content/where_to_invest2_5.webp') }}, 1920"
                            src="{{ asset('images/content/where_to_invest2_5.webp') }}" 
                            width="520"
                            height="340"
                            alt="" 
                            class="whereToInvest2__img">
                    <div class="whereToInvest2__item--content">
                        <p class="whereToInvest2__item--p">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.00081 10.1042C8.45521 10.1042 7.92185 9.94237 7.4682 9.63925C7.01455 9.33612 6.66097 8.90529 6.45218 8.40121C6.24338 7.89714 6.18875 7.34248 6.29519 6.80736C6.40164 6.27224 6.66437 5.7807 7.05017 5.3949C7.43597 5.0091 7.92751 4.74636 8.46263 4.63992C8.99775 4.53348 9.55242 4.58811 10.0565 4.7969C10.5606 5.0057 10.9914 5.35928 11.2945 5.81293C11.5976 6.26658 11.7594 6.79993 11.7594 7.34554C11.7586 8.0769 11.4676 8.77806 10.9505 9.29521C10.4333 9.81236 9.73217 10.1033 9.00081 10.1042ZM9.00081 5.69036C8.67345 5.69036 8.35344 5.78744 8.08125 5.96931C7.80905 6.15118 7.59691 6.40969 7.47163 6.71213C7.34635 7.01457 7.31358 7.34737 7.37744 7.66844C7.44131 7.98952 7.59895 8.28444 7.83043 8.51592C8.06191 8.7474 8.35683 8.90504 8.6779 8.9689C8.99897 9.03277 9.33177 8.99999 9.63422 8.87472C9.93666 8.74944 10.1952 8.53729 10.377 8.2651C10.5589 7.99291 10.656 7.6729 10.656 7.34554C10.6555 6.90669 10.481 6.48595 10.1707 6.17564C9.8604 5.86533 9.43965 5.6908 9.00081 5.69036Z" fill="#FAFAFA"/>
                                <path d="M9.00061 16.7246L4.34627 11.2355C4.2816 11.1531 4.21759 11.0702 4.15427 10.9867C3.35922 9.93942 2.92972 8.66021 2.93165 7.34533C2.93165 5.73574 3.57105 4.19208 4.70921 3.05393C5.84736 1.91577 7.39102 1.27637 9.00061 1.27637C10.6102 1.27637 12.1539 1.91577 13.292 3.05393C14.4302 4.19208 15.0696 5.73574 15.0696 7.34533C15.0715 8.65962 14.6422 9.93824 13.8475 10.9851L13.847 10.9867C13.847 10.9867 13.6814 11.2041 13.6566 11.2333L9.00061 16.7246ZM5.03482 10.3219C5.03592 10.3219 5.16392 10.4918 5.19316 10.5282L9.00061 15.0187L12.813 10.5222C12.8373 10.4918 12.9664 10.3208 12.967 10.3202C13.6164 9.46457 13.9674 8.41956 13.9661 7.34533C13.9661 6.0284 13.443 4.7654 12.5118 3.83418C11.5805 2.90297 10.3175 2.37982 9.00061 2.37982C7.68368 2.37982 6.42068 2.90297 5.48946 3.83418C4.55825 4.7654 4.0351 6.0284 4.0351 7.34533C4.03394 8.42022 4.38477 9.46583 5.03482 10.3219Z" fill="#FAFAFA"/>
                              </svg>
                            IMMOBILIER <br> NEUF 95
                        </p>
                        <a href="#" class="whereToInvest2__item--a">découvrir</a>
                    </div>
                </div>
                <div class="whereToInvest2__item">
                    <img    srcset="{{ asset('images/content/where_to_invest2_6.webp') }}, 1920"
                            src="{{ asset('images/content/where_to_invest2_6.webp') }}" 
                            width="520"
                            height="340"
                            alt="" 
                            class="whereToInvest2__img">
                    <div class="whereToInvest2__item--content">
                        <p class="whereToInvest2__item--p">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.00081 10.1042C8.45521 10.1042 7.92185 9.94237 7.4682 9.63925C7.01455 9.33612 6.66097 8.90529 6.45218 8.40121C6.24338 7.89714 6.18875 7.34248 6.29519 6.80736C6.40164 6.27224 6.66437 5.7807 7.05017 5.3949C7.43597 5.0091 7.92751 4.74636 8.46263 4.63992C8.99775 4.53348 9.55242 4.58811 10.0565 4.7969C10.5606 5.0057 10.9914 5.35928 11.2945 5.81293C11.5976 6.26658 11.7594 6.79993 11.7594 7.34554C11.7586 8.0769 11.4676 8.77806 10.9505 9.29521C10.4333 9.81236 9.73217 10.1033 9.00081 10.1042ZM9.00081 5.69036C8.67345 5.69036 8.35344 5.78744 8.08125 5.96931C7.80905 6.15118 7.59691 6.40969 7.47163 6.71213C7.34635 7.01457 7.31358 7.34737 7.37744 7.66844C7.44131 7.98952 7.59895 8.28444 7.83043 8.51592C8.06191 8.7474 8.35683 8.90504 8.6779 8.9689C8.99897 9.03277 9.33177 8.99999 9.63422 8.87472C9.93666 8.74944 10.1952 8.53729 10.377 8.2651C10.5589 7.99291 10.656 7.6729 10.656 7.34554C10.6555 6.90669 10.481 6.48595 10.1707 6.17564C9.8604 5.86533 9.43965 5.6908 9.00081 5.69036Z" fill="#FAFAFA"/>
                                <path d="M9.00061 16.7246L4.34627 11.2355C4.2816 11.1531 4.21759 11.0702 4.15427 10.9867C3.35922 9.93942 2.92972 8.66021 2.93165 7.34533C2.93165 5.73574 3.57105 4.19208 4.70921 3.05393C5.84736 1.91577 7.39102 1.27637 9.00061 1.27637C10.6102 1.27637 12.1539 1.91577 13.292 3.05393C14.4302 4.19208 15.0696 5.73574 15.0696 7.34533C15.0715 8.65962 14.6422 9.93824 13.8475 10.9851L13.847 10.9867C13.847 10.9867 13.6814 11.2041 13.6566 11.2333L9.00061 16.7246ZM5.03482 10.3219C5.03592 10.3219 5.16392 10.4918 5.19316 10.5282L9.00061 15.0187L12.813 10.5222C12.8373 10.4918 12.9664 10.3208 12.967 10.3202C13.6164 9.46457 13.9674 8.41956 13.9661 7.34533C13.9661 6.0284 13.443 4.7654 12.5118 3.83418C11.5805 2.90297 10.3175 2.37982 9.00061 2.37982C7.68368 2.37982 6.42068 2.90297 5.48946 3.83418C4.55825 4.7654 4.0351 6.0284 4.0351 7.34533C4.03394 8.42022 4.38477 9.46583 5.03482 10.3219Z" fill="#FAFAFA"/>
                              </svg>
                            IMMOBILIER <br> NEUF 77
                        </p>
                        <a href="#" class="whereToInvest2__item--a">découvrir</a>
                    </div>
                </div>
                <div class="whereToInvest2__item">
                    <img    srcset="{{ asset('images/content/where_to_invest2_7.webp') }}, 1920"
                            src="{{ asset('images/content/where_to_invest2_7.webp') }}" 
                            width="520"
                            height="340"
                            alt="" 
                            class="whereToInvest2__img">
                    <div class="whereToInvest2__item--content">
                        <p class="whereToInvest2__item--p">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.00081 10.1042C8.45521 10.1042 7.92185 9.94237 7.4682 9.63925C7.01455 9.33612 6.66097 8.90529 6.45218 8.40121C6.24338 7.89714 6.18875 7.34248 6.29519 6.80736C6.40164 6.27224 6.66437 5.7807 7.05017 5.3949C7.43597 5.0091 7.92751 4.74636 8.46263 4.63992C8.99775 4.53348 9.55242 4.58811 10.0565 4.7969C10.5606 5.0057 10.9914 5.35928 11.2945 5.81293C11.5976 6.26658 11.7594 6.79993 11.7594 7.34554C11.7586 8.0769 11.4676 8.77806 10.9505 9.29521C10.4333 9.81236 9.73217 10.1033 9.00081 10.1042ZM9.00081 5.69036C8.67345 5.69036 8.35344 5.78744 8.08125 5.96931C7.80905 6.15118 7.59691 6.40969 7.47163 6.71213C7.34635 7.01457 7.31358 7.34737 7.37744 7.66844C7.44131 7.98952 7.59895 8.28444 7.83043 8.51592C8.06191 8.7474 8.35683 8.90504 8.6779 8.9689C8.99897 9.03277 9.33177 8.99999 9.63422 8.87472C9.93666 8.74944 10.1952 8.53729 10.377 8.2651C10.5589 7.99291 10.656 7.6729 10.656 7.34554C10.6555 6.90669 10.481 6.48595 10.1707 6.17564C9.8604 5.86533 9.43965 5.6908 9.00081 5.69036Z" fill="#FAFAFA"/>
                                <path d="M9.00061 16.7246L4.34627 11.2355C4.2816 11.1531 4.21759 11.0702 4.15427 10.9867C3.35922 9.93942 2.92972 8.66021 2.93165 7.34533C2.93165 5.73574 3.57105 4.19208 4.70921 3.05393C5.84736 1.91577 7.39102 1.27637 9.00061 1.27637C10.6102 1.27637 12.1539 1.91577 13.292 3.05393C14.4302 4.19208 15.0696 5.73574 15.0696 7.34533C15.0715 8.65962 14.6422 9.93824 13.8475 10.9851L13.847 10.9867C13.847 10.9867 13.6814 11.2041 13.6566 11.2333L9.00061 16.7246ZM5.03482 10.3219C5.03592 10.3219 5.16392 10.4918 5.19316 10.5282L9.00061 15.0187L12.813 10.5222C12.8373 10.4918 12.9664 10.3208 12.967 10.3202C13.6164 9.46457 13.9674 8.41956 13.9661 7.34533C13.9661 6.0284 13.443 4.7654 12.5118 3.83418C11.5805 2.90297 10.3175 2.37982 9.00061 2.37982C7.68368 2.37982 6.42068 2.90297 5.48946 3.83418C4.55825 4.7654 4.0351 6.0284 4.0351 7.34533C4.03394 8.42022 4.38477 9.46583 5.03482 10.3219Z" fill="#FAFAFA"/>
                              </svg>
                            IMMOBILIER <br> NEUF 78
                        </p>
                        <a href="#" class="whereToInvest2__item--a">découvrir</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Measures -->
    <section class="measures">
        <div class="container">
            <div class="measures__inner">
                <div class="measures__left">
                    <div class="measures__header">
                        <h2 class="measures__h2">Dispositifs fiscaux pour l'immobilier neuf</h2>
                        <p class="measures__p">Souhaitez-vous réaliser des économies financières? Grâce à ces dispositifs fiscaux, vous serez ravi(e) de constater les avantages qui se reflètent sur votre compte en banque!</p>
                    </div>
                    <div class="measures__item__first">
                        <img    srcset="images/content/measures_first.webp 1920w,
                                            images/content/measures_first_600.webp 700w,
                                            images/content/measures_first_400.webp 500w"
                                    src="images/content/measures_first.webp" 
                                    width="815"
                                    height="928"
                                    alt=""
                                    title="" 
                                    class="measures__img__first">
                        <div class="measures__item__content">
                            <p class="measures__item__header">Loueur en meublé non professionnel</p>
                            <p class="measures__p">Avec le statut de Loueur en Meublé Non Professionnel (LMNP), c'est vous qui allez faire des étincelles! Ce régime vous offre des avantages fiscaux attrayants tels que l'amortissement du bien et la possibilité de récupérer la TVA.</p>
                            <p class="measures__p">Vous pouvez ainsi optimiser votre investissement immobilier en bénéficiant de réductions d'impôts tout en générant des revenus locatifs stables. C'est une véritable clé vers la réussite financière!</p> 
                        </div>    
                    </div>
                </div>
                <div class="measures__right">
                    <div class="measures__item__second">
                        <img    srcset="images/content/measures_second.webp 1920w,
                                            images/content/measures_second_600.webp 700w,
                                            images/content/measures_second_400.webp 500w"
                                    src="images/content/measures_second.webp" 
                                    width="815"
                                    height="812"
                                    alt=""
                                    title="" 
                                    class="measures__img__second">
                        <div class="measures__item__content">
                            <p class="measures__item__header">Dispositif Pinel</p>
                            <p class="measures__p">Avec le dispositif Pinel, c'est comme si l'État vous faisait un cadeau en or! En investissant dans un logement neuf destiné à la location, vous pouvez bénéficier d'une réduction d'impôts allant jusqu'à 63 000 euros sur une période de 12 ans.</p>
                            <p class="measures__p">C'est une véritable opportunité de faire fructifier votre patrimoine tout en allégeant votre fiscalité!</p> 
                        </div>
                    </div>
                    <div class="measures__item">
                        <div class="measures__item__hidden">
                            <img    srcset="images/content/measures_first.webp 1920w,
                                                images/content/measures_first_600.webp 700w,
                                                images/content/measures_first_400.webp 500w"
                                        src="images/content/measures_first.webp" 
                                        width="815"
                                        height="928"
                                        alt=""
                                        title="" 
                                        class="measures__img__first">
                            <div class="measures__item__content">
                                <p class="measures__item__header">Loueur en meublé non professionnel</p>
                                <p class="measures__p">Avec le statut de Loueur en Meublé Non Professionnel (LMNP), c'est vous qui allez faire des étincelles! Ce régime vous offre des avantages fiscaux attrayants tels que l'amortissement du bien et la possibilité de récupérer la TVA.</p>
                                <p class="measures__p">Vous pouvez ainsi optimiser votre investissement immobilier en bénéficiant de réductions d'impôts tout en générant des revenus locatifs stables. C'est une véritable clé vers la réussite financière!</p> 
                            </div>    
                        </div>
                    </div>
                    <div class="measures__item__third">
                        <img    srcset="images/content/measures_third.webp 1920w,
                                        images/content/measures_third_600.webp 700w,
                                        images/content/measures_third_400.webp 500w"
                                src="images/content/measures_third.webp" 
                                width="815"
                                height="812"
                                alt=""
                                title="" 
                                class="measures__img__third">
                        <div class="measures__item__content">
                            <p class="measures__item__header">Loueur en Meublé Professionnel</p>
                            <p class="measures__p">Le statut de Loueur en Meublé Professionnel (LMP) est fait pour les investisseurs ambitieux qui souhaitent tirer profit de la location meublée. En obtenant ce statut, vous pourrez bénéficier d'avantages fiscaux attractifs et même réduire vos charges sociales.</p>
                            <p class="measures__p">C'est une véritable opportunité de développer votre activité de location meublée tout en maximisant votre rentabilité. Avec le statut LMP, vous êtes prêt à faire de grands pas vers le succès financier!</p> 
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Home Page FAQ Section -->
    <section class="homePageFAQ" id="faq">
        <div class="container">
            <div class="homePageFAQ__inner">
                <h2 class="homePageFAQ__h2">Foire Aux Questions</h2>
                <div class="homePageFAQ__item">
                    <div class="homePageFAQ__item--icon__btn active"></div>
                    <h3 class="homePageFAQ__h3 active">Quels sont les frais pour un appartement neuf ?</h3>
                    <p class="homePageFAQ__p active">Lorsque vous achetez un appartement neuf, il est important de connaître les différents frais associés à cette acquisition. Généralement, ces frais comprennent les frais de notaire, les frais de garantie, les frais de dossier et les frais liés à l'obtention d'un prêt immobilier. Ils représentent en moyenne 2 à 3 % du prix d'achat du bien.</p>
                    <p class="homePageFAQ__p active">C'est une étape à ne pas négliger dans votre projet d'investissement immobilier, mais avec une bonne planification, vous pouvez anticiper ces coûts et les intégrer dans votre budget.</p>
                </div>
                <div class="homePageFAQ__item">
                    <div class="homePageFAQ__item--icon__btn"></div>
                    <h3 class="homePageFAQ__h3">Pourquoi acheter un logement neuf ?</h3>
                    <p class="homePageFAQ__p">Acheter un logement neuf, c'est faire le choix du confort optimal et des avantages nombreux ! En optant pour un logement neuf, vous bénéficiez d'une garantie constructeur qui vous protège des éventuels vices de construction.</p>
                    <p class="homePageFAQ__p">De plus, vous profitez d'un logement conforme aux normes énergétiques actuelles, ce qui vous permet de réaliser des économies sur vos factures énergétiques tout en contribuant à la préservation de l'environnement.</p>
                    <p class="homePageFAQ__p">Ajoutez à cela une exonération de taxe foncière pendant les premières années et des frais de notaire réduits, et vous avez toutes les raisons de choisir un logement neuf pour concrétiser vos projets immobiliers.</p>
                </div>
                <div class="homePageFAQ__item">
                    <div class="homePageFAQ__item--icon__btn"></div>
                    <h3 class="homePageFAQ__h3">Comment se passe l'achat d'un appartement neuf ?</h3>
                    <p class="homePageFAQ__p">Pas de panique, nous vous expliquons tout le processus pas à pas ! Tout commence par le choix d'un programme immobilier qui correspond à vos besoins et à vos envies. Une fois que vous avez trouvé le bien idéal, vous signez un contrat de réservation pour réserver votre futur appartement.</p>
                    <p class="homePageFAQ__p">Ensuite, vous vous rendez chez le notaire pour signer l'acte de vente et effectuer le paiement du bien. Enfin, une fois que la construction est terminée, vous pouvez prendre possession de votre nouvel appartement et commencer à profiter de votre nouveau chez-vous.</p>
                    <p class="homePageFAQ__p">Avec notre équipe d'experts à vos côtés, vous serez guidé tout au long du processus pour que votre achat d'appartement neuf soit une expérience sans stress et pleine de satisfaction.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Widget Section -->
    @include('redesign/page_parts/blog-widget')
</main>
@endsection