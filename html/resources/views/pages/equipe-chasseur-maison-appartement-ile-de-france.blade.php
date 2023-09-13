@extends('layouts/app')

@section('content')
<main>
    <!-- Main Section -->
    @include('parts/main')

    <!-- Section Breadcrumbs -->
    @include('parts/breadcrumbs')

    <!-- Section Hunting -->
    <section class="hunting" style="padding-top:unset;">
        <div class="container">
            <div class="hunting__header">
                <div class="hunting__header--row reverse">
                    <img    srcset="{{ asset('images/bg/chasse-immobiliere-paris-ile-de-france-min.webp') }} 800w,
                                    {{ asset('images/bg/chasse-immobiliere-paris-ile-de-france-min_430.webp') }} 430w"
                            src="{{ asset('images/bg/chasse-immobiliere-paris-ile-de-france-min.webp') }}" 
                            loading="lazy"
                            alt="chasse immobilière à Paris et en Ile de France"
                            title="chasse immobilière à Paris et en Ile de France"
                            class="hunting__header--img">
                    <div class="hunting__header--content">
                        <h1 style="color: #e3546d;font-size: 26px;font-weight: 500;font-family: Playfair Display,Times New Roman,serif;margin-bottom: 15px;max-width: 597px;width: 100%;">Notre Réseau de chasseur d’appartement et de maison</h1>
                        <p>Véritables chefs d’orchestre dédiés à votre projet, nos chasseurs immobiliers feront de votre achat et/ou vente de votre bien une expérience simple et agréable, en nous appuyant notamment sur l’expérience de notre solide réseau pour trouver des solutions à chacune des problématiques.</p>
                    </div>
                </div>
            </div>
            <div class="hunting__body">
                <ul>
                    <li>
                        <i class="fal fa-search-location"></i>
                        <h3>Équipe de chasseurs immobiliers</h3>
                        <p>Nous avons des partenaires et collaborateurs dans tous les départements
                            Franciliens et à Paris ! Pilier de notre savoir-faire, nos chasseurs
                            immobiliers seront présents à chaque étape de votre projet. Véritables
                            professionnels à l'œuvre, ils s'assurent que tout soit fait dans les
                            règles de l'art en vous prodiguant de précieux conseils afin qu’aucune
                            décision ne soit prise à la hâte ou par manque d’informations.
                        </p>
                    </li>
                    <li>
                        <i class="fal fa-user-tie"></i>
                        <h4>Agents immobiliers locaux</h4>
                        <p>La force de notre service est aussi lié aux relations que nous
                            entretenons avec les agences immobilières locales. Une fois votre mandat
                            signé, notre équipe communique votre besoin à l’ensemble des agents
                            locaux de notre réseau – cela positionne notre demande en Priorité
                            permettant une Réactivité sans faille (atout indispensable sur le marché
                            immobilier le plus tendu de France !).
                        </p>
                    </li>
                    <li>
                        <i class="fal fa-euro-sign"></i>
                        <h4>Courtier en prêt immobilier</h4>
                        <p>Le nombre d'années de votre emprunt, votre capacité d'endettement ainsi
                            que le montant du crédit et son taux d’intérêt sont des facteurs
                            importants lors de votre achat immobilier. Grâce à notre expert en prêt
                            immobilier vous serez conseillé sur votre montage financier et vous
                            pourrez éventuellement bénéficier d’un meilleur taux d’emprunt que celui
                            proposé par votre banque.
                        </p>
                    </li>
                    <li>
                        <i class="fal fa-clipboard-check"></i>
                        <h4>Contrôleur technique immobilier</h4>
                        <p>Notre chasseur immobilier a trouvé la maison ou l’appartement de vos
                            rêves, il est temps de passer au crible votre futur chez Vous (ou
                            investissement) afin de déclencher le processus d’achat en toute
                            sérénité. Notre partenaire spécialiste du Contrôle Technique
                            d’Habitation réalisera un audit complet (isolations, installation
                            chauffage, châssis et fenêtres…) et nous transmettra un rapport
                            complet.
                        </p>
                    </li>
                    <li>
                        <i class="fal fa-building"></i>
                        <h4>Promoteurs immobiliers</h4>
                        <p>Afin de s’assurer que votre bien vous soit livré dans les délais, qu’il
                            soit de qualité et en corrélation avec ce qui vous a été présenté avant
                            l’achat, nous sélectionnons et travaillons avec des promoteurs
                            immobiliers qui jouissent d’une solide réputation sur le marché de
                            l’immobilier neuf et dont l’expertise n’est plus à démontrer.
                        </p>
                    </li>
                    <li>
                        <i class="fal fa-ruler-combined"></i>
                        <h4>Architectes</h4>
                        <p>Depuis de nombreuses années nous travaillons avec des architectes vous
                            permettant de réaliser tous vos projets, avant ou après achat ! Une idée
                            bien précise en tête ? Rendez-là réalisable ! Optimisez l’espace de
                            votre investissement locatif et il sera plus facilement loué par
                            exemple. Envie d’un nouveau concept ? Nous le rendons possible !
                        </p>
                    </li>
                    <li>
                        <i class="fal fa-briefcase"></i>
                        <h4>Entrepreneurs en travaux</h4>
                        <p>Au fil des années et des chantiers, nous avons établi des relations
                            solides avec nos partenaires experts en travaux d’intérieur et
                            extérieur. Cela nous permet de vous accompagner bien au-delà de l’achat
                            de votre future maison ou appartement – qu’il s'agisse d'une rénovation
                            de cuisine ou d'un projet d'envergure lié à l'achat d'une ancienne
                            bâtisse, nous vous guiderons dans le choix des prestataires tout en
                            offrant des avis objectifs sur les devis soumis.
                        </p>
                    </li>
                    <li>
                        <i class="fal fa-handshake"></i>
                        <h4>Gestionnaires Locatifs, Garants et Assurances Loyers impayés</h4>
                        <p>Investir dans l'immobilier locatif avec sérénité, c'est assurer le retour
                            sur investissement de votre bien et le mettre en location en toute
                            confiance. Vous voulez investir mais vous n'avez pas le temps ? Nous
                            pouvons vous aider ! Nos Partenaires géreront en partie ou totalement
                            votre location – sélection des locataires, gestion des loyers,
                            assurances en cas d’impayés, maintenance (…) Notre réseau d’Experts
                            Locatifs sont expérimentés pour vous accompagner et assurer votre
                            tranquillité.
                        </p>
                    </li>
                    <li>
                        <i class="fal fa-signature"></i>
                        <h4>Notaires immobiliers</h4>
                        <p>La visite chez le notaire marquera la dernière étape de votre projet. La
                            signature concrétisera officiellement votre acquisition. Pour la plupart
                            des achats, les acheteurs se font automatiquement conseiller par le
                            notaire du vendeur. Nous conseillons à tous nos clients d’avoir leur
                            propre notaire. Celui-ci défendra alors vos propres intérêts face au
                            notaire du vendeur sans vous coûter plus cher étant donné que les
                            notaires se partagent les honoraires. Vous avez donc tout à gagner en
                            ayant votre propre notaire.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

</main>
@endsection