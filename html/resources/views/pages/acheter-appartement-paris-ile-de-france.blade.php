@extends('layouts/app')

@section('content')
<main>
    <!-- Main Section -->
    @include('parts/main')

    <!-- Section Breadcrumbs -->
    @include('parts/breadcrumbs')

    <!-- Our Services Section -->
    @include('parts/services')

    <!-- Parallax section #3 -->
    @include('parts/parallax3')

    <!-- Section Hunting -->
    <section class="hunting">
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
                        <h1 class="section__h2--chasseur" style="color: #e3546d;font-size: 26px;font-weight: 500;font-family: Playfair Display,Times New Roman,serif;margin-bottom: 15px;max-width: 597px;width: 100%;">Chasse immobilière : accompagnement pour l’achat de votre futur chez Vous </h1>
                        <p style="font-family:'Times New Roman',serif;color:#000000;">Il y a ceux qui aiment la vieille pierre et il y en a d’autres qui préfèrent poser leurs tableaux sur les murs immaculés d’un appartement neuf ! Parce ce que l’achat de son futur logement est une étape importante de la vie, notre agence a créé un service de chasse immobilière afin de dénicher la maison ou l’appartement qui vous donnera envie de dire " OUI ! ".</p>
                    </div>
                </div>
            </div>
            <div class="hunting__body">
                <ul>
                    <li>
                        <i class="fal fa-chess"></i>
                        <h3>Définir la stratégie d’achat en fonction de vos envies</h3>
                        <p>Tout commence par une bonne organisation, et lorsqu’on se lance dans un projet immobilier, il y a beaucoup de choses à prendre en compte.</p>
                        <p>Pour commencer, il est nécessaire de bien définir votre objectif principal. Lors de notre première rencontre que l’on aime appeler “rendez-vous de Découverte Projet”, vous allez nous parler de vous, de vos envies, de votre vie!<br>
                            <span style="font-style:italic;">“Qu’est ce qui vous amène à vous lancer dans cette nouvelle aventure ?”</span><br>
                            <span style="font-style:italic;">“Pourquoi souhaitez vous investir dans l’immobilier ?”</span> <br>
                            <span style="font-style:italic;">“L’arrivée d’un nouvel enfant ?”</span><br>
                            <span style="font-style:italic;">“Une mutation professionnelle ou se rapprocher de votre lieu de travail ?”</span><br>
                            <span style="font-style:italic;">“Améliorer votre confort de vie ?”</span><br>
                            <span style="font-style:italic;">“Une envie de changement, et troquer la ville pour la campagne paisible des Yvelines ou du 77 ?”</span>
                            …
                        </p>
                        <p>Une fois votre objectif bien défini, nous établissons la liste de vos critères afin que nous puissions affiner la recherche de votre futur bien, pas à pas. <br>
                            <span style="font-style:italic;">“Où souhaitez-vous vivre ?” </span> <br>
                            <span style="font-style:italic;">“À combien de temps de votre lieu de travail ?” </span> <br>
                            <span style="font-style:italic;">“Quelle superficie ?”</span> <br>
                            <span style="font-style:italic;">“Ancien ou neuf ?” </span><br>
                            <span style="font-style:italic;">“Appartement ou maison ?”</span>
                        </p>
                        <p>Suite à cet échange, vous recevrez par mail le Carnet De Bord, contenant :<br>
                            <b>1. L’objectif de votre projet </b><br>
                            <b>2. Le listing des critères de votre futur bien</b><br>
                            <b>3. La stratégie d’achat personnalisée</b><br>
                            <b>4. L’Itinéraire Projet, plan incluant toutes les étapes jusqu’à la concrétisation de l’achat</b>
                        </p>
                    </li>
                    <li>
                        <i class="fal fa-door-open"></i>
                        <h3>Sécuriser votre Projet : capacité d’emprunt, prospection immobilière, organisation des visites, compromis d’achat, notaires et déménagement</h3>
                        <p>Dès réception de votre feu vert, nous commençons la prospection immobilière. Dans le même temps, nous vérifions auprès de nos partenaires spécialistes en financement que le montage financier soit bien optimisé et corresponde à votre capacité d’emprunt.</p>
                        <p>Une fois que vous avez sélectionné un ou plusieurs biens qui vous intéressent, nous contactons les vendeurs afin de recueillir toutes les informations, puis organisons et vous conseillons lors de la visite.</p>
                        <p>Vous n’êtes pas sur place ou vous n’êtes pas disponible pour les visites ? Pas de problème ! Nous le sommes pour vous ! Nous nous rendons sur place afin de vous permettre de visiter vos biens sélectionnés en Visio. </p>
                        <p>Ça y est, vous avez LE Coup de Coeur !  Il est temps de faire une Offre d’Achat. Sans pression, mais avec précision, l’équipe La Fabrique à Toits met tout en oeuvre pour que votre offre soit acceptée, et bien sûr, négociée au meilleur prix.</p>
                        <p>Votre offre a été acceptée ! Nous envoyons immédiatement nos professionnels du bâtiment réaliser la visite technique afin de relever les diagnostiques obligatoires de votre futur bien. En cas de défauts ou vice cachés, pas de panique, notre compromis d’achat contient une clause restrictive qui vous permet de vous rétracter immédiatement.  </p>
                        <p>Notre objectif est de vous protéger jusqu’au bout. </p>
                        <p>Et pour cela, nous conseillons toujours à nos clients de faire appel à leur propre notaire, plutôt que de vous faire conseiller par celui du vendeur. Avoir deux notaires ne coûte pas plus cher car ils se partagent les honoraires, et cela vous permet de mieux défendre vos intérêts. </p>
                    </li>
                    <li>
                        <i class="fal fa-user-friends"></i>
                        <h3>Nous sommes à vos côtés à chaque instant, des demandes en assemblée générale au suivi des travaux jusqu’à la mise en location</h3>
                        <p>Nous vous appuyons en vous offrant notre expertise et notre réseau afin de “booster" vos demandes administratives, vérifier les devis de vos travaux de rénovation, ou même, gérer votre déménagement ! Votre Projet immobilier, est aussi Notre Projet. Nous mettons tout en œuvre pour qu’il soit couronné de succès et bien sûr… en toute sérénité.</p>
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
        <h2 class="parallax__heading">Grand Paris : soyez malin, investissez Aujourd’hui !</h2>
        <div class="container">
            <div class="parallax__inner">
                <p class="parallax__text">Les prix de l’immobilier ont triplé en IDF ces 20 dernières années, êtes-vous prêts à investir sur les 20 prochaines ?</p>
                <button  class="btn-primary contact_btn" >
                    Contactez-Nous
                </button>
            </div>
        </div>
    </section>

    <!-- Slider Section -->
    @include('parts/slider')

    <!-- Cities Section -->
    @include('parts/cities')

    <!-- Blog Widget -->
    @include('parts/blog-widget')
</main>
@endsection