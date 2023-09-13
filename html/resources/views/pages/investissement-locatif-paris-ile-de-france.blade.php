@extends('layouts/app')

@section('content')
<main>
    <!-- Main Section -->
    @include('parts/main')

    <!-- Section Breadcrumbs -->
    @include('parts/breadcrumbs')

    <!-- Our Services Section -->
    @include('parts/services2')

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
                    <img    srcset="{{ asset('images/bg/appartement-investissement-locatif-paris-min.webp') }} 800w,
                                    {{ asset('images/bg/appartement-investissement-locatif-paris-min_430.webp') }} 430w"
                            src="{{ asset('images/bg/appartement-investissement-locatif-paris-min.webp') }}" 
                            loading="lazy"
                            alt="appartement pour investissement locatif à Paris et en Ile de France"
                            title="appartement pour investissement locatif à Paris et en Ile de France"
                            class="hunting__header--img">
                    <div class="hunting__header--content">
                        <h2 class="section__h2--chasseur">Réaliser votre investissement locatif à Paris et en Ile de France</h2>
                        <p style="font-family:'Times New Roman',serif;color:#000000;">Investir dans l’immobilier représente une formidable opportunité sur de multiples points : élargissement de vos revenus, construction de votre patrimoine, valeur en croissance constante. La Fabrique à Toits vous apporte son expertise pour réaliser un investissement locatif clé en main et rentable.</p>
                    </div>
                </div>
            </div>
            <div class="hunting__body">
                <ul>
                    <li>
                        <i class="fal fa-chess"></i>
                        <h3>Définir la stratégie d’investissement en fonction de vos objectifs</h3>
                        <p>Un investissement immobilier est un projet d’envergure et commence avant tout par une bonne organisation. Pour le mener à bien, il faut absolument tout prendre en compte.</p>
                        <p>Premièrement, vous devez définir l’objectif principal de votre investissement. Lors de notre première rencontre que l’on intitule “rendez-vous de Découverte Projet”, vous nous parlerez de vous, de vos envies, de votre vie!<br>
                            <span style="font-style:italic;">“Qu’est ce qui vous amène à vous lancer dans ce nouveau projet ?”</span><br>
                            <span style="font-style:italic;">“Pourquoi souhaitez vous investir dans l’immobilier ?”</span> <br>
                            <span style="font-style:italic;">“Quels sont vos projets, vos ambitions à long terme ?”</span><br>
                            <span style="font-style:italic;">“Avez-vous déjà investi ou est-ce votre premier investissement immobilier?”</span><br>
                            …
                        </p>
                        <p>Une fois votre objectif d’investissement bien défini, nous établissons une liste complète de vos critères concernant le bien afin que nous puissions affiner la recherche et trouver celui qui correspond parfaitement vos envies.<br>
                            <span style="font-style:italic;">“Quel secteur ?”</span> <br>
                            <span style="font-style:italic;">“Êtes-vous ouvert à de possible rénovations ou travaux ?”</span> <br>
                            <span style="font-style:italic;">“Quelle superficie ?”</span> <br>
                            <span style="font-style:italic;">“Ancien ou neuf ?” </span><br>
                            <span style="font-style:italic;">“Appartement ou maison ?”</span>
                        </p>
                        <p>Suite à cet échange, vous recevrez par mail le Carnet De Bord, contenant :<br>
                            <b>1. L’objectif de votre projet d’investissement</b><br>
                            <b>2. Le listing de vos critères</b><br>
                            <b>3. La stratégie d’investissement personnalisée</b><br>
                            <b>4. L’Itinéraire Projet, plan incluant toutes les étapes jusqu’à la concrétisation de l’achat de votre futur bien.</b>
                        </p>
                    </li>
                    <li>
                        <i class="fal fa-door-open"></i>
                        <h3>Suivi complet de votre Projet d'Investissement Locatif : capacité d’emprunt, prospection immobilière, organisation des visites, compromis d’achat, notaires…</h3>
                        <p>Dès la réception de votre feu vert, nous lançons la prospection immobilière. Simultanément, nous vérifions auprès de nos partenaires spécialistes en financement que le montage financier soit bien optimisé et corresponde à votre capacité d’emprunt.</p>
                        <p>Lorsque vous avez sélectionné un ou plusieurs biens qui vous intéressent, nous recueillions toutes les informations auprès des vendeurs. Si celles-ci correspondent à vos critères, nous organisons une visite pendant laquelle nous vous conseillons et vous partageons notre expertise.</p>
                        <p>Vous n’avez pas le temps pour les visites ou vous n’êtes pas sur place ? Pas de soucis ! Nous sommes là pour vous ! Nous allons directement sur place pour vous permettre de visiter vos biens sélectionnés en Visio. </p>
                        <p>Ça y est, vous avez trouvé votre Coup de Coeur !  Il est temps de faire une Offre d’Achat. Sans pression, mais avec précision, l’équipe La Fabrique à Toits fait tout pour que votre offre soit acceptée, et évidemment, nous négocions pour vous le meilleur prix.</p>
                        <p>Félicitation, votre offre a été acceptée ! Nous contactons immédiatement nos professionnels du bâtiment pour qu’ils réalisent la visite technique afin de relever les diagnostiques obligatoires de votre futur investissement. En cas de vice caché ou de quelconque défaut, pas de panique, notre clause restrictive que contient notre compromis d’achat vous permet de vous rétracter immédiatement. </p>
                        <p>Notre objectif est de vous protéger jusqu’au bout. </p>
                        <p>Et pour cela, nous conseillons toujours à nos clients de faire appel à leur propre notaire, plutôt que de vous faire conseiller par celui du vendeur. De plus, puisse qu’ils se partagent les honoraires, avoir deux notaires ne coûte pas plus cher, et cela vous permet de mieux défendre vos intérêts. </p>
                    </li>
                    <li>
                        <i class="fal fa-user-friends"></i>
                        <h3>Nous sommes à vos côtés à chaque instant, des demandes en assemblée générale au suivi des travaux jusqu’à la mise en location</h3>
                        <p>Nous vous supportons en vous offrant notre expertise et notre réseau afin de “booster" vos demandes administratives, ou même, vérifier les devis de vos travaux de rénovation. Et la cerise sur le gâteau : nous vous accompagnons même pour la mise en location de votre bien ! Notre agence partenaire spécialisée en investissement locatif s’occupe de tout : de la sélection des locataires jusqu’aux assurances en cas de dégradations ou d’impayés. Votre Projet d’investissement immobilier, est aussi Notre Projet. Nous mettons tout en oeuvre pour qu’il soit couronné de succès et bien sûr… en toute sérénité.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Parallax -->
    <section class="parallax" data-scrollax-parent="true">
        <div    class="parallax__parallax-window"
                data-scrollax="properties: { translateY: '30%' }"
                style="background-image:url('{{ asset('img/content/bg/BM-investissement-grand-paris-min.webp') }}')">
        </div>
        <div class="backdrop__filter--darken__parallax"></div>
        <h2 class="parallax__heading">Grand Paris : soyez malin, investissez Aujourd’hui !</h2>
        <div class="container">
            <div class="parallax__inner">
                <p class="parallax__text">Les prix de l’immobilier ont triplé en IDF ces 20 dernières années, êtes-vous prêts à investir sur les 20 prochaines ?</p>
                <a  href="{{ route('immobilierNeufIleDeFrance') }}" 
                    class="btn-primary" 
                    title="programmes immobilier neuf en Ile de France">
                    Tous nos programmes neufs
                </a>
            </div>
        </div>
    </section>

    <!-- Cities Section -->
    @include('parts/cities')

    <!-- Slider -->
    @include('parts/slider')

</main>
@endsection