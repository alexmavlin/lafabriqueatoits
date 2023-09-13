@extends('layouts/app')

@section('content')
<main>
    <!-- Main Section -->
    @include('parts/main')

    <!-- Section Breadcrumbs -->
    @include('parts/breadcrumbs')

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
                        <h1 style="color: #e3546d;font-size: 26px;font-weight: 500;font-family: Playfair Display,Times New Roman,serif;margin-bottom: 15px;max-width: 597px;width: 100%;">Comment acheter un bien immobilier ? </h1>
                        <p>Découvrez nos conseils pour bien acheter votre futur appartement ou maison. Nos agents commencent toujours par élaborer le "l'Itinéraire Projet" qui permet d'organiser votre projet, de déterminer les points de vigilances et s'assurer de concrétiser vos souhaits.</p>
                    </div>
                </div>
            </div>
            <div class="hunting__body">
                <ul>
                    <li>
                        <i class="fal fa-chess"></i>
                        <h3>Élaborer votre plan de recherche</h3>
                        <p>Lorsque nous commençons une recherche immobilière, nos Experts commencent toujours par élaborer le " Carnet de bord ", celui-ci permet d'organiser efficacement la recherche et de déterminer la faisabilité de votre projet de vie. Voici les 8 points principaux à définir dans votre Carnet de Bord :</p>
                        <p>1. l'objectif de l'acquisition, investissement locatif, achat de résidence principale ou secondaire<br>
                            2. la localisation (villes et quartiers de préférence)<br>
                            3. le type de bien (appartement ou maison, ancien ou neuf)<br>
                            4. la superficie<br>
                            5. le nombre de pièces<br>
                            6. les prestations pratiques (garage, parking privée ou souterrain..)<br>
                            7. les prestations de confort (balcon, jardin..)<br>
                            8. le budget idéal et le budget maximum (incluant l'ensemble des frais : honoraires d'agence, frais de notaire, déménagement..)
                        </p>
                        <p>Ensuite, dans le but de déterminer la faisabilité de votre projet, il vous faut définir vos capacités d'emprunts et connaître les différentes aides à votre disposition pour financer votre logement. Chez la Fabrique à Toits, nous travaillons avec des Courtiers en Financement de confiance afin de bénéficier des meilleurs taux, nous vous conseillons donc de choisir avec soin votre partenaire de financier. Aussi sachez que nos Chasseurs Immobilier se tiennent constamment informés des aides relatives à l'achat de bien et leurs conditions d'obtention.</p>
                    </li>
                    <li>
                        <i class="fal fa-door-open"></i>
                        <h3>Une recherche organisée, c'est une recherche efficace </h3>
                        <p>La première chose à faire est de connaître l'état du Marché, pour cela nos Experts Immobilier effectuent une recherche préliminaire sur internet afin d'avoir une appréciation globale du Marché qu’ils préciseront ensuite en activant leurs réseaux sur le terrain. </p>
                        <p>L’étape suivante consiste à débuter votre recherche sur les sites d'annonces immobilières en activant les alertes sur les nouveaux logements qui pourraient correspondre à vos critères et de vous rapprocher des agences locales afin d'être tenu au courant des biens en exclusivité ! </p>
                        <p>Si la recherche sur internet est ouverte à tous, pouvoir connaître les biens "OFF-MARKET" se révèle plus compliqué en particulier sur un marché tendu comme à Paris et en Ile de France. Chez la Fabrique à Toits nous entretenons toute l'année des liens étroits avec les acteurs locaux afin de proposer les meilleures offres à nos clients. Nous vous conseillons donc de vous déplacer si vous en avez le temps et la possibilité ou de travailler avec un professionnel (comme nous) en vue de concrétiser rapidement et efficacement votre projet immobilier. </p>
                    </li>
                    <li>
                        <i class="fal fa-door-open"></i>
                        <h3>Visitez activement et toujours avec attention </h3>
                        <p>Lorsque vous investissez dans l'immobilier ancien, les visites constituent une étape cruciale. Au-delà des sentiments que vous pouvez éprouver lors d'une visite “coup de coeur”, nous vous conseillons vivement de garder "la tête froide" même lorsque vous serez conquis par un bien en particulier en vous référant à certains éléments concrets. </p>
                        <p>Nos chasseurs immobilier ont dressé une liste d'éléments sur lesquels ils prêtent une attention particulière lorsqu'ils accompagnent nos clients en visite : <br>
                            - Évaluer le quartier avant la visite (commerces, écoles, voisinage,...) ainsi que l'accès au logement (stationnement &amp; transport)<br>
                            - Surveiller la luminosité par rapport à l'orientation du bien<br>
                            - Jauger les vis-à-vis et nuisances sonores<br>
                            - Apprécier la disposition des pièces du logement par rapport à vos besoins et à votre mode de vie<br>
                            - Vérifier que les installations électriques soient aux normes et les prises en nombre suffisant<br>
                            - Noter d’éventuelles traces d'humidité<br>
                            - Contrôler l'état de la plomberie<br>
                            - Tester le système de chauffage et avoir des infos sur le coût<br>
                            - Faire un audit des équipements (double vitrage, emplacement des prises, équipements cuisine &amp; salle de bain, fermeture de la porte, aération, arrivée d'eau, état des sols)<br>
                            - Visiter de A à Z en n'oubliant pas la cave ou le parking
                        </p>
                        <p>Avant de repartir, n'oubliez pas de questionner le propriétaire sur le coût de la taxe d'habitation, du loyer sur ce type de bien (même si c'est pour l'achat de votre résidence principale, cela reste une donnée intéressante pour l'avenir) des charges, sur la gestion de la copropriété et les projets de constructions autour du logement. </p>
                        <p>Chez la Fabrique à Toits, nous avons inclus dans notre service une Visite Technique qui est effectuée par un partenaire spécialisé dans le contrôle technique du bâtiment de l'immobilier et permettant de s'assurer que le bien choisi par nos clients est en parfaite santé ! </p>
                        <p>Bien sûr, il ne faut pas oublier de chiffrer les éventuels travaux et surtout de trouver des prestataires de confiance.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Parallax section #1 -->
    <section class="parallax" data-scrollax-parent="true">
        <div    class="parallax__parallax-window"
                data-scrollax="properties: { translateY: '30%' }"
                style="background-image:url('{{ asset('images/bg/chasseur-immobilier-ile-de-france-min.webp') }}')">
        </div>
        <div class="backdrop__filter--darken__parallax"></div>
        <h2 class="parallax__heading">Ile de France : 1 bien vendu toutes les 3 minutes* !</h2>
        <div class="container">
            <div class="parallax__inner">
                <p class="parallax__text">Gagner en réactivité en faisant appel à nos chasseurs immobiliers expérimentés</p>
                <a  href="{{ route('acheterAppartementParisIleDeFrance') }}" 
                    class="btn-primary" 
                    title="service de chasseur immobilier à Paris et en Ile de France">
                    + service de Chasse Immobilière
                </a>
                <p class="parallax__ps">* Source : 182 000 biens vendus en 2021 selon Les Notaires de France</p>
            </div>
        </div>
    </section>

    <!-- Section Hunting -->
    <section class="hunting">
        <div class="container">
            <div class="hunting__body">
                <ul>
                    <li>
                        <i class="fal fa-door-open"></i>
                        <h3>De l'Offre d'Achat au Notaire, restez attentif &amp; réactif</h3>
                        <p>Vous êtes conquis par un bien et vous souhaitez faire une offre d'achat. Avant toute chose, il faut s'assurer que votre offre est en cohérence avec le Marché actuel. Lors de cette phase clé, nos chasseurs immobilier négocient en utilisant différents leviers tels que les éventuels coûts de travaux ou les frais liés à la mise aux normes du bien ou de la copropriété. </p>
                        <p>Il faut ensuite signer le compromis de vente qui vous engagera sur l'achat du bien incluant des conditions suspensives comme l'obtention du crédit. Veuillez noter que vous disposerez d'un délai de rétractation de 10 jours qui débute le lendemain de la remise par la poste du compromis de vente. </p>
                        <p>Place au financement, nous vous conseillons de comparer les différentes offres de prêt et de négocier au mieux le taux d'intérêt. Cette phase est cruciale car une négociation efficace vous permettra d'effectuer de belles économies à long terme. De plus, il sera intéressant en fonction de votre situation d'effectuer les démarches afin d'obtenir un prêt aidé. </p>
                        <p>Les relations humaines sont très importantes dans le domaine des financements, c'est pour cette raison que nos Experts Immo suivent de très près les offres de prêts immobilier accordées et , en collaboration avec nos partenaires de Courtage s'occupent de défendre les dossiers de nos clients et de négocier le meilleur taux. Nous vous conseillons donc de ne pas simplement envoyer vos dossiers complétés mais d'entretenir des relations humaines auprès des établissements de crédit et Courtiers. </p>
                        <p>Dernière étape de votre achat, la signature notaire concrétisera officiellement votre acquisition. Bien souvent, les acheteurs se font conseiller par le notaire du vendeur. Nous conseillons à tous nos clients d'avoir leurs propres notaires, afin de défendre leurs propres intérêts face au notaire du vendeur ! La bonne nouvelle étant que cela ne coûte pas plus cher car les notaires se partagent les honoraires. </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Parallax section #2 -->
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

    <!-- Cities Section -->
    @include('parts/cities')

    <!-- Blog Widget -->
    @include('parts/blog-widget')

</main>
@endsection