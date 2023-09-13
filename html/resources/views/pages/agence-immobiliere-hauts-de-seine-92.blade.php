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
                    <img    srcset="{{ asset('images/bg/chasseur-appartement-92.webp') }} 800w,
                                    {{ asset('images/bg/chasseur-appartement-92_430.webp') }} 430w"
                            src="{{ asset('images/bg/chasseur-appartement-92.webp') }}" 
                            loading="lazy"
                            alt="TOP 10 immobilier 92"
                            title="TOP 10 immobilier 92"
                            class="hunting__header--img">
                    <div class="hunting__header--content">
                        <h1 class="section__h2--chasseur" style="color: #e3546d;font-size: 26px;font-weight: 500;font-family: Playfair Display,Times New Roman,serif;margin-bottom: 15px;max-width: 597px;width: 100%;">TOP 10 des villes où il fait bon vivre et investir dans le 92</h1>
                        <p>Le département des Hauts-de-Seine (92), au nord-ouest de Paris, est un écrin de perles rares pour qui sait les dénicher. Sarah Godard, fondatrice de La Fabrique à Toits, native du 92 et experte immobilier confirmée depuis +15 ans, connaît ces lieux de vie sur le bout des doigts. Grâce à notre palmarès immobilier des villes des Hauts-de-Seine, ce département de choix n’aura bientôt plus de secret pour vous aussi !</p>
                    </div>
                </div>
            </div>
            <div class="hunting__body noIconHunting">
                <ul>
                    <li>
                        <i class="fal fa-chess"></i>
                        <h3 style="text-transform: uppercase;font-size:16px;font-weight:600;color:#6498c4;">#1 ASNIÈRES-SUR-SEINE : Idéal pour les familles et investisseurs immobiliers</h3>
                        <ul style="margin-top: 15px;">
                            <li>Prix moyen : 6 780 €</li>
                            <li>Evolution : + 9% sur 1 an</li>
                            <li>Rendement moyen : 5,2 %</li>
                        </ul>
                        <p style="margin-top: 15px;">Prisée par de nombreuses <strong>familles parisiennes</strong> pour ses charmants quartiers du Bac, de la Mairie ou de Bécon, Asnières se situe à seulement <strong>quelques minutes du 17ème arrondissement de Paris</strong> et de la <strong>Gare Saint-Lazare</strong>. Son réseau de transports en commun et ses promesses d’expansion en font un terrain <strong>d’investissement immobilier</strong> fertile. Animée et dotée de types d’habitations variés, de la mixité des Courtilles à l’écoquartier des Grésillons, les férus de <strong>bonnes affaires immobilières</strong> sauront y trouver des pépites.</p>
                    </li>
                    <li>
                        <i class="fal fa-door-open"></i>
                        <h3 style="margin-top: 30px;font-size:16px;font-weight:600;color:#6498c4;">#2 CLAMART : du vert et de l’air aux portes de Paris </h3>
                        <ul style="margin-top: 15px;">
                            <li>Prix moyen : 5 710 € </li>
                            <li>Evolution : + 8% sur 1 an </li>
                            <li>Rendement moyen : 4,6 % </li>
                        </ul>
                        <p style="margin-top: 15px;">Les <strong>amoureux d’espaces verts</strong> seront conquis par cette ville paisible au <strong>sud-ouest de Paris</strong>. Le bois de <strong>Clamart</strong>, joliment célébré par Brassens, et le stade Hunebelle offrent aux promeneurs et sportifs une qualité de vie unique à 10 minutes en train de la Gare Montparnasse. Exceptionnellement <strong>desservie par le Grand Paris</strong>, Clamart accueille zones pavillonnaires aisées et quartiers récemment urbanisés, tels que la Plaine. Avis aux conducteurs : la circulation y est forte et le stationnement disputé.</p>
                    </li>
                    <li>
                        <i class="fal fa-user-friends"></i>
                        <h3 style="margin-top: 30px;font-size:16px;font-weight:600;color:#6498c4;">#3 NANTERRE : prix au mètre carré raisonnable aux portes de La Défense </h3>
                        <ul style="margin-top: 15px;">
                            <li>Prix moyen : 5 380 €&lt; </li>
                            <li>Evolution : + 6,3 % sur 1 an </li>
                            <li>Rendement moyen : 5,3 % </li>
                        </ul>
                        <p style="margin-top: 15px;">Le pouls de la ville de <strong>Nanterre</strong> est assurément des plus dynamiques. <strong>Transports à foison</strong>, université, campus de futurs bureaux et services ultra-modernes et écologiques, le tout accolé à la première ville francilienne de l’emploi : La Défense. Bien que calme et vie locale n’en soient pas les maîtres-mots, les <strong>investisseurs immobiliers</strong> peuvent se réjouir de <strong>projets urbains compétitifs</strong> prêts à monter en flèche. </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Parallax section #1 -->
    <section class="parallax" data-scrollax-parent="true">
        <div    class="parallax__parallax-window"
                data-scrollax="properties: { translateY: '30%' }"
                style="background-image:url('{{ asset('img/content/bg/chasseur-immobilier-92-bm-min.webp') }}')">
        </div>
        <div class="backdrop__filter--darken__parallax"></div>
        <h2 class="parallax__heading">Hauts-de-Seine : 1 bien vendu toutes les 19 minutes*</h2>
        <div class="container">
            <div class="parallax__inner">
                <p class="parallax__text">Ne passer à côté de votre coup de cœur, nos chasseurs immobiliers se dévouent pour concrétiser vos rêves !</p>
                <button  class="btn-primary contact_btn">
                    Contactez-Nous
                </button>
                <p class="parallax__ps">* Source : 27422 transactions enregistrée entre en 2019 selon Les Notaires du Grand Paris</p>
            </div>
        </div>
    </section>

    <!-- Section Hunting -->
    <section class="hunting">
        <div class="container">
            <div class="hunting__body noIconHunting">
                <ul>
                    <li>
                        <h3 style="margin-top: 30px;font-size:16px;font-weight:600;color:#6498c4;">#4 COLOMBES : étoile montante des Hauts-de-Seine </h3>
                        <ul style="margin-top: 15px;">
                            <li>Prix moyen : 4 970 € </li>
                            <li>Evolution : + 7,4 % sur 1 an </li>
                            <li>Rendement moyen : 5,9 % </li>
                        </ul>
                        <p style="margin-top: 15px;"><strong>Colombes</strong> brille par sa localisation et la vitalité de ses contrastes. Bien desservie, à <strong>proximité de La Défense et bordée par la Seine</strong>, elle se pare d’espaces verts, d’une vie culturelle animée et d’un réseau de services de santé performants. Des <strong>quartiers pavillonnaires</strong> de la Petite Garenne ou des Vallées, aux <strong>logements sociaux</strong> de Petits-Colombes, une chose est certaine : ici se trouve une étoile montante. </p>
                    </li>
                    <li>
                        <h3 style="margin-top: 30px;font-size:16px;font-weight:600;color:#6498c4;">#5 BOIS-COLOMBES : ville au cœur du 92 où il fait bon vivre </h3>
                        <ul style="margin-top: 15px;">
                            <li>Prix moyen : 6 440 € </li>
                            <li>Evolution : + 7,7 % sur 1 an </li>
                            <li>Rendement moyen : 5,5 % </li>
                        </ul>
                        <p style="margin-top: 15px;">Heureuses sont les familles sous les jolis toits de <strong>Bois-Colombes</strong>, qui profitent de ses centres de loisirs, ses établissements scolaires de qualité et ses <strong>3 gares</strong> vers <strong>La Défense</strong> et <strong>Paris</strong>. <strong>Ville paisible par excellence</strong>, peu de restaurants et bars ont encore investi les lieux. Un nouvel écoquartier vient néanmoins y souffler un vent de fraîcheur, apportant une note <strong>d’espace vert</strong> et <strong>davantage de commerces</strong>. </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Parallax section #2 -->
    <section class="parallax" data-scrollax-parent="true">
        <div    class="parallax__parallax-window"
                data-scrollax="properties: { translateY: '30%' }"
                style="background-image:url('{{ asset('img/content/bg/service-chasse-immobiliere-paris-ile-de-france-min.webp') }}')">
        </div>
        <div class="backdrop__filter--darken__parallax"></div>
        <h2 class="parallax__heading">Vous restez Zen : on s’occupe de tout !</h2>
        <div class="container">
            <div class="parallax__inner">
                <p class="parallax__text">Accélérer, sécuriser et assurer le succès de votre projet dans le plus grand des conforts</p>
                <button  class="btn-primary contact_btn">
                    Contactez-Nous
                </button>
            </div>
        </div>
    </section>

    <!-- Section Hunting -->
    <section class="hunting">
        <div class="container">
            <div class="hunting__body noIconHunting">
                <ul>
                    <li>
                        <h3 style="margin-top: 30px;font-size:16px;font-weight:600;color:#6498c4;">#6 RUEIL-MALMAISON : alerte investissement immobilier, le réseau de transport de Reuil se développe (enfin...) </h3>
                        <ul style="margin-top: 15px;">
                            <li>Prix moyen : 5 590 € </li>
                            <li>Evolution : + 8,2 % sur 1 an </li>
                            <li>Rendement moyen : 4,7 % </li>
                        </ul>
                        <p style="margin-top: 15px;">Ambiance village et <strong>familiale</strong>, <strong>Rueil-Malmaison</strong> est bordée par la Seine et la <strong>forêt domaniale</strong> de St Cucufa. Écoles, marché bio notoire, châteaux nationaux, histoire et nature s’y côtoient. L’<strong>immobilier homogène</strong> de résidences privées, <strong>pavillons</strong> et <strong>lotissements</strong> attire une population aisée. À ce jour <strong>très peu desservie</strong> (RER A), elle bénéficiera des <strong>futures lignes 15 et 18</strong> et l’urbanisme se renouvellera avec l’écoquartier de l’Arsenal, sa gare et son complexe sportif. </p>
                    </li>
                    <li>
                        <h3 style="margin-top: 30px;font-size:16px;font-weight:600;color:#6498c4;">#7 COURBEVOIE : prix au m2 parfois élevé et pourtant toujours aussi prisée par les familles et investisseurs locatifs </h3>
                        <ul style="margin-top: 15px;">
                            <li>Prix moyen : 7 180 € </li>
                            <li>Evolution : + 5,7 % sur 1 an </li>
                            <li>Rendement moyen : 5,1 % </li>
                        </ul>
                        <p style="margin-top: 15px;">À la carte : <strong>Courbevoie l’ancienne</strong> (Bécon-les-Bruyères), <strong>Courbevoie la titanesque</strong> (Charras) ou <strong>Courbevoie la futuriste</strong> (Faubourg de l’Arche). Riche de ses multiples facettes, sa densité n’en fait néanmoins pas le meilleur appel à la nature. <strong>Investisseurs</strong>, <strong>familles</strong> ou <strong>actifs</strong> y trouveront leur compte grâce à ses écoles de qualité, ses transports, sa <strong>proximité à La Défense</strong> et sa demande locative à la fois forte et stable. Bonus : la <strong>taxe foncière nettement inférieure à la moyenne</strong> ! </p>
                    </li>
                    <li>
                        <h3 style="margin-top: 30px;font-size:16px;font-weight:600;color:#6498c4;">#8 BAGNEUX : idéal pour investissement locatif, le Grand Paris y arrive à Grand pas ! </h3>
                        <ul style="margin-top: 15px;">
                            <li>Prix moyen : 4 820 € </li>
                            <li>Evolution : + 5,1 % sur 1 an </li>
                            <li>Rendement moyen : 5,6 % </li>
                        </ul>
                        <p style="margin-top: 15px;"><strong>Vivante et engagée</strong>, la ville de <strong>Bagneux</strong> est forte de sa mixité et bientôt desservie par les <strong>lignes de métro 14 et 15</strong>. Le convivial marché Léo Ferré, ses projets immobiliers d’économie solidaire et ses futurs écoquartiers incarnent ses valeurs. Certains commerces peuvent parfois y manquer, mais sa <strong>position stratégique au sud de Paris</strong> et alentours s’annonce déjà source de convoitise. </p>
                    </li>
                    <li>
                        <h3 style="margin-top: 30px;font-size:16px;font-weight:600;color:#6498c4;">#9 MEUDON : bénéficier d’une belle qualité de vie, tout en restant proche de Paris </h3>
                        <ul style="margin-top: 15px;">
                            <li>Prix moyen : 5 570 € </li>
                            <li>Evolution : + 5,8 % sur 1 an </li>
                            <li>Rendement moyen : 5,2 % </li>
                        </ul>
                        <p style="margin-top: 15px;"><strong>Campagne bien apprêtée</strong>, <strong>Meudon</strong> est riche de sa forêt et de ses quartiers où il fait bon vivre. On y trouve <strong>d’anciens immeubles en pierre meulière</strong>, d’autres plus modernes, des <strong>maisons et résidences élégantes</strong> (Bellevue) et, bientôt, des <strong>écoquartiers</strong>. Promenade, sport et université pour les nombreux étudiants en sont les principales activités. Vie culturelle et commerces seront surtout présents dans les alentours et à Paris, <strong>desservis localement par 3 gares</strong> (Transilien N, RER C, T2 et T6). </p>
                    </li>
                    <li>
                        <h3 style="margin-top: 30px;font-size:16px;font-weight:600;color:#6498c4;">#10 GENNEVILLIERS : terrain de jeu idéal pour investisseurs immobiliers avertis </h3>
                        <ul style="margin-top: 15px;">
                            <li>Prix moyen : 3 910 € </li>
                            <li>Evolution : - 1,3 % sur 1 an </li>
                            <li>Rendement moyen : 6,3 % </li>
                        </ul>
                        <p style="margin-top: 15px;">Fourmillant d’opportunités, <strong>Gennevilliers</strong> est un <strong>hub de transports en commun</strong>, <strong>routier et maritime</strong>, hébergeant le plus grand port de la région. Établissements d’enseignement supérieur et bureaux, dont le futur bâtiment Jeuneville de Jean Nouvel, sont ainsi <strong>parfaitement desservis</strong>. <strong>Un potentiel qui contraste avec certains quartiers</strong> à éviter et un manque de commerces, malgré une offre sportive exceptionnellement variée pour tous les âges. </p>
                    </li>
                    <li>
                        <h3 style="margin-top: 30px;font-size:16px;font-weight:600;color:#6498c4;">L'immobilier du 92, la vision de Sarah Godard </h3>
                        <p style="margin-top: 15px;">"Vous l’aurez constaté, l’attractivité des Hauts-de-Seine est au beau fixe. Qualité de vie privilégiée, offre immobilière variée et projets d’expansion fructueux sont les sésames d’un projet familial pérenne (Meudon, Bois-Colombes, Courbevoie, Clamart et Rueil-Malmaison), mais aussi d’un investissement immobilier prospère (Gennevilliers, Colombes, Nanterre, Bagneux et Asnières). Avant toute démarche d’acquisition, rappelons qu’un bon achat obéit à trois règles d’or : définir son budget selon les conditions de prêt bancaire en vigueur , puis définir ses critères et, enfin, choisir des partenaires de confiance, de la recherche à la signature notaire." </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Parallax section #3 -->
    <section class="parallax" data-scrollax-parent="true">
        <div    class="parallax__parallax-window"
                data-scrollax="properties: { translateY: '30%' }"
                style="background-image:url('{{ asset('img/content/bg/BM-reseau-chasseur-immobilier-min.webp') }}')">
        </div>
        <div class="backdrop__filter--darken__parallax"></div>
        <h2 class="parallax__heading">Notre Réseau au service de Votre Projet !</h2>
        <div class="container">
            <div class="parallax__inner">
                <p class="parallax__text">Agents locaux, Courtiers, Architectes, Entrepreneurs, Promoteurs, Notaires, Agences Locatives...<br> Nous saurons vous apporter les meilleures solutions à vos problématiques</p>
                <a  href="{{ route('equipeChasseurMaisonAppartementIleDeFrance') }}" 
                    class="btn-primary" 
                    title="notre réseau de chasseur immobilier">
                    Découvrez notre Réseau
                </a>
            </div>
        </div>
    </section>

    <!-- Cities Section -->
    @include('parts/cities')

    <!-- Blog Widget -->
    @include('parts/blog-widget')

</main>
@endsection