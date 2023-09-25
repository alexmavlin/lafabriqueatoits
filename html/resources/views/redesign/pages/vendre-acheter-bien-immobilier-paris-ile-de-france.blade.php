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
                    @if(isset($data['breadcrumbs']) && $data['breadcrumbs'])
                    @if ($data['breadcrumbs'] != false)
                        <nav class="breadcrumbs acheter">
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

    <!-- Section Optimize -->
    <section class="optimize">
        <div class="container">
            <div class="optimize__inner">
                <h2 class="optimize__h2">Optimisez votre projet d'achat et de vente immobilier avec La Fabrique à Toits!</h2>
                <p class="optimize__p">Faites de votre projet immobilier une réussite totale avec La Fabrique à Toits ! Que vous cherchiez à acheter ou vendre un bien immobilier, notre équipe est là pour vous accompagner à chaque étape. Grâce à notre expertise, notre réseau et notre passion, nous vous offrons les meilleures opportunités et les solutions sur mesure.</p>
                <svg class="optimize__logo" xmlns="http://www.w3.org/2000/svg" width="932" height="659" viewBox="0 0 932 659" fill="none">
                  <path d="M932 466.023C932 470.367 931.954 474.665 931.815 478.963C928.811 589.877 887.034 691.04 819.561 769.557C734.111 869.01 607.392 932 465.977 932C337.426 932 220.988 879.939 136.8 795.772C136.014 794.986 135.974 793.726 136.706 792.889L156.897 769.789L199.494 720.946C200.318 720.002 201.775 719.976 202.639 720.882C204.343 722.668 206.081 724.442 207.871 726.162C210.042 728.379 212.213 730.462 214.428 732.5C214.524 732.588 214.609 732.687 214.7 732.781C214.816 732.899 214.948 733.008 215.08 733.141C217.16 735.128 219.24 737.069 221.366 738.917C223.307 740.627 225.248 742.337 227.235 744.047C228.806 745.434 230.424 746.82 232.041 748.114C233.659 749.5 235.322 750.841 236.986 752.135C239.158 753.937 241.376 755.647 243.641 757.403C245.813 759.021 248.031 760.684 250.249 762.302C253.669 764.797 257.182 767.247 260.694 769.65C319.247 809.348 389.908 832.501 465.977 832.501C542.045 832.501 612.661 809.348 671.214 769.696C671.439 769.561 671.62 769.426 671.842 769.206C671.854 769.195 671.87 769.188 671.887 769.188C671.9 769.188 671.913 769.184 671.923 769.177C691.974 755.592 710.593 740.022 727.456 722.742C792.433 656.703 832.501 566.03 832.501 466.023C832.501 446.29 830.93 426.88 827.926 407.978C800.105 233.15 648.661 99.499 465.977 99.499C263.559 99.499 99.4528 263.605 99.4528 466.023C99.4528 489.657 101.683 512.796 105.948 535.166C106.264 536.826 108.306 537.444 109.501 536.249L394.742 251.008C395.569 250.181 396.911 250.181 397.738 251.008L689.819 543.135C690.646 543.963 690.646 545.304 689.819 546.131L621.83 614.12C621.003 614.948 619.661 614.948 618.834 614.12L397.738 393.024C396.911 392.197 395.569 392.197 394.742 393.024L160.614 627.152C160.216 627.549 159.678 627.773 159.116 627.773H137.025L30.3943 627.909C29.5131 627.91 28.7225 627.366 28.4126 626.541C27.5719 624.303 26.7475 622.033 26.0185 619.731C9.15039 571.622 0 519.909 0 466.023C0 208.657 208.611 0 465.977 0C723.343 0 932 208.657 932 466.023Z" fill="url(#paint0_linear_611_6734)"/>
                  <path d="M445.874 603.688C445.874 602.518 444.925 601.569 443.755 601.569H347.153C345.983 601.569 345.035 602.518 345.035 603.688V716.649C345.035 717.82 345.983 718.768 347.153 718.768H443.755C444.925 718.768 445.874 717.82 445.874 716.649V603.688Z" fill="url(#paint1_linear_611_6734)"/>
                  <defs>
                    <linearGradient id="paint0_linear_611_6734" x1="-221.973" y1="-241.182" x2="1133.34" y2="1226.54" gradientUnits="userSpaceOnUse">
                      <stop offset="0.198761" stop-color="#0B0E3D" stop-opacity="0"/>
                      <stop offset="0.492939" stop-color="#0B0E3D"/>
                      <stop offset="0.803512" stop-color="#0B0E3D" stop-opacity="0"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_611_6734" x1="-221.973" y1="-241.182" x2="1133.34" y2="1226.54" gradientUnits="userSpaceOnUse">
                      <stop offset="0.198761" stop-color="#0B0E3D" stop-opacity="0"/>
                      <stop offset="0.492939" stop-color="#0B0E3D"/>
                      <stop offset="0.803512" stop-color="#0B0E3D" stop-opacity="0"/>
                    </linearGradient>
                  </defs>
                </svg> 
            </div>  
        </div>
    </section>

    <!-- Setion Buy -->
    <section class="buy">
        <div class="container">
            <div class="buy__header">
                <h2 class="global__h2">Acheter puis vendre son bien immobilier à Paris et en Île-de-France</h2>
                <p class="global__description">Acheter puis vendre votre bien immobilier à Paris et en Île-de-France n'a jamais été aussi simple! Avec notre service Double Projet, nous avons pour mission de faciliter votre vie!</p>
                <p class="global__description">Grâce à notre processus de recherche du bien idéal pour l'achat, à notre expertise en vente, ainsi qu'à notre réseau d'architectes, de notaires et de courtiers en financement, vous aurez toutes les cartes en main pour concrétiser votre projet!</p>
            </div>
            <div class="buy__content">
                <div class="buy__item__first">
                    <img    srcset="{{ asset('images/content/buy_first.webp') }} 1920w,
                                    {{ asset('images/content/buy_first_600.webp') }} 700w,
                                    {{ asset('images/content/buy_first_400.webp') }} 500w"
                            src="{{ asset('images/content/buy_first.webp') }}" 
                            width="1060"
                            height="458"
                            alt=""
                            title="" 
                            class="buy__first__img">
                    <div class="buy__item__content">
                        <p class="buy__item__title">Optimisez votre projet d'achat et de vente immobilier avec La Fabrique à Toits!</p>
                        <p class="buy__p">Notre mission : rendre votre expérience d'achat et de vente confortable et agréable.</p>
                        <p class="buy__p">Discutons de vos aspirations lors de notre « rendez-vous de Découverte Projet"! Une fois vos critères définis, nous cherchons la perle rare.</p>
                        <p class="buy__p">Passons maintenant à la vente de votre bien actuel. Expertise et estimation précise. Recevez notre « Carnet De Bord » personnalisé par e-mail, contenant tous les détails pour réaliser votre rêve immobilier.</p>
                        <p class="buy__p">Faites confiance à notre équipe pour optimiser chaque étape de votre projet immobilier!</p>    
                    </div>
                </div>
                <div class="buy__item__second">
                    <img    srcset="{{ asset('images/content/buy_second.webp')}} 1920w,
                                    {{ asset('images/content/buy_second_600.webp')}} 700w,
                                    {{ asset('images/content/buy_second_400.webp')}} 500w"
                            src="{{ asset('images/content/buy_second.webp')}}" 
                            width="1060"
                            height="458"
                            alt=""
                            title="" 
                            class="buy__second__img">
                    <div class="buy__item__content">
                        <p class="buy__item__title">Synchronisez votre projet : achat, vente, notaires, prêt relais et déménagement!</p>
                        <p class="buy__p">Pour assurer le succès de votre projet, deux stratégies distinctes sont essentielles:</p>
                        <ul class="buy__ul">
                            <li>Stratégie d'achat : trouvez votre coup de cœur rapidement et négociez au meilleur prix!</li>
                            <li>Stratégie de vente : mettez votre bien sur le marché au bon moment et dans les meilleures conditions pour maximiser son potentiel de vente.</li>
                        </ul>
                        <p class="buy__p">Grâce à notre expérience, nous synchronisons ces deux stratégies avec succès pour faciliter et sécuriser votre projet.</p>
                        <p class="buy__p">Une fois les stratégies en place, nous coordonnons les signatures chez le notaire pour chaque opération et organisons votre déménagement, de votre ancienne résidence à votre nouveau chez vous.</p>
                        <p class="buy__p">Faites confiance à notre expertise pour une synchronisation parfaite de votre projet immobilier, du début à la fin!</p>
                    </div>
                </div>
                <div class="buy__item__third">
                    <img    srcset="{{ asset('images/content/buy_third.webp')}} 1920w,
                                    {{ asset('images/content/buy_third_600.webp')}} 700w,
                                    {{ asset('images/content/buy_third_400.webp')}} 500w"
                            src="{{ asset('images/content/buy_third.webp')}}" 
                            width="1060"
                            height="458"
                            alt=""
                            title="" 
                            class="buy__third__img">
                    <div class="buy__item__content">
                        <p class="buy__item__title">À chaque instant, on est là pour vous!</p>
                        <p class="buy__p">Des assemblées générales aux travaux, c'est notre terrain de jeu ! Avec notre réseau et notre expertise, on donne un vrai coup de « boost » à vos démarches administratives. On contrôle les devis des travaux avec style et on gère même votre déménagement et emménagement avec panache! Votre double projet immobilier, c'est notre mission!</p>
                        <p class="buy__p">On met tout en œuvre pour qu'il soit un succès éclatant et surtout… sans stress ! Alors, prêts à vivre cette aventure avec une touche de fun?</p>
                    </div>
                </div>
            </div>
        </div>       
    </section>

    <!-- Section Steps -->
    <section class="steps">
        <div class="container">
            <div class="steps__header">
                <h2 class="global__h2">LES ÉTAPES DE NOTRE SERVICE DOUBLE PROJET</h2>
                <p class="global__description">Découvrez comment notre service Double Projet vous accompagne étape par étape dans votre aventure immobilière. De la recherche de votre nouveau bien jusqu'à la vente de votre résidence actuelle, nous mettons tout en œuvre pour rendre votre expérience agréable et sans soucis.</p>
            </div>
            <div class="steps__content">
                <div class="steps__list">
                    
                    <p class="steps__title">Achat</p>
                        
                    <p class="steps__title">Vente</p>
                </div>
                <div class="steps__list">
                    <div class="steps__item">
                        <p class="steps__item__title">Rapport stratégique</p>
                        <p class="steps__p">Nous établissons un rapport dans lequel les objectifs principaux liés à votre projet, les critères du bien souhaité, la zone de recherche ainsi que la stratégie d’approche vous seront détaillés.</p>
                    </div>
                    <div class="steps__item">
                        <p class="steps__item__title">Estimation & Stratégie</p>
                        <p class="steps__p">Après avoir visité votre bien, nous établissons une estimation précise de celui-ci et vous détaillons la stratégie de vente afin qu’elle puisse se concrétiser sans encombre.</p>
                    </div>
                </div>
                <div class="steps__row__item">
                    <p class="steps__item__title">Financement</p>
                    <p class="steps__p">Nous nous assurons que le montage financier soit en adéquation avec votre situation puis notre courtier travaillera sur votre offre de financement.</p>
                </div>
                <div class="steps__list">
                    <div class="steps__item">
                        <p class="steps__item__title">Prospection immobilière & Visites</p>
                        <p class="steps__p">Nous activons notre réseau d’agents immobiliers locaux ainsi que les alertes sur les plateformes de vente afin de gagner en réactivité et visiter les biens correspondants à vos critères.</p>
                    </div>
                    <div class="steps__item">
                        <p class="steps__item__title">Shooting et Annonces</p>
                        <p class="steps__p">Dès que votre offre d’achat est acceptée, nous démarrons le processus de vente de votre bien en organisant le shooting photo et en créant l’annonce.</p>
                    </div>
                </div>
                <div class="steps__list">
                    <div class="steps__item">
                        <p class="steps__item__title">Offre d’achat & Compromis</p>
                        <p class="steps__p">Vous avez eu un coup de cœur ? Nous vous conseillons lors de la négociation afin que votre offre soit acceptée, et nous serons à vos côtés à la signature du compromis de vente.</p>
                    </div>
                    <div class="steps__item">
                        <p class="steps__item__title">Optimisation des visites</p>
                        <p class="steps__p">Nous nous chargeons des demandes de renseignements et filtrons les visiteurs tout en nous assurant qu’ils disposent d'un accord de principe de la part d’un organisme bancaire.</p>
                    </div>
                </div>
                <div class="steps__list">
                    <div class="steps__item">
                        <p class="steps__item__title">Décryptage des diagnostics et dossier administratif</p>
                        <p class="steps__p">Nous analysons pour vous le dossier de diagnostic technique (DDT) et dossier administratif afin de nous assurer que les caractéristiques du bien correspondent aux éléments avancés par les vendeurs.</p>
                    </div>
                    <div class="steps__item">
                        <p class="steps__item__title">Négociation & Compromis</p>
                        <p class="steps__p">Un acheteur est intéressé ? Nous vous conseillons durant la négociation en évaluant notre marge de manœuvre et nous vous accompagnons lors de la signature du compromis de vente.</p>
                    </div>
                </div>
                <div class="steps__list">
                    <div class="steps__item">
                        <p class="steps__item__title">Visite technique de votre bien</p>
                        <p class="steps__p">Afin de s’assurer que votre bien est en bonne santé, notre expert bâtiment réalisera une inspection complète de votre futur logement.</p>
                    </div>
                </div>
                <div class="steps__row__item">
                    <p class="steps__item__title">Signatures chez le notaire</p>
                    <p class="steps__p">Nous mettons à votre disposition notre réseau notarial de confiance qui vous accompagnera et vous conseillera lors de la signature de l’acte authentique.</p>
                </div>
                <div class="steps__row__item">
                    <p class="steps__item__title">Démarches administratives</p>
                    <p class="steps__p">Notre équipe vous accompagne à chaque étape de votre projet, et notamment lors des démarches administratives auprès de la mairie ou de la copropriété.</p>
                </div>
                <div class="steps__row__item">
                    <p class="steps__item__title">Aide pour les travaux</p>
                    <p class="steps__p">Notre réseau d’architectes et d’entrepreneurs de confiance est à votre disposition pour réaliser des travaux ou simplement personnaliser votre nouveau chez vous.</p>
                </div>
                <div class="steps__row__item">
                    <p class="steps__item__title">Prise en charge du déménagement</p>
                    <p class="steps__p">Étape finale de notre aventure, nous pouvons inclure votre déménagement dans nos honoraires d’accompagnement afin de vous faciliter toujours un peu plus la vie.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Slider widget -->
    @include('redesign/page_parts/review-slider')

    <!-- Where to Invest Section -->
    <section class="whereToInvest" style="padding-top: 120px;">
        <div class="container">
            <div class="whereToInvest__inner">
                <h2 class="global__h2 mb-80">Où souhaitez-vous acheter ou investir dans l'immobilier ? </h2>
                <div class="whereToInvest__items--wrapper">
                    <div class="whereToInvest__item">
                        <a  href="{{ route('chasseur.show', 'paris')}}" class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_1.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Paris 75</h3>
                        </a>
                        <div class="whereToInvest__item--bottom">
                            <p class="whereToInvest__item--p">Explorez la magie de Paris!</p>
                            <a  href="{{ route('chasseur.show', 'paris')}}" 
                                title="chasseur appartement Paris"
                                class="whereToInvest__item--a">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                    <path d="M22.9421 33.4963C22.7577 33.3117 22.6542 33.0615 22.6542 32.8006C22.6542 32.5398 22.7577 32.2896 22.9421 32.105L33.0729 21.9725L6.5752 21.9725C6.31412 21.9725 6.06374 21.8688 5.87914 21.6842C5.69453 21.4996 5.59082 21.2492 5.59082 20.9881C5.59082 20.7271 5.69453 20.4767 5.87914 20.2921C6.06374 20.1075 6.31412 20.0038 6.5752 20.0038L33.0729 20.0038L22.9421 9.87127C22.7682 9.68466 22.6735 9.43785 22.678 9.18283C22.6825 8.92781 22.7858 8.68449 22.9662 8.50414C23.1465 8.32378 23.3899 8.22047 23.6449 8.21597C23.8999 8.21147 24.1467 8.30614 24.3333 8.48002L36.1458 20.2925C36.3302 20.4771 36.4337 20.7273 36.4337 20.9881C36.4337 21.249 36.3302 21.4992 36.1458 21.6838L24.3333 33.4963C24.1487 33.6806 23.8986 33.7842 23.6377 33.7842C23.3768 33.7842 23.1266 33.6806 22.9421 33.4963Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="whereToInvest__item">
                        <a  href="{{ route('chasseur.show', '92-hauts-de-seine')}}" class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_2.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Hauts-de-Seine 92</h3>
                        </a>
                        <div class="whereToInvest__item--bottom">
                            <p class="whereToInvest__item--p">Découvrez les trésors des Hauts-de-Seine!</p>
                            <a  href="{{ route('chasseur.show', '92-hauts-de-seine')}}" 
                                title="chasseur d'appartement 92" 
                                class="whereToInvest__item--a">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                    <path d="M22.9421 33.4963C22.7577 33.3117 22.6542 33.0615 22.6542 32.8006C22.6542 32.5398 22.7577 32.2896 22.9421 32.105L33.0729 21.9725L6.5752 21.9725C6.31412 21.9725 6.06374 21.8688 5.87914 21.6842C5.69453 21.4996 5.59082 21.2492 5.59082 20.9881C5.59082 20.7271 5.69453 20.4767 5.87914 20.2921C6.06374 20.1075 6.31412 20.0038 6.5752 20.0038L33.0729 20.0038L22.9421 9.87127C22.7682 9.68466 22.6735 9.43785 22.678 9.18283C22.6825 8.92781 22.7858 8.68449 22.9662 8.50414C23.1465 8.32378 23.3899 8.22047 23.6449 8.21597C23.8999 8.21147 24.1467 8.30614 24.3333 8.48002L36.1458 20.2925C36.3302 20.4771 36.4337 20.7273 36.4337 20.9881C36.4337 21.249 36.3302 21.4992 36.1458 21.6838L24.3333 33.4963C24.1487 33.6806 23.8986 33.7842 23.6377 33.7842C23.3768 33.7842 23.1266 33.6806 22.9421 33.4963Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="whereToInvest__item">
                        <a  href="{{ route('chasseur.show', '93-seine-saint-denis')}}" class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_3.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Seine-Saint-Denis 93</h3>
                        </a>
                        <div class="whereToInvest__item--bottom">
                            <p class="whereToInvest__item--p">Embarquez pour l'aventure en Seine-Saint-Denis!</p>
                            <a  href="{{ route('chasseur.show', '93-seine-saint-denis')}}" 
                                title="chasseur immobilier 93" 
                                class="whereToInvest__item--a">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                    <path d="M22.9421 33.4963C22.7577 33.3117 22.6542 33.0615 22.6542 32.8006C22.6542 32.5398 22.7577 32.2896 22.9421 32.105L33.0729 21.9725L6.5752 21.9725C6.31412 21.9725 6.06374 21.8688 5.87914 21.6842C5.69453 21.4996 5.59082 21.2492 5.59082 20.9881C5.59082 20.7271 5.69453 20.4767 5.87914 20.2921C6.06374 20.1075 6.31412 20.0038 6.5752 20.0038L33.0729 20.0038L22.9421 9.87127C22.7682 9.68466 22.6735 9.43785 22.678 9.18283C22.6825 8.92781 22.7858 8.68449 22.9662 8.50414C23.1465 8.32378 23.3899 8.22047 23.6449 8.21597C23.8999 8.21147 24.1467 8.30614 24.3333 8.48002L36.1458 20.2925C36.3302 20.4771 36.4337 20.7273 36.4337 20.9881C36.4337 21.249 36.3302 21.4992 36.1458 21.6838L24.3333 33.4963C24.1487 33.6806 23.8986 33.7842 23.6377 33.7842C23.3768 33.7842 23.1266 33.6806 22.9421 33.4963Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="whereToInvest__item">
                        <a  href="{{ route('chasseur.show', '94-val-de-marne')}}" class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_4.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Val de Marne 94</h3>
                        </a>
                        <div class="whereToInvest__item--bottom">
                            <p class="whereToInvest__item--p">Plongez dans le charme du Val de Marne!</p>
                            <a  href="{{ route('chasseur.show', '94-val-de-marne')}}" 
                                title="chasseur immobilier val de marne" 
                                class="whereToInvest__item--a">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                    <path d="M22.9421 33.4963C22.7577 33.3117 22.6542 33.0615 22.6542 32.8006C22.6542 32.5398 22.7577 32.2896 22.9421 32.105L33.0729 21.9725L6.5752 21.9725C6.31412 21.9725 6.06374 21.8688 5.87914 21.6842C5.69453 21.4996 5.59082 21.2492 5.59082 20.9881C5.59082 20.7271 5.69453 20.4767 5.87914 20.2921C6.06374 20.1075 6.31412 20.0038 6.5752 20.0038L33.0729 20.0038L22.9421 9.87127C22.7682 9.68466 22.6735 9.43785 22.678 9.18283C22.6825 8.92781 22.7858 8.68449 22.9662 8.50414C23.1465 8.32378 23.3899 8.22047 23.6449 8.21597C23.8999 8.21147 24.1467 8.30614 24.3333 8.48002L36.1458 20.2925C36.3302 20.4771 36.4337 20.7273 36.4337 20.9881C36.4337 21.249 36.3302 21.4992 36.1458 21.6838L24.3333 33.4963C24.1487 33.6806 23.8986 33.7842 23.6377 33.7842C23.3768 33.7842 23.1266 33.6806 22.9421 33.4963Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="whereToInvest__item">
                        <<a  href="{{ route('chasseur.show', '77-seine-et-marne')}}" class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_5.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Seine et Marne 77</h3>
                        </a>
                        <div class="whereToInvest__item--bottom">
                            <p class="whereToInvest__item--p">Explorez les secrets de Seine et Marne!</p>
                            <a  href="{{ route('chasseur.show', '77-seine-et-marne')}}" 
                                title="chasseur immobilier 77" 
                                class="whereToInvest__item--a">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                    <path d="M22.9421 33.4963C22.7577 33.3117 22.6542 33.0615 22.6542 32.8006C22.6542 32.5398 22.7577 32.2896 22.9421 32.105L33.0729 21.9725L6.5752 21.9725C6.31412 21.9725 6.06374 21.8688 5.87914 21.6842C5.69453 21.4996 5.59082 21.2492 5.59082 20.9881C5.59082 20.7271 5.69453 20.4767 5.87914 20.2921C6.06374 20.1075 6.31412 20.0038 6.5752 20.0038L33.0729 20.0038L22.9421 9.87127C22.7682 9.68466 22.6735 9.43785 22.678 9.18283C22.6825 8.92781 22.7858 8.68449 22.9662 8.50414C23.1465 8.32378 23.3899 8.22047 23.6449 8.21597C23.8999 8.21147 24.1467 8.30614 24.3333 8.48002L36.1458 20.2925C36.3302 20.4771 36.4337 20.7273 36.4337 20.9881C36.4337 21.249 36.3302 21.4992 36.1458 21.6838L24.3333 33.4963C24.1487 33.6806 23.8986 33.7842 23.6377 33.7842C23.3768 33.7842 23.1266 33.6806 22.9421 33.4963Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="whereToInvest__item">
                        <a  href="{{ route('chasseur.show', '78-yvelines')}}" class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_6.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Les Yvelines 78</h3>
                        </a>
                        <div class="whereToInvest__item--bottom">
                            <p class="whereToInvest__item--p">Vivez des moments magiques dans les Yvelines!</p>
                            <a  href="{{ route('chasseur.show', '78-yvelines')}}" 
                                title="chasseur immobilier yvelines" 
                                class="whereToInvest__item--a">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                    <path d="M22.9421 33.4963C22.7577 33.3117 22.6542 33.0615 22.6542 32.8006C22.6542 32.5398 22.7577 32.2896 22.9421 32.105L33.0729 21.9725L6.5752 21.9725C6.31412 21.9725 6.06374 21.8688 5.87914 21.6842C5.69453 21.4996 5.59082 21.2492 5.59082 20.9881C5.59082 20.7271 5.69453 20.4767 5.87914 20.2921C6.06374 20.1075 6.31412 20.0038 6.5752 20.0038L33.0729 20.0038L22.9421 9.87127C22.7682 9.68466 22.6735 9.43785 22.678 9.18283C22.6825 8.92781 22.7858 8.68449 22.9662 8.50414C23.1465 8.32378 23.3899 8.22047 23.6449 8.21597C23.8999 8.21147 24.1467 8.30614 24.3333 8.48002L36.1458 20.2925C36.3302 20.4771 36.4337 20.7273 36.4337 20.9881C36.4337 21.249 36.3302 21.4992 36.1458 21.6838L24.3333 33.4963C24.1487 33.6806 23.8986 33.7842 23.6377 33.7842C23.3768 33.7842 23.1266 33.6806 22.9421 33.4963Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="whereToInvest__item">
                        <a  href="{{ route('chasseur.show', '91-essonne')}}" class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_7.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Essonne 91</h3>
                        </a>
                        <div class="whereToInvest__item--bottom">
                            <p class="whereToInvest__item--p">Découvrez la beauté de l'Essonne!</p>
                            <a  href="{{ route('chasseur.show', '91-essonne')}}" 
                                title="chasseur immobilier essonne" 
                                class="whereToInvest__item--a">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                    <path d="M22.9421 33.4963C22.7577 33.3117 22.6542 33.0615 22.6542 32.8006C22.6542 32.5398 22.7577 32.2896 22.9421 32.105L33.0729 21.9725L6.5752 21.9725C6.31412 21.9725 6.06374 21.8688 5.87914 21.6842C5.69453 21.4996 5.59082 21.2492 5.59082 20.9881C5.59082 20.7271 5.69453 20.4767 5.87914 20.2921C6.06374 20.1075 6.31412 20.0038 6.5752 20.0038L33.0729 20.0038L22.9421 9.87127C22.7682 9.68466 22.6735 9.43785 22.678 9.18283C22.6825 8.92781 22.7858 8.68449 22.9662 8.50414C23.1465 8.32378 23.3899 8.22047 23.6449 8.21597C23.8999 8.21147 24.1467 8.30614 24.3333 8.48002L36.1458 20.2925C36.3302 20.4771 36.4337 20.7273 36.4337 20.9881C36.4337 21.249 36.3302 21.4992 36.1458 21.6838L24.3333 33.4963C24.1487 33.6806 23.8986 33.7842 23.6377 33.7842C23.3768 33.7842 23.1266 33.6806 22.9421 33.4963Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="whereToInvest__item">
                        <a  href="{{ route('chasseur.show', '95-val-d-oise')}}" class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_8.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Val D'Oise 95</h3>
                        </a>
                        <div class="whereToInvest__item--bottom">
                            <p class="whereToInvest__item--p">Plongez dans la sérénité du Val d'Oise!</p>
                            <a  href="{{ route('chasseur.show', '95-val-d-oise')}}" 
                                title="chasseur immobilier val d'oise" 
                                class="whereToInvest__item--a">
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
                                    <path d="M22.9421 33.4963C22.7577 33.3117 22.6542 33.0615 22.6542 32.8006C22.6542 32.5398 22.7577 32.2896 22.9421 32.105L33.0729 21.9725L6.5752 21.9725C6.31412 21.9725 6.06374 21.8688 5.87914 21.6842C5.69453 21.4996 5.59082 21.2492 5.59082 20.9881C5.59082 20.7271 5.69453 20.4767 5.87914 20.2921C6.06374 20.1075 6.31412 20.0038 6.5752 20.0038L33.0729 20.0038L22.9421 9.87127C22.7682 9.68466 22.6735 9.43785 22.678 9.18283C22.6825 8.92781 22.7858 8.68449 22.9662 8.50414C23.1465 8.32378 23.3899 8.22047 23.6449 8.21597C23.8999 8.21147 24.1467 8.30614 24.3333 8.48002L36.1458 20.2925C36.3302 20.4771 36.4337 20.7273 36.4337 20.9881C36.4337 21.249 36.3302 21.4992 36.1458 21.6838L24.3333 33.4963C24.1487 33.6806 23.8986 33.7842 23.6377 33.7842C23.3768 33.7842 23.1266 33.6806 22.9421 33.4963Z" fill="white"/>
                                </svg>
                            </a>
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
                    <h3 class="homePageFAQ__h3 active">Est-ce le moment d'acheter un bien immobilier ?</h3>
                    <p class="homePageFAQ__p active">C'est le moment de saisir l'opportunité ! Avec des taux d'intérêt attractifs et un marché dynamique, acheter un bien immobilier peut être une décision judicieuse. Consultez nos experts pour obtenir des conseils personnalisés et faire le meilleur choix pour votre avenir. Ne manquez pas le train de l'immobilier, il est en marche!</p>
                </div>
                <div class="homePageFAQ__item">
                    <div class="homePageFAQ__item--icon__btn"></div>
                    <h3 class="homePageFAQ__h3">Quels sont les diagnostics immobiliers obligatoires dans le cas d'une vente ?</h3>
                    <p class="homePageFAQ__p">C'est le moment de saisir l'opportunité ! Avec des taux d'intérêt attractifs et un marché dynamique, acheter un bien immobilier peut être une décision judicieuse. Consultez nos experts pour obtenir des conseils personnalisés et faire le meilleur choix pour votre avenir. Ne manquez pas le train de l'immobilier, il est en marche!</p>
                </div>
                <div class="homePageFAQ__item">
                    <div class="homePageFAQ__item--icon__btn"></div>
                    <h3 class="homePageFAQ__h3">Quel est le délai minimum entre compromis et vente ?</h3>
                    <p class="homePageFAQ__p">C'est le moment de saisir l'opportunité ! Avec des taux d'intérêt attractifs et un marché dynamique, acheter un bien immobilier peut être une décision judicieuse. Consultez nos experts pour obtenir des conseils personnalisés et faire le meilleur choix pour votre avenir. Ne manquez pas le train de l'immobilier, il est en marche!</p>
                </div>
                <div class="homePageFAQ__item">
                    <div class="homePageFAQ__item--icon__btn"></div>
                    <h3 class="homePageFAQ__h3">Comment financer l'achat d'un bien immobilier ?</h3>
                    <p class="homePageFAQ__p">C'est le moment de saisir l'opportunité ! Avec des taux d'intérêt attractifs et un marché dynamique, acheter un bien immobilier peut être une décision judicieuse. Consultez nos experts pour obtenir des conseils personnalisés et faire le meilleur choix pour votre avenir. Ne manquez pas le train de l'immobilier, il est en marche!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Widget Section -->
    @include('redesign/page_parts/blog-widget')

</main>
@endsection