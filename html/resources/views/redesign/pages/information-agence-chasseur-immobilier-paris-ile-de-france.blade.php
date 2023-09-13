@extends('layouts/app')

@section('content')

<main>
    <!-- Main Section -->
    @include('redesign/page_parts/main')

    <!-- Comment pouvons Section  -->
    <section class="commentPouvons">
        <div class="container">
            <h1 class="commentPouvons__h1">Comment pouvons-nous vous aider?</h1>
            <p class="commentPouvons__p">Vous avez besoin d'une assistance sur mesure pour concrétiser votre projet immobilier ? Découvrez nos services qui vont vous épater:</p>
        </div>
    </section>

    <!-- Our Services Section -->
    <section class="services">
        <div class="container">
            <div class="services__inner">
                <h2 class="services__h2 global__h2">Nos Services</h2>
                <p class="services__description global__description">Chez La Fabrique à Toits, nous mettons l'humain au cœur de nos services premium et rigoureux! De la chasse immobilière à l'investissement locatif en passant par l'immobilier neuf et le double projet, nous vous accompagnons avec passion et dévouement à chaque étape de votre aventure immobilière!</p>
                <div class="services__block">
                    <img    src="{{ asset('images/content/our_services_1.webp') }}" 
                            loading="lazy"
                            width="1000"
                            height="428"
                            alt="" 
                            class="services__block--img">
                    <div class="services__block--content">
                        <h3>Chasse immobilière</h3>
                        <p>Vous êtes à la recherche de votre lieu de vie idéal? Laissez-nous prendre en charge la recherche et la sélection de biens immobiliers qui correspondent parfaitement à vos critères. Nous mettons tout en œuvre pour dénicher la perle rare qui vous fera dire «C'est celui-là!»</p>
                        <a href="{{ route('acheterAppartementParisIleDeFrance') }}" title="Service de chasseur immobilier">En savoir plus</a>
                    </div>
                </div>
                <div class="services__block services__block--reverse">
                    <img    src="{{ asset('images/content/our_services_2.webp') }}"
                            loading="lazy" 
                            alt="" 
                            class="services__block--img">
                    <div class="services__block--content">
                        <h3>Investissement locatif</h3>
                        <p>Vous souhaitez vivre dans un environnement moderne et confortable? Explorez notre sélection de biens immobiliers neufs, soigneusement choisis pour leur qualité et leurs prestations haut de gamme. Offrez-vous un cadre de vie contemporain qui répond à toutes vos attentes.</p>
                        <a href="{{ route('investissementLocatifParisIleDeFrance') }}" title="Investissement locatif à Paris et en Ile de France">En savoir plus</a>
                    </div>
                </div>
                <div class="services__block">
                    <img    src="{{ asset('images/content/our_services_3.webp') }}"
                            loading="lazy" 
                            alt="" 
                            class="services__block--img">
                    <div class="services__block--content">
                        <h3>Immobilier neuf</h3>
                        <p>Vous envisagez d'investir dans l'immobilier locatif pour maximiser vos revenus? Notre équipe d'experts vous guide dans la recherche des meilleures opportunités d'investissement et vous fournit des conseils avisés pour une gestion locative optimale. Faites fructifier votre patrimoine immobilier avec confiance.</p>
                        <a href="{{ route('immobilierNeufIleDeFrance') }}" title="Programme immobilier Neuf Ile de France">En savoir plus</a>
                    </div>
                </div>
                <div class="services__block services__block--reverse">
                    <img    src="{{ asset('images/content/our_services_4.webp') }}" 
                            loading="lazy"
                            alt="" 
                            class="services__block--img">
                    <div class="services__block--content">
                        <h3>Double projet</h3>
                        <p>Vous rêvez de concilier votre projet de vie et votre projet d'investissement? Nous vous proposons la combinaison gagnante! Vivez dans votre lieu de prédilection tout en faisant fructifier votre patrimoine immobilier. Faites de votre rêve une réalité et bénéficiez des avantages d'un double projet.</p>
                        <a href="{{ route('vendreAcheterBienImmobilierParisIleDeFrance') }}" title="Programme immobilier Neuf Ile de France">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nos Conseils Section -->
    <section class="nosConseils">
        <div class="container">
            <h2 class="nosConseils__h2">Nos conseils pour investir</h2>
            <p class="nosConseils__p">Vous souhaitez investir avec assurance? Nous sommes là pour vous guider tout au long de votre parcours et vous donner les astuces incontournables qui feront de votre investissement un succès retentissant!</p>
            <div class="nosConseils__row">
                <img    srcset="images/content/nosConseils_01.webp 1920w,
                                images/content/nosConseils_01_600.webp 500w"
                        src="images/content/nosConseils_01.webp" 
                        width="925"
                        height="400"
                        alt=""
                        title="" 
                        class="nosConseils__img">
                <div class="nosConseils__content">
                    <h3 class="nosConseils__h3">GUIDE ACHAT IMMOBILIER</h3>
                    <p class="nosConseils__content--p">Obtenez notre guide complet pour réussir votre achat immobilier étape par étape. Prenez les bonnes décisions en toute confiance.</p>
                    <a href="#" class="nosConseils__a">En savoir plus</a>
                </div>
            </div>
            <div class="nosConseils__row">
                <img    srcset="images/content/nosConseils_02.webp 1920w,
                                images/content/nosConseils_02_600.webp 500w"
                        src="images/content/nosConseils_02.webp" 
                        width="925"
                        height="400"
                        alt=""
                        title="" 
                        class="nosConseils__img">
                <div class="nosConseils__content">
                    <h3 class="nosConseils__h3">TOP 10 ACHAT INVESTISSEMENT 92</h3>
                    <p class="nosConseils__content--p">Découvrez les 10 meilleures opportunités d'investissement dans le département 92. Des pépites à ne pas manquer pour votre portefeuille!</p>
                    <a href="#" class="nosConseils__a">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Nos secteurs géo Section -->
    <section class="nosSecteurs">
        <div class="container">
            <h2 class="global__h2">Nos secteurs géo</h2>
            <p class="global__description">Nous intervenons dans plusieurs secteurs géographiques, car nous croyons en la diversité des opportunités immobilières.</p>
            <div class="nosSecteurs__row">

                <div class="nosSecteurs__item">
                    <img    srcset="images/content/nosSecteurs_01.webp 1920w,
                                    images/content/nosSecteurs_01_400.webp 500w"
                            src="images/content/nosSecteurs_01.webp" 
                            width="790"
                            height="340"
                            alt=""
                            title="" 
                            class="nosSecteurs__img">
                    <div class="nosSecteurs__content">
                        <span class="nosSecteurs__index">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.00081 10.1037C8.45521 10.1037 7.92185 9.94188 7.4682 9.63876C7.01455 9.33564 6.66097 8.9048 6.45218 8.40073C6.24338 7.89665 6.18875 7.34199 6.29519 6.80687C6.40164 6.27175 6.66437 5.78021 7.05017 5.39441C7.43597 5.00861 7.92751 4.74588 8.46263 4.63943C8.99775 4.53299 9.55242 4.58762 10.0565 4.79641C10.5606 5.00521 10.9914 5.35879 11.2945 5.81244C11.5976 6.26609 11.7594 6.79944 11.7594 7.34505C11.7586 8.07641 11.4676 8.77757 10.9505 9.29472C10.4333 9.81187 9.73217 10.1028 9.00081 10.1037ZM9.00081 5.68988C8.67345 5.68988 8.35344 5.78695 8.08125 5.96882C7.80905 6.1507 7.59691 6.4092 7.47163 6.71164C7.34635 7.01408 7.31358 7.34688 7.37744 7.66796C7.44131 7.98903 7.59895 8.28395 7.83043 8.51543C8.06191 8.74691 8.35683 8.90455 8.6779 8.96842C8.99897 9.03228 9.33177 8.9995 9.63422 8.87423C9.93666 8.74895 10.1952 8.5368 10.377 8.26461C10.5589 7.99242 10.656 7.67241 10.656 7.34505C10.6555 6.9062 10.481 6.48546 10.1707 6.17515C9.8604 5.86484 9.43965 5.69031 9.00081 5.68988Z" fill="#FAFAFA"/>
                                <path d="M8.99866 16.7242L4.34431 11.2351C4.27964 11.1526 4.21564 11.0697 4.15231 10.9862C3.35727 9.93893 2.92777 8.65973 2.92969 7.34484C2.92969 5.73525 3.5691 4.19159 4.70725 3.05344C5.8454 1.91529 7.38907 1.27588 8.99866 1.27588C10.6082 1.27588 12.1519 1.91529 13.2901 3.05344C14.4282 4.19159 15.0676 5.73525 15.0676 7.34484C15.0696 8.65913 14.6402 9.93775 13.8456 10.9846L13.845 10.9862C13.845 10.9862 13.6795 11.2036 13.6547 11.2328L8.99866 16.7242ZM5.03287 10.3214C5.03397 10.3214 5.16197 10.4913 5.19121 10.5277L8.99866 15.0182L12.8111 10.5217C12.8353 10.4913 12.9645 10.3203 12.965 10.3197C13.6145 9.46408 13.9655 8.41907 13.9642 7.34484C13.9642 6.02791 13.441 4.76491 12.5098 3.83369C11.5786 2.90248 10.3156 2.37933 8.99866 2.37933C7.68172 2.37933 6.41872 2.90248 5.48751 3.83369C4.55629 4.76491 4.03314 6.02791 4.03314 7.34484C4.03198 8.41973 4.38281 9.46535 5.03287 10.3214Z" fill="#FAFAFA"/>
                            </svg>
                            Paris
                        </span>
                        <div class="nosSecteurs__links">
                            <a href="#" class="nosSecteurs__a">Neuf</a>
                            <a href="#" class="nosSecteurs__a">Ancien (Chasse)</a>
                        </div>
                    </div>
                </div>

                <div class="nosSecteurs__item">
                    <img    srcset="images/content/nosSecteurs_02.webp 1920w,
                                    images/content/nosSecteurs_02_400.webp 500w"
                            src="images/content/nosSecteurs_02.webp" 
                            width="790"
                            height="340"
                            alt=""
                            title="" 
                            class="nosSecteurs__img">
                    <div class="nosSecteurs__content">
                        <span class="nosSecteurs__index">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.00081 10.1037C8.45521 10.1037 7.92185 9.94188 7.4682 9.63876C7.01455 9.33564 6.66097 8.9048 6.45218 8.40073C6.24338 7.89665 6.18875 7.34199 6.29519 6.80687C6.40164 6.27175 6.66437 5.78021 7.05017 5.39441C7.43597 5.00861 7.92751 4.74588 8.46263 4.63943C8.99775 4.53299 9.55242 4.58762 10.0565 4.79641C10.5606 5.00521 10.9914 5.35879 11.2945 5.81244C11.5976 6.26609 11.7594 6.79944 11.7594 7.34505C11.7586 8.07641 11.4676 8.77757 10.9505 9.29472C10.4333 9.81187 9.73217 10.1028 9.00081 10.1037ZM9.00081 5.68988C8.67345 5.68988 8.35344 5.78695 8.08125 5.96882C7.80905 6.1507 7.59691 6.4092 7.47163 6.71164C7.34635 7.01408 7.31358 7.34688 7.37744 7.66796C7.44131 7.98903 7.59895 8.28395 7.83043 8.51543C8.06191 8.74691 8.35683 8.90455 8.6779 8.96842C8.99897 9.03228 9.33177 8.9995 9.63422 8.87423C9.93666 8.74895 10.1952 8.5368 10.377 8.26461C10.5589 7.99242 10.656 7.67241 10.656 7.34505C10.6555 6.9062 10.481 6.48546 10.1707 6.17515C9.8604 5.86484 9.43965 5.69031 9.00081 5.68988Z" fill="#FAFAFA"/>
                                <path d="M8.99866 16.7242L4.34431 11.2351C4.27964 11.1526 4.21564 11.0697 4.15231 10.9862C3.35727 9.93893 2.92777 8.65973 2.92969 7.34484C2.92969 5.73525 3.5691 4.19159 4.70725 3.05344C5.8454 1.91529 7.38907 1.27588 8.99866 1.27588C10.6082 1.27588 12.1519 1.91529 13.2901 3.05344C14.4282 4.19159 15.0676 5.73525 15.0676 7.34484C15.0696 8.65913 14.6402 9.93775 13.8456 10.9846L13.845 10.9862C13.845 10.9862 13.6795 11.2036 13.6547 11.2328L8.99866 16.7242ZM5.03287 10.3214C5.03397 10.3214 5.16197 10.4913 5.19121 10.5277L8.99866 15.0182L12.8111 10.5217C12.8353 10.4913 12.9645 10.3203 12.965 10.3197C13.6145 9.46408 13.9655 8.41907 13.9642 7.34484C13.9642 6.02791 13.441 4.76491 12.5098 3.83369C11.5786 2.90248 10.3156 2.37933 8.99866 2.37933C7.68172 2.37933 6.41872 2.90248 5.48751 3.83369C4.55629 4.76491 4.03314 6.02791 4.03314 7.34484C4.03198 8.41973 4.38281 9.46535 5.03287 10.3214Z" fill="#FAFAFA"/>
                            </svg>
                            91
                        </span>
                        <div class="nosSecteurs__links">
                            <a href="#" class="nosSecteurs__a">Neuf</a>
                            <a href="#" class="nosSecteurs__a">Ancien (Chasse)</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nosSecteurs__row">
                <div class="nosSecteurs__item">
                    <img    srcset="images/content/nosSecteurs_03.webp 1920w,
                                    images/content/nosSecteurs_03_400.webp 500w"
                            src="images/content/nosSecteurs_03.webp" 
                            width="790"
                            height="340"
                            alt=""
                            title="" 
                            class="nosSecteurs__img">
                    <div class="nosSecteurs__content">
                        <span class="nosSecteurs__index">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.00081 10.1037C8.45521 10.1037 7.92185 9.94188 7.4682 9.63876C7.01455 9.33564 6.66097 8.9048 6.45218 8.40073C6.24338 7.89665 6.18875 7.34199 6.29519 6.80687C6.40164 6.27175 6.66437 5.78021 7.05017 5.39441C7.43597 5.00861 7.92751 4.74588 8.46263 4.63943C8.99775 4.53299 9.55242 4.58762 10.0565 4.79641C10.5606 5.00521 10.9914 5.35879 11.2945 5.81244C11.5976 6.26609 11.7594 6.79944 11.7594 7.34505C11.7586 8.07641 11.4676 8.77757 10.9505 9.29472C10.4333 9.81187 9.73217 10.1028 9.00081 10.1037ZM9.00081 5.68988C8.67345 5.68988 8.35344 5.78695 8.08125 5.96882C7.80905 6.1507 7.59691 6.4092 7.47163 6.71164C7.34635 7.01408 7.31358 7.34688 7.37744 7.66796C7.44131 7.98903 7.59895 8.28395 7.83043 8.51543C8.06191 8.74691 8.35683 8.90455 8.6779 8.96842C8.99897 9.03228 9.33177 8.9995 9.63422 8.87423C9.93666 8.74895 10.1952 8.5368 10.377 8.26461C10.5589 7.99242 10.656 7.67241 10.656 7.34505C10.6555 6.9062 10.481 6.48546 10.1707 6.17515C9.8604 5.86484 9.43965 5.69031 9.00081 5.68988Z" fill="#FAFAFA"/>
                                <path d="M8.99866 16.7242L4.34431 11.2351C4.27964 11.1526 4.21564 11.0697 4.15231 10.9862C3.35727 9.93893 2.92777 8.65973 2.92969 7.34484C2.92969 5.73525 3.5691 4.19159 4.70725 3.05344C5.8454 1.91529 7.38907 1.27588 8.99866 1.27588C10.6082 1.27588 12.1519 1.91529 13.2901 3.05344C14.4282 4.19159 15.0676 5.73525 15.0676 7.34484C15.0696 8.65913 14.6402 9.93775 13.8456 10.9846L13.845 10.9862C13.845 10.9862 13.6795 11.2036 13.6547 11.2328L8.99866 16.7242ZM5.03287 10.3214C5.03397 10.3214 5.16197 10.4913 5.19121 10.5277L8.99866 15.0182L12.8111 10.5217C12.8353 10.4913 12.9645 10.3203 12.965 10.3197C13.6145 9.46408 13.9655 8.41907 13.9642 7.34484C13.9642 6.02791 13.441 4.76491 12.5098 3.83369C11.5786 2.90248 10.3156 2.37933 8.99866 2.37933C7.68172 2.37933 6.41872 2.90248 5.48751 3.83369C4.55629 4.76491 4.03314 6.02791 4.03314 7.34484C4.03198 8.41973 4.38281 9.46535 5.03287 10.3214Z" fill="#FAFAFA"/>
                            </svg>
                            92
                        </span>
                        <div class="nosSecteurs__links">
                            <a href="#" class="nosSecteurs__a">Neuf</a>
                            <a href="#" class="nosSecteurs__a">Ancien (Chasse)</a>
                        </div>
                    </div>
                </div>
                <div class="nosSecteurs__item">
                    <img    srcset="images/content/nosSecteurs_04.webp 1920w,
                                    images/content/nosSecteurs_04_400.webp 500w"
                            src="images/content/nosSecteurs_04.webp" 
                            width="790"
                            height="340"
                            alt=""
                            title="" 
                            class="nosSecteurs__img">
                    <div class="nosSecteurs__content">
                        <span class="nosSecteurs__index">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.00081 10.1037C8.45521 10.1037 7.92185 9.94188 7.4682 9.63876C7.01455 9.33564 6.66097 8.9048 6.45218 8.40073C6.24338 7.89665 6.18875 7.34199 6.29519 6.80687C6.40164 6.27175 6.66437 5.78021 7.05017 5.39441C7.43597 5.00861 7.92751 4.74588 8.46263 4.63943C8.99775 4.53299 9.55242 4.58762 10.0565 4.79641C10.5606 5.00521 10.9914 5.35879 11.2945 5.81244C11.5976 6.26609 11.7594 6.79944 11.7594 7.34505C11.7586 8.07641 11.4676 8.77757 10.9505 9.29472C10.4333 9.81187 9.73217 10.1028 9.00081 10.1037ZM9.00081 5.68988C8.67345 5.68988 8.35344 5.78695 8.08125 5.96882C7.80905 6.1507 7.59691 6.4092 7.47163 6.71164C7.34635 7.01408 7.31358 7.34688 7.37744 7.66796C7.44131 7.98903 7.59895 8.28395 7.83043 8.51543C8.06191 8.74691 8.35683 8.90455 8.6779 8.96842C8.99897 9.03228 9.33177 8.9995 9.63422 8.87423C9.93666 8.74895 10.1952 8.5368 10.377 8.26461C10.5589 7.99242 10.656 7.67241 10.656 7.34505C10.6555 6.9062 10.481 6.48546 10.1707 6.17515C9.8604 5.86484 9.43965 5.69031 9.00081 5.68988Z" fill="#FAFAFA"/>
                                <path d="M8.99866 16.7242L4.34431 11.2351C4.27964 11.1526 4.21564 11.0697 4.15231 10.9862C3.35727 9.93893 2.92777 8.65973 2.92969 7.34484C2.92969 5.73525 3.5691 4.19159 4.70725 3.05344C5.8454 1.91529 7.38907 1.27588 8.99866 1.27588C10.6082 1.27588 12.1519 1.91529 13.2901 3.05344C14.4282 4.19159 15.0676 5.73525 15.0676 7.34484C15.0696 8.65913 14.6402 9.93775 13.8456 10.9846L13.845 10.9862C13.845 10.9862 13.6795 11.2036 13.6547 11.2328L8.99866 16.7242ZM5.03287 10.3214C5.03397 10.3214 5.16197 10.4913 5.19121 10.5277L8.99866 15.0182L12.8111 10.5217C12.8353 10.4913 12.9645 10.3203 12.965 10.3197C13.6145 9.46408 13.9655 8.41907 13.9642 7.34484C13.9642 6.02791 13.441 4.76491 12.5098 3.83369C11.5786 2.90248 10.3156 2.37933 8.99866 2.37933C7.68172 2.37933 6.41872 2.90248 5.48751 3.83369C4.55629 4.76491 4.03314 6.02791 4.03314 7.34484C4.03198 8.41973 4.38281 9.46535 5.03287 10.3214Z" fill="#FAFAFA"/>
                            </svg>
                            93
                        </span>
                        <div class="nosSecteurs__links">
                            <a href="#" class="nosSecteurs__a">Neuf</a>
                            <a href="#" class="nosSecteurs__a">Ancien (Chasse)</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nosSecteurs__row">
                <div class="nosSecteurs__item">
                    <img    srcset="images/content/nosSecteurs_05.webp 1920w,
                                    images/content/nosSecteurs_05_400.webp 500w"
                            src="images/content/nosSecteurs_05.webp" 
                            width="790"
                            height="340"
                            alt=""
                            title="" 
                            class="nosSecteurs__img">
                    <div class="nosSecteurs__content">
                        <span class="nosSecteurs__index">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.00081 10.1037C8.45521 10.1037 7.92185 9.94188 7.4682 9.63876C7.01455 9.33564 6.66097 8.9048 6.45218 8.40073C6.24338 7.89665 6.18875 7.34199 6.29519 6.80687C6.40164 6.27175 6.66437 5.78021 7.05017 5.39441C7.43597 5.00861 7.92751 4.74588 8.46263 4.63943C8.99775 4.53299 9.55242 4.58762 10.0565 4.79641C10.5606 5.00521 10.9914 5.35879 11.2945 5.81244C11.5976 6.26609 11.7594 6.79944 11.7594 7.34505C11.7586 8.07641 11.4676 8.77757 10.9505 9.29472C10.4333 9.81187 9.73217 10.1028 9.00081 10.1037ZM9.00081 5.68988C8.67345 5.68988 8.35344 5.78695 8.08125 5.96882C7.80905 6.1507 7.59691 6.4092 7.47163 6.71164C7.34635 7.01408 7.31358 7.34688 7.37744 7.66796C7.44131 7.98903 7.59895 8.28395 7.83043 8.51543C8.06191 8.74691 8.35683 8.90455 8.6779 8.96842C8.99897 9.03228 9.33177 8.9995 9.63422 8.87423C9.93666 8.74895 10.1952 8.5368 10.377 8.26461C10.5589 7.99242 10.656 7.67241 10.656 7.34505C10.6555 6.9062 10.481 6.48546 10.1707 6.17515C9.8604 5.86484 9.43965 5.69031 9.00081 5.68988Z" fill="#FAFAFA"/>
                                <path d="M8.99866 16.7242L4.34431 11.2351C4.27964 11.1526 4.21564 11.0697 4.15231 10.9862C3.35727 9.93893 2.92777 8.65973 2.92969 7.34484C2.92969 5.73525 3.5691 4.19159 4.70725 3.05344C5.8454 1.91529 7.38907 1.27588 8.99866 1.27588C10.6082 1.27588 12.1519 1.91529 13.2901 3.05344C14.4282 4.19159 15.0676 5.73525 15.0676 7.34484C15.0696 8.65913 14.6402 9.93775 13.8456 10.9846L13.845 10.9862C13.845 10.9862 13.6795 11.2036 13.6547 11.2328L8.99866 16.7242ZM5.03287 10.3214C5.03397 10.3214 5.16197 10.4913 5.19121 10.5277L8.99866 15.0182L12.8111 10.5217C12.8353 10.4913 12.9645 10.3203 12.965 10.3197C13.6145 9.46408 13.9655 8.41907 13.9642 7.34484C13.9642 6.02791 13.441 4.76491 12.5098 3.83369C11.5786 2.90248 10.3156 2.37933 8.99866 2.37933C7.68172 2.37933 6.41872 2.90248 5.48751 3.83369C4.55629 4.76491 4.03314 6.02791 4.03314 7.34484C4.03198 8.41973 4.38281 9.46535 5.03287 10.3214Z" fill="#FAFAFA"/>
                            </svg>
                            94
                        </span>
                        <div class="nosSecteurs__links">
                            <a href="#" class="nosSecteurs__a">Neuf</a>
                            <a href="#" class="nosSecteurs__a">Ancien (Chasse)</a>
                        </div>
                    </div>
                </div>
                <div class="nosSecteurs__item">
                    <img    srcset="images/content/nosSecteurs_06.webp 1920w,
                                    images/content/nosSecteurs_06_400.webp 500w"
                            src="images/content/nosSecteurs_06.webp" 
                            width="790"
                            height="340"
                            alt=""
                            title="" 
                            class="nosSecteurs__img">
                    <div class="nosSecteurs__content">
                        <span class="nosSecteurs__index">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.00081 10.1037C8.45521 10.1037 7.92185 9.94188 7.4682 9.63876C7.01455 9.33564 6.66097 8.9048 6.45218 8.40073C6.24338 7.89665 6.18875 7.34199 6.29519 6.80687C6.40164 6.27175 6.66437 5.78021 7.05017 5.39441C7.43597 5.00861 7.92751 4.74588 8.46263 4.63943C8.99775 4.53299 9.55242 4.58762 10.0565 4.79641C10.5606 5.00521 10.9914 5.35879 11.2945 5.81244C11.5976 6.26609 11.7594 6.79944 11.7594 7.34505C11.7586 8.07641 11.4676 8.77757 10.9505 9.29472C10.4333 9.81187 9.73217 10.1028 9.00081 10.1037ZM9.00081 5.68988C8.67345 5.68988 8.35344 5.78695 8.08125 5.96882C7.80905 6.1507 7.59691 6.4092 7.47163 6.71164C7.34635 7.01408 7.31358 7.34688 7.37744 7.66796C7.44131 7.98903 7.59895 8.28395 7.83043 8.51543C8.06191 8.74691 8.35683 8.90455 8.6779 8.96842C8.99897 9.03228 9.33177 8.9995 9.63422 8.87423C9.93666 8.74895 10.1952 8.5368 10.377 8.26461C10.5589 7.99242 10.656 7.67241 10.656 7.34505C10.6555 6.9062 10.481 6.48546 10.1707 6.17515C9.8604 5.86484 9.43965 5.69031 9.00081 5.68988Z" fill="#FAFAFA"/>
                                <path d="M8.99866 16.7242L4.34431 11.2351C4.27964 11.1526 4.21564 11.0697 4.15231 10.9862C3.35727 9.93893 2.92777 8.65973 2.92969 7.34484C2.92969 5.73525 3.5691 4.19159 4.70725 3.05344C5.8454 1.91529 7.38907 1.27588 8.99866 1.27588C10.6082 1.27588 12.1519 1.91529 13.2901 3.05344C14.4282 4.19159 15.0676 5.73525 15.0676 7.34484C15.0696 8.65913 14.6402 9.93775 13.8456 10.9846L13.845 10.9862C13.845 10.9862 13.6795 11.2036 13.6547 11.2328L8.99866 16.7242ZM5.03287 10.3214C5.03397 10.3214 5.16197 10.4913 5.19121 10.5277L8.99866 15.0182L12.8111 10.5217C12.8353 10.4913 12.9645 10.3203 12.965 10.3197C13.6145 9.46408 13.9655 8.41907 13.9642 7.34484C13.9642 6.02791 13.441 4.76491 12.5098 3.83369C11.5786 2.90248 10.3156 2.37933 8.99866 2.37933C7.68172 2.37933 6.41872 2.90248 5.48751 3.83369C4.55629 4.76491 4.03314 6.02791 4.03314 7.34484C4.03198 8.41973 4.38281 9.46535 5.03287 10.3214Z" fill="#FAFAFA"/>
                            </svg>
                            95
                        </span>
                        <div class="nosSecteurs__links">
                            <a href="#" class="nosSecteurs__a">Neuf</a>
                            <a href="#" class="nosSecteurs__a">Ancien (Chasse)</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nosSecteurs__row">
                <div class="nosSecteurs__item">
                    <img    srcset="images/content/nosSecteurs_07.webp 1920w,
                                    images/content/nosSecteurs_07_400.webp 500w"
                            src="images/content/nosSecteurs_07.webp" 
                            width="790"
                            height="340"
                            alt=""
                            title="" 
                            class="nosSecteurs__img">
                    <div class="nosSecteurs__content">
                        <span class="nosSecteurs__index">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.00081 10.1037C8.45521 10.1037 7.92185 9.94188 7.4682 9.63876C7.01455 9.33564 6.66097 8.9048 6.45218 8.40073C6.24338 7.89665 6.18875 7.34199 6.29519 6.80687C6.40164 6.27175 6.66437 5.78021 7.05017 5.39441C7.43597 5.00861 7.92751 4.74588 8.46263 4.63943C8.99775 4.53299 9.55242 4.58762 10.0565 4.79641C10.5606 5.00521 10.9914 5.35879 11.2945 5.81244C11.5976 6.26609 11.7594 6.79944 11.7594 7.34505C11.7586 8.07641 11.4676 8.77757 10.9505 9.29472C10.4333 9.81187 9.73217 10.1028 9.00081 10.1037ZM9.00081 5.68988C8.67345 5.68988 8.35344 5.78695 8.08125 5.96882C7.80905 6.1507 7.59691 6.4092 7.47163 6.71164C7.34635 7.01408 7.31358 7.34688 7.37744 7.66796C7.44131 7.98903 7.59895 8.28395 7.83043 8.51543C8.06191 8.74691 8.35683 8.90455 8.6779 8.96842C8.99897 9.03228 9.33177 8.9995 9.63422 8.87423C9.93666 8.74895 10.1952 8.5368 10.377 8.26461C10.5589 7.99242 10.656 7.67241 10.656 7.34505C10.6555 6.9062 10.481 6.48546 10.1707 6.17515C9.8604 5.86484 9.43965 5.69031 9.00081 5.68988Z" fill="#FAFAFA"/>
                                <path d="M8.99866 16.7242L4.34431 11.2351C4.27964 11.1526 4.21564 11.0697 4.15231 10.9862C3.35727 9.93893 2.92777 8.65973 2.92969 7.34484C2.92969 5.73525 3.5691 4.19159 4.70725 3.05344C5.8454 1.91529 7.38907 1.27588 8.99866 1.27588C10.6082 1.27588 12.1519 1.91529 13.2901 3.05344C14.4282 4.19159 15.0676 5.73525 15.0676 7.34484C15.0696 8.65913 14.6402 9.93775 13.8456 10.9846L13.845 10.9862C13.845 10.9862 13.6795 11.2036 13.6547 11.2328L8.99866 16.7242ZM5.03287 10.3214C5.03397 10.3214 5.16197 10.4913 5.19121 10.5277L8.99866 15.0182L12.8111 10.5217C12.8353 10.4913 12.9645 10.3203 12.965 10.3197C13.6145 9.46408 13.9655 8.41907 13.9642 7.34484C13.9642 6.02791 13.441 4.76491 12.5098 3.83369C11.5786 2.90248 10.3156 2.37933 8.99866 2.37933C7.68172 2.37933 6.41872 2.90248 5.48751 3.83369C4.55629 4.76491 4.03314 6.02791 4.03314 7.34484C4.03198 8.41973 4.38281 9.46535 5.03287 10.3214Z" fill="#FAFAFA"/>
                            </svg>
                            77
                        </span>
                        <div class="nosSecteurs__links">
                            <a href="#" class="nosSecteurs__a">Neuf</a>
                            <a href="#" class="nosSecteurs__a">Ancien (Chasse)</a>
                        </div>
                    </div>
                </div>
                <div class="nosSecteurs__item">
                    <img    srcset="images/content/nosSecteurs_08.webp 1920w,
                                    images/content/nosSecteurs_08_400.webp 500w"
                            src="images/content/nosSecteurs_08.webp" 
                            width="790"
                            height="340"
                            alt=""
                            title="" 
                            class="nosSecteurs__img">
                    <div class="nosSecteurs__content">
                        <span class="nosSecteurs__index">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M9.00081 10.1037C8.45521 10.1037 7.92185 9.94188 7.4682 9.63876C7.01455 9.33564 6.66097 8.9048 6.45218 8.40073C6.24338 7.89665 6.18875 7.34199 6.29519 6.80687C6.40164 6.27175 6.66437 5.78021 7.05017 5.39441C7.43597 5.00861 7.92751 4.74588 8.46263 4.63943C8.99775 4.53299 9.55242 4.58762 10.0565 4.79641C10.5606 5.00521 10.9914 5.35879 11.2945 5.81244C11.5976 6.26609 11.7594 6.79944 11.7594 7.34505C11.7586 8.07641 11.4676 8.77757 10.9505 9.29472C10.4333 9.81187 9.73217 10.1028 9.00081 10.1037ZM9.00081 5.68988C8.67345 5.68988 8.35344 5.78695 8.08125 5.96882C7.80905 6.1507 7.59691 6.4092 7.47163 6.71164C7.34635 7.01408 7.31358 7.34688 7.37744 7.66796C7.44131 7.98903 7.59895 8.28395 7.83043 8.51543C8.06191 8.74691 8.35683 8.90455 8.6779 8.96842C8.99897 9.03228 9.33177 8.9995 9.63422 8.87423C9.93666 8.74895 10.1952 8.5368 10.377 8.26461C10.5589 7.99242 10.656 7.67241 10.656 7.34505C10.6555 6.9062 10.481 6.48546 10.1707 6.17515C9.8604 5.86484 9.43965 5.69031 9.00081 5.68988Z" fill="#FAFAFA"/>
                                <path d="M8.99866 16.7242L4.34431 11.2351C4.27964 11.1526 4.21564 11.0697 4.15231 10.9862C3.35727 9.93893 2.92777 8.65973 2.92969 7.34484C2.92969 5.73525 3.5691 4.19159 4.70725 3.05344C5.8454 1.91529 7.38907 1.27588 8.99866 1.27588C10.6082 1.27588 12.1519 1.91529 13.2901 3.05344C14.4282 4.19159 15.0676 5.73525 15.0676 7.34484C15.0696 8.65913 14.6402 9.93775 13.8456 10.9846L13.845 10.9862C13.845 10.9862 13.6795 11.2036 13.6547 11.2328L8.99866 16.7242ZM5.03287 10.3214C5.03397 10.3214 5.16197 10.4913 5.19121 10.5277L8.99866 15.0182L12.8111 10.5217C12.8353 10.4913 12.9645 10.3203 12.965 10.3197C13.6145 9.46408 13.9655 8.41907 13.9642 7.34484C13.9642 6.02791 13.441 4.76491 12.5098 3.83369C11.5786 2.90248 10.3156 2.37933 8.99866 2.37933C7.68172 2.37933 6.41872 2.90248 5.48751 3.83369C4.55629 4.76491 4.03314 6.02791 4.03314 7.34484C4.03198 8.41973 4.38281 9.46535 5.03287 10.3214Z" fill="#FAFAFA"/>
                            </svg>
                            78
                        </span>
                        <div class="nosSecteurs__links">
                            <a href="#" class="nosSecteurs__a">Neuf</a>
                            <a href="#" class="nosSecteurs__a">Ancien (Chasse)</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Nos secteurs géo Section -->


    <!-- Blog Widget Section -->
    @include('redesign/page_parts/blog-widget')

</main>

@endsection