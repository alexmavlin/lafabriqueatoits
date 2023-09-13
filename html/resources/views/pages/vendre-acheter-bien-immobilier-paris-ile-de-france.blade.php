@extends('layouts/app')

@section('content')
<main>
    <!-- Main Section -->
    @include('parts/main')

    <!-- Section Breadcrumbs -->
    @include('parts/breadcrumbs')

    <!-- Services -->
    <section class="question__cards">
        <h1 class="section__h2--red" style="color: #e3546d;font-size: 26px;font-weight: 500; margin: auto; font-family: Playfair Display,Times New Roman,serif;margin-bottom: 15px;max-width: 597px;width: 100%;">Notre service de Double Projet pour l’achat et la vente de votre maison ou appartement</h1>
        <p class="section__description">LES ÉTAPES DE NOTRE SERVICE DOUBLE PROJET</p>
        <div class="container">
            <div class="question__cards--inner">
    
                <!-- Card #1 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-glasses"></i>
                        <h3 class="question__cards--card__heading">Achat : Rapport Stratégique</h3>
                    </div>
                    <p class="question__cards--card__content">Nous établissons un rapport dans lequel les objectifs principaux liés à votre projet, les critères du bien souhaité, la zone de recherche ainsi que la stratégie d’approche vous seront détaillées.</p>
                </div>
    
                <!-- Card #2 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-calculator"></i>
                        <h3 class="question__cards--card__heading">Vente : Estimation et Stratégie</h3>
                    </div>
                    <p class="question__cards--card__content">Après avoir visité votre bien, nous établissons une estimation précise de celui-ci et vous détaillons la stratégie de vente afin qu’elle puisse se concrétiser sans encombre !</p>
                </div>
    
                <!-- Card #3 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-euro-sign"></i>
                        <h3 class="question__cards--card__heading">Achat & Vente : Financement</h3>
                    </div>
                    <p class="question__cards--card__content">Nous nous assurons que le montage financier soit en corrélation avec votre situation et notre courtier en financement travaillera à vous faire une offre de financement.</p>
                </div>
    
                <!-- Card #4 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-eye"></i>
                        <h3 class="question__cards--card__heading">Achat : Prospection immobilière & Visites</h3>
                    </div>
                    <p class="question__cards--card__content">Nous activons notre réseau d’agents immobiliers locaux ainsi que les alertes sur les plateformes de vente afin de gagner en réactivité et visiter les biens correspondants à vos critères.</p>
                </div>
    
                <!-- Card #5 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-pen-fancy"></i>
                        <h3 class="question__cards--card__heading">Achat : Offre d’achat et Compromis</h3>
                    </div>
                    <p class="question__cards--card__content">Vous avez eu le Coup de Cœur ? Nous vous conseillons lors de la négociation afin que votre offre soit acceptée et nous serons à vos côtés à la signature du compromis de vente.</p>
                </div>
    
                <!-- Card #6 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-scroll"></i>
                        <h3 class="question__cards--card__heading">Achat : Décryptage des Diagnostics </h3>
                    </div>
                    <p class="question__cards--card__content">Nous analysons pour vous le DDT (dossier de diagnostic technique) afin de s’assurer que les caractéristiques du bien correspondent aux éléments avancés par les vendeurs. </p>
                </div>
    
                <!-- Card #7 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-tachometer-alt"></i>
                        <h3 class="question__cards--card__heading">Achat : Visite Technique de votre Bien </h3>
                    </div>
                    <p class="question__cards--card__content">Afin de s’assurer que votre bien soit en bonne santé, notre partenaire professionnel de la construction, réalisera une inspection complète de votre futur logement. </p>
                </div>
    
                <!-- Card #8 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-camera-retro"></i>
                        <h3 class="question__cards--card__heading">Vente : Shooting et Annonces</h3>
                    </div>
                    <p class="question__cards--card__content">Dès que votre offre d’achat est acceptée, nous démarrons le processus de vente de votre bien en organisant le shooting photo et en créant l’annonce sur Seloger.com et Leboncoin.</p>
                </div>
    
                <!-- Card #9 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-tachometer-alt"></i>
                        <h3 class="question__cards--card__heading">Vente : Optimisation des Visites</h3>
                    </div>
                    <p class="question__cards--card__content">Nous nous chargeons des demandes de renseignements et filtrons les visiteurs en s’assurant qu’ils ont bien un accord de principe de la part d’un organisme bancaire.</p>
                </div>

                <!-- Card #10 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-file-contract"></i>
                        <h3 class="question__cards--card__heading">Vente : Négociation et Compromis</h3>
                    </div>
                    <p class="question__cards--card__content">Un acheteur est intéressé ? Nous vous conseillons durant la négociation en évaluant notre marge de manœuvre et nous vous accompagnons lors de la signature du compromis de vente. </p>
                </div>

                <!-- Card #11 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-signature"></i>
                        <h3 class="question__cards--card__heading">Achat & Vente : Signatures Notaires </h3>
                    </div>
                    <p class="question__cards--card__content">Nous vous partageons notre réseau de Notaires de confiance afin de vous accompagner et vous conseiller lors de la signature de l’Acte Authentique.  </p>
                </div>

                <!-- Card #12 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-copy"></i>
                        <h3 class="question__cards--card__heading">Achat : Démarches Administratives </h3>
                    </div>
                    <p class="question__cards--card__content">Notre équipe vous aide à chaque étape de votre projet et notamment lors des démarches administratives auprès de la Mairie ou de la Copropriété.</p>
                </div>

                <!-- Card #13 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-toolbox"></i>
                        <h3 class="question__cards--card__heading">Achat : Aide pour les Travaux </h3>
                    </div>
                    <p class="question__cards--card__content">Notre réseau d’architectes et d’entrepreneurs de confiance est à votre disposition pour réaliser des travaux d’envergures ou simplement personnaliser votre nouveau chez vous. </p>
                </div>

                <!-- Card #14 -->
                <div class="question__cards--card">
                    <div class="question__cards--card__header">
                        <i class="fal fa-box-open"></i>
                        <h3 class="question__cards--card__heading">Achat : Prise en charge du Déménagement</h3>
                    </div>
                    <p class="question__cards--card__content">Étape finale de notre aventure, nous pouvons inclure votre déménagement dans nos honoraires d’accompagnement afin de vous faciliter toujours un peu plus la vie.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax -->
    <section class="parallax" data-scrollax-parent="true">
        <div    class="parallax__parallax-window"
                data-scrollax="properties: { translateY: '30%' }"
                style="background-image:url('{{ asset('images/bg/BM-visite-technique-avant-achat-appartement-min.webp') }}')">
        </div>
        <div class="backdrop__filter--darken__parallax"></div>
        <h2 class="parallax__heading">Visite technique : avec Nous, bien acheter n’est pas une question de chance</h2>
        <div class="container">
            <div class="parallax__inner">
                <p class="parallax__text">Contrôle avant achat de votre futur bien, des professionnels du bâtiment réalisent une inspection complète</p>
                <a  href="{{ route('acheterAppartementParisIleDeFrance') }}" 
                    class="btn-primary" 
                    title="service de chasseur immobilier à Paris et en Ile de France">
                    + Service Chasseur Immobilier
                </a>
            </div>
        </div>
    </section>

    <!-- Section Hunting -->
    <section class="hunting">
        <div class="container">
            <div class="hunting__header">
                <div class="hunting__header--row reverse">
                    <img    srcset="{{ asset('images/bg/chasseur-appartement-maison-min.webp') }} 800w,
                                    {{ asset('images/bg/chasseur-appartement-maison-min_430.webp') }} 430w"
                            src="{{ asset('images/bg/chasseur-appartement-maison-min.webp') }}" 
                            loading="lazy"
                            alt="Achat et vente de bien à Paris et en Ile de France"
                            title="Achat et vente de bien à Paris et en Ile de France"
                            class="hunting__header--img">
                    <div class="hunting__header--content">
                        <h2 class="section__h2--chasseur">Acheter puis vendre son bien Immobilier à Paris et en Ile de France </h2>
                        <p style="font-family:'Times New Roman',serif;color:#000000;">Notre service Double Projet a pour objectif de vous simplifier la vie ! Grâce à un processus de recherche du bien idéal pour l’achat, notre expérience pour la vente ainsi que de notre réseau d’architectes, notaires ou courtiers en financement, vous aurez toutes les cartes en main pour concrétiser votre projet !</p>
                    </div>
                </div>
            </div>
            <div class="hunting__body">
                <ul>
                    <li>
                        <i class="fal fa-chess"></i>
                        <h3>Organiser votre projet d’achat et de vente dans sa Globalité</h3>
                        <p>Une bonne organisation est primordiale lorsqu’on se lance dans un Double Projet immobilier. En effet, il y a beaucoup de choses à prendre en compte.</p>
                        <p>Tout d’abords, il faut bien définir l’objectif principal de votre futur bien. Lors de notre première rencontre que l’on appelle “rendez-vous de Découverte Projet”, vous parlerez de vous, de vos envies, de votre vie ! <br>
                            <span style="font-style:italic;">“Qu’est ce qui vous amène à vous lancer dans cette nouvelle aventure ?”</span><br>
                            <span style="font-style:italic;">“Pourquoi souhaitez vous investir dans l’immobilier ?”</span> <br>
                            <span style="font-style:italic;">“L’arrivée d’un nouvel enfant ?”</span><br>
                            <span style="font-style:italic;">“Une mutation professionnelle ou se rapprocher de votre lieu de travail ?”</span><br>
                            …
                        </p>
                        <p>Une fois votre objectif d’investissement bien défini, nous établissons une liste complète de vos critères concernant le bien afin que nous puissions affiner la recherche et trouver celui qui correspond parfaitement vos envies.<br>
                            <span style="font-style:italic;">“Quel secteur ?”</span> <br>
                            <span style="font-style:italic;">“Êtes-vous ouvert à de possible rénovations ou travaux ?”</span> <br>
                            <span style="font-style:italic;">“Quelle superficie ?”</span> <br>
                            <span style="font-style:italic;">“Ancien ou neuf ?” </span><br>
                            <span style="font-style:italic;">“Appartement ou maison ?”</span>
                        </p>
                        <p>UPuis nous engagerons la discussion sur la vente de votre bien actuel : <br>
                            <span style="font-style:italic;">“En quel état est-il ?”</span> <br>
                            <span style="font-style:italic;">“Quels sont ses points forts ?”</span> <br>
                            <span style="font-style:italic;">“Quels sont ses caractéristiques ?”</span> <br>
                            <span style="font-style:italic;">“Quel est son positionnement sur le marché local ?”</span><br>
                        </p>
                        <p>Suite à cet échange, vous recevrez par mail le Carnet De Bord, contenant :<br>
                            <b>1. L’objectif de votre projet</b><br>
                            <b>2. Le listing des critères de votre futur bien</b><br>
                            <b>3. La stratégie d’achat personnalisée</b><br>
                            <b>4. L’Itinéraire Projet, plan incluant toutes les étapes jusqu’à la concrétisation de l’achat de votre futur bien.</b><br>
                            <b>5. Ainsi que notre Estimation complète de votre bien à vendre</b>
                        </p>
                    </li>
                    <li>
                        <i class="fal fa-door-open"></i>
                        <h3>Synchroniser votre Projet : achat et vente des biens, signatures notaires, prêt relai et déménagement</h3>
                        <p>Il est important de mettre en place 2 stratégies bien distinctes: </p>
                        <p>Une stratégie d’achat, qui a pour but de trouver votre Coup de Coeur, le plus rapidement possible et négocié au meilleur prix ! </p>
                        <p>Une stratégie de vente, qui a pour but de faire entrer votre bien actuel sur le marché au bon moment afin de tirer un maximum de son potentiel pour le prix de vente. </p>
                        <p>Notre expérience nous permet de pouvoir synchroniser avec succès ces deux stratégies afin de faciliter et sécuriser au maximum Votre projet. Le processus se déroule premièrement par la chasse immobilière de votre nouveau bien, et une fois le Compromis d’Achat signé, nous enclenchons la stratégie de vente de votre résidence actuelle.</p>
                        <p>Une fois la partie stratégie effectuée, nous coordonnons les signatures officielles chez le Notaires pour chacune des opérations et organisons le déménagement de votre ancienne résidence à l’emménagement dans votre nouveau Chez Vous.  </p>
                    </li>
                    <li>
                        <i class="fal fa-user-friends"></i>
                        <h3>Nous sommes à vos côtés à chaque instant, des demandes en assemblée générale au suivi des travaux</h3>
                        <p>Nous vous accompagnons en vous offrant notre réseau et notre expertise afin de donner un coup de “boost" à vos démarches administratives, contrôler les devis des éventuels travaux de rénovation, ou même, coordonner et gérer votre déménagement et emménagement ! Votre Double Projet immobilier, est aussi Notre Projet. Nous mettons tout en oeuvre pour qu’il soit couronné de succès et bien sûr… en toute sérénité.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Parallax section #4 -->
    <section class="parallax" data-scrollax-parent="true">
        <div    class="parallax__parallax-window"
                data-scrollax="properties: { translateY: '30%' }"
                style="background-image:url('{{ asset('img/content/bg/BM-programme-neuf-ile-de-france.webp') }}')">
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

    <!-- Slider Section -->
    @include('parts/slider')

    <!-- Cities Section -->
    @include('parts/cities')

</main>
@endsection