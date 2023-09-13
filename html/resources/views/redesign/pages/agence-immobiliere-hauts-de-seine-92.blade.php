@extends('layouts/app')

@section('content')
<main>
    <!-- Main Section -->
    @include('redesign/page_parts/main')

    <!-- Section Top 10 -->
    <section class="topten">
        <div class="container">
            <div class="topten__content">
                <h1 class="topten__h2">Top 10 des villes où investir dans les Hauts-de-Seine</h1>
                <p class="topten__p">Investisseur futé à la recherche de la prochaine pépite immobilière? Ne cherchez plus! La Fabrique à Toits est là pour réaliser vos rêves. 
                    Nous sommes passionnés par l'art de dénicher les meilleures opportunités d'investissement pour nos clients. 
                    Avec notre créativité, nos connaissances pointues et nos recherches approfondies, nous vous guiderons vers l'investissement immobilier parfait dans les Hauts-de-Seine!</p>
                <p class="topten__p">Envie de savoir où acheter dans le 92? À la recherche de la meilleure ville du 92 pour investir? Vous êtes au bon endroit! Nous vous dévoilons notre sélection des 10 villes incontournables où investir dans les Hauts-de-Seine. 
                    Préparez-vous à transformer vos rêves en réalité avec La Fabrique à Toits!</p>
            </div>
        </div>
    </section>

    <!-- Section Sarah -->
    <section class="sarah">
        <div class="container">
            <div class="sarah__inner">
                <div class="sarah__portrait">
                    <img    srcset="{{ asset('images/content/sarah.webp') }} 1920w,
                                    {{ asset('images/content/sarah_600.webp') }} 700w,
                                    {{ asset('images/content/sarah_400.webp') }} 500w"
                            src="{{ asset('images/content/sarah.webp') }}" 
                            width="655"
                            height="918"
                            alt=""
                            title="" 
                            class="sarah__img">
                </div>
                <div class="sarah__content">
                    <h2 class="sarah__h2">Investir dans les Hauts-de-Seine: les conseils de Sarah</h2>
                    <p class="sarah__p">«Vous l’aurez constaté, l’attractivité des Hauts-de-Seine est au beau fixe. 
                        Qualité de vie privilégiée, offre immobilière variée et projets d’expansion fructueux sont les sésames d’un projet familial pérenne (Meudon, Bois-Colombes, Courbevoie, Clamart et Rueil-Malmaison), mais aussi d’un investissement immobilier prospère (Gennevilliers, Colombes, Nanterre, Bagneux et Asnières). 
                        Avant toute démarche d’acquisition, rappelons qu’un bon achat obéit à trois règles d’or: définir son budget selon les conditions de prêt bancaire en vigueur, puis définir ses critères et, enfin, choisir des partenaires de confiance, de la recherche à la signature notaire.»</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Families -->
    <section class="families">
        <div class="container">
            <div class="families__inner">
                <div class="families__block">
                    <h2 class="families__h2">Asnières-sur-Seine: idéal pour les familles et investisseurs immobiliers<span class="families__span">1</span></h2>
                    <div class="families__wrapper">
                        <div class="families__item">
                            <p class="families__h4">Prix moyen:</p>
                            <p class="families__h3">7,250€</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Évolution:</p>
                            <p class="families__h3">+27,4% sur 5 ans</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Rendement moyen:</p>
                            <p class="families__h3">5.8%</p>
                        </div>
                    </div>
                    <p class="families__p">Prisée par de nombreuses familles parisiennes pour ses charmants quartiers du Bac, de la Mairie ou de Bécon, Asnières-sur-Seine se situe à seulement quelques minutes du 17e arrondissement de Paris et de la Gare Saint-Lazare.
                         Son réseau de transports en commun 🚇🚌 et ses promesses d'expansion en font un terrain d'investissement immobilier fertile. Animée et dotée de types d'habitations variés, de la mixité des Courtilles à l'écoquartier des Grésillons, 
                         les férus de bonnes affaires immobilières sauront y trouver des pépites.</p>
                </div>    
                <div class="families__block">
                    <h2 class="families__h2">Clamart: Du vert et de l'air aux portes de Paris<span class="families__span">2</span></h2>
                    <div class="families__wrapper">
                        <div class="families__item">
                            <p class="families__h4">Prix moyen:</p>
                            <p class="families__h3">6,653€</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Évolution:</p>
                            <p class="families__h3">+ 23,7% sur 5 ans</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Rendement moyen:</p>
                            <p class="families__h3">4.9%</p>
                        </div>
                    </div>
                    <p class="families__p">Les amoureux d'espaces verts seront conquis par cette ville paisible au sud-ouest de Paris. Le bois de Clamart, joliment célébré par Brassens 🎵, et le stade 
                        Hunebelle offrent aux promeneurs et sportifs une qualité de vie unique à seulement 10 minutes en train de la Gare Montparnasse. Exceptionnellement desservie par le Grand Paris, Clamart accueille des zones pavillonnaires aisées et des quartiers récemment urbanisés, tels que la Plaine. 
                        Attention aux conducteurs 🚗🚦 : la circulation y est forte et le stationnement disputé.</p>
                </div>
                <div class="families__block">
                    <h2 class="families__h2">Nanterre: prix au mètre carré raisonnable aux portes de La Défense<span class="families__span">3</span></h2>
                    <div class="families__wrapper">
                        <div class="families__item">
                            <p class="families__h4">Prix moyen:</p>
                            <p class="families__h3">5,897€</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Évolution:</p>
                            <p class="families__h3">+ 22% sur 5 ans</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Rendement moyen:</p>
                            <p class="families__h3">5.2%</p>
                        </div>
                    </div>
                    <p class="families__p">Le pouls de la ville de Nanterre est assurément des plus dynamiques. Transports à foison, université, campus de futurs bureaux et services ultramodernes et écologiques, 
                        le tout accolé à la première ville francilienne de l'emploi : La Défense. Bien que calme et vie locale n'en soient pas les maîtres-mots, les investisseurs 
                        immobiliers peuvent se réjouir de projets urbains compétitifs prêts à monter en flèche.</p>
                </div>
                <div class="families__block">
                    <h2 class="families__h2">Colombes : étoile montante des Hauts-de-Seine<span class="families__span">4</span></h2>
                    <div class="families__wrapper">
                        <div class="families__item">
                            <p class="families__h4">Prix moyen:</p>
                            <p class="families__h3">6,023€</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Évolution:</p>
                            <p class="families__h3">+ 26.4% sur 5 ans</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Rendement moyen:</p>
                            <p class="families__h3">6.1%</p>
                        </div>
                    </div>
                    <p class="families__p">Colombes brille par sa localisation et la vitalité de ses contrastes. Bien desservie, à proximité de La Défense et bordée par la Seine, 
                        elle se pare d’espaces verts, d’une vie culturelle animée et d’un réseau de services de santé performants. Des quartiers pavillonnaires de la Petite Garenne ou des Vallées, aux logements sociaux de Petits Colombes, 
                        une chose est certaine: ici se trouve une étoile montante.</p>
                </div>
                <div class="families__block">
                    <h2 class="families__h2">Bois-Colombes: ville au cœur du 92 où il fait bon vivre<span class="families__span">5</span></h2>
                    <div class="families__wrapper">
                        <div class="families__item">
                            <p class="families__h4">Prix moyen:</p>
                            <p class="families__h3">7,238€</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Évolution:</p>
                            <p class="families__h3">+ 27,7% sur 5 ans</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Rendement moyen:</p>
                            <p class="families__h3">5.9%</p>
                        </div>
                    </div>
                    <p class="families__p">Heureuses sont les familles sous les jolis toits de Bois-Colombes, qui profitent de ses centres de loisirs, ses établissements scolaires de qualité et ses 3 gares vers La Défense et Paris. 
                        Ville paisible par excellence, peu de restaurants et bars ont encore investi les lieux. Un nouvel écoquartier vient néanmoins y 
                        souffler un vent de fraîcheur, apportant une note d’espace vert et davantage de commerces.</p>
                </div>
                <div class="families__block">
                    <h2 class="families__h2">Rueil-Malmaison: alerte investissement immobilier, le réseau de transport de Rueil se développe (enfin...)<span class="families__span">6</span></h2>
                    <div class="families__wrapper">
                        <div class="families__item">
                            <p class="families__h4">Prix moyen:</p>
                            <p class="families__h3">6,454€</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Évolution:</p>
                            <p class="families__h3">+ 20,6% sur 5 ans</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Rendement moyen:</p>
                            <p class="families__h3">5.2%</p>
                        </div>
                    </div>
                    <p class="families__p">Ambiance village et familiale, Rueil-Malmaison est bordée par la Seine et la forêt domaniale de Saint Cucufa. Écoles, marché bio notoire, châteaux nationaux, histoire et nature s’y côtoient. 
                        L’immobilier homogène de résidences privées, pavillons et lotissements attire une population aisée. À ce jour très peu desservie (RER A), elle bénéficiera des futures lignes 15 et 18 et l’urbanisme se 
                        renouvellera avec l’écoquartier de l’Arsenal, sa gare et son complexe sportif.</p>
                </div>
                <div class="families__block">
                    <h2 class="families__h2">Courbevoie: prix au m2 parfois élevé et pourtant toujours aussi prisée par les familles et investisseurs locatifs<span class="families__span">7</span></h2>
                    <div class="families__wrapper">
                        <div class="families__item">
                            <p class="families__h4">Prix moyen:</p>
                            <p class="families__h3">7,565€</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Évolution:</p>
                            <p class="families__h3">+ 17.3 % sur 5 ans</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Rendement moyen:</p>
                            <p class="families__h3">4.8%</p>
                        </div>
                    </div>
                    <p class="families__p">À la carte: Courbevoie l’ancienne (Bécon-les-Bruyères), Courbevoie la titanesque (Charras) ou Courbevoie la futuriste (Faubourg de l’Arche). Riche de ses multiples facettes, 
                        sa densité n’en fait néanmoins pas le meilleur appel à la nature. Investisseurs, familles ou actifs y trouveront leur compte grâce à ses écoles de qualité, ses transports, sa proximité à La Défense et sa demande locative à la fois forte et stable. 
                        Bonus: la taxe foncière nettement inférieure à la moyenne!</p>
                </div>
                <div class="families__block">
                    <h2 class="families__h2">Bagneux: idéal pour investissement locatif, le Grand Paris y arrive à pas de géant!<span class="families__span">8</span></h2>
                    <div class="families__wrapper">
                        <div class="families__item">
                            <p class="families__h4">Prix moyen:</p>
                            <p class="families__h3">5,590€</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Évolution:</p>
                            <p class="families__h3">+ 25,7% sur 5 ans</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Rendement moyen:</p>
                            <p class="families__h3">5.3%</p>
                        </div>
                    </div>
                    <p class="families__p">Vivante et engagée, la ville de Bagneux est forte de sa mixité et bientôt 
                        desservie par les lignes de métro 14 et 15. Le convivial marché Léo Ferré, ses projets immobiliers d’économie solidaire et ses futurs écoquartiers incarnent ses valeurs. 
                        Certains commerces peuvent parfois y manquer, mais sa position stratégique au sud de Paris et alentour s’annonce déjà source de convoitise.</p>
                </div>
                <div class="families__block">
                    <h2 class="families__h2">Meudon: bénéficier d’une belle qualité de vie, tout en restant proche de Paris<span class="families__span">9</span></h2>
                    <div class="families__wrapper">
                        <div class="families__item">
                            <p class="families__h4">Prix moyen:</p>
                            <p class="families__h3">6,567€</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Évolution:</p>
                            <p class="families__h3">+ 21.8% sur 5 ans</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Rendement moyen:</p>
                            <p class="families__h3">4.9%</p>
                        </div>
                    </div>
                    <p class="families__p">Vivante et engagée, la ville de Bagneux est forte de sa mixité et bientôt desservie par les lignes de métro 14 et 15. Le convivial marché Léo Ferré, 
                        ses projets immobiliers d’économie solidaire et ses futurs écoquartiers incarnent ses valeurs. Certains commerces peuvent parfois y manquer, mais sa position stratégique au sud de Paris 
                        et alentour s’annonce déjà source de convoitise.</p>
                </div>
                <div class="families__block">
                    <h2 class="families__h2">Gennevilliers: terrain de jeu idéal pour investisseurs immobiliers avertis<span class="families__span">10</span></h2>
                    <div class="families__wrapper">
                        <div class="families__item">
                            <p class="families__h4">Prix moyen:</p>
                            <p class="families__h3">5,167€</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Évolution:</p>
                            <p class="families__h3">+ 34,1% sur 5 ans</p>
                        </div>
                        <div class="families__item">
                            <p class="families__h4">Rendement moyen:</p>
                            <p class="families__h3">6.8%</p>
                        </div>
                    </div>
                    <p class="families__p">Fourmillant d’opportunités, Gennevilliers est un hub de transports en commun, routier et maritime, hébergeant le plus grand port de la région. Établissements d’enseignement 
                        supérieur et bureaux, dont le futur bâtiment Jeuneville de Jean Nouvel, sont ainsi parfaitement desservis. Un potentiel qui contraste avec certains quartiers à éviter et un manque de commerces 🛒,
                         malgré une offre sportive exceptionnellement variée pour tous les âges.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Dreams -->
    <section class="dream">
        <img    srcset="{{ asset('images/content/marketing_block.webp')}}, 1920
                        {{ asset('images/content/marketing_block_600.webp')}}, 500"
                        src="{{ asset('images/content/marketing_block.webp')}}" 
                        alt="" 
                        width="1920"
                        height="700"
                        class="dream__img mobile">
        <div class="container">
            <div class="dream__content">
                <img    srcset="{{ asset('images/content/marketing_block.webp')}}, 1920
                        {{ asset('images/content/marketing_block_600.webp')}}, 500"
                        src="{{ asset('images/content/marketing_block.webp')}}" 
                        alt="" 
                        width="1920"
                        height="700"
                        class="dream__img">
                <h2 class="dream__h2">Trouvez Votre Maison de Rêve</h2>
                <p class="dream__p">Avec notre expertise en immobilier, nous vous aiderons à trouver la propriété parfaite.</p>
                <a href="" class="dream__button">Commencez Votre Recherche</a>
            </div>
        </div>
        </div>
    </section>

    <!-- Where to Invest Section -->
    <section class="whereToInvest">
        <div class="container">
            <div class="whereToInvest__inner">
                <h2 class="global__h2">Où souhaitez-vous acheter ou investir dans l'immobilier </h2>
                <p class="global__description">LFAT targets prime Paris locations, from the historic Le Marais to the prestigious 16th arrondissement. We also offer opportunities in developing areas, like the 13th arrondissement.</p>
                <div class="whereToInvest__items--wrapper">
                    <div class="whereToInvest__item">
                        <div class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_1.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Paris 75</h3>
                        </div>
                        <div class="whereToInvest__item--bottom whereToInvest__item--bottom__align--top">
                            <p class="whereToInvest__item--p">Notre équipe de chasseur immobilier Paris vous partage leur expertise sur le marché Parisien</p>
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
                        <div class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_2.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Hauts-de-Seine 92</h3>
                        </div>
                        <div class="whereToInvest__item--bottom whereToInvest__item--bottom__align--top">
                            <p class="whereToInvest__item--p">Notre équipe de chasseur d'appartement 92 vous partage leur expertise sur les Hauts-de-Seine</p>
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
                        <div class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_3.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Seine-Saint-Denis 93</h3>
                        </div>
                        <div class="whereToInvest__item--bottom whereToInvest__item--bottom__align--top">
                            <p class="whereToInvest__item--p">Notre équipe de chasseurs immobiliers 93 vous partage leur expertise sur le marché.</p>
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
                        <div class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_4.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Val de Marne 94</h3>
                        </div>
                        <div class="whereToInvest__item--bottom whereToInvest__item--bottom__align--top">
                            <p class="whereToInvest__item--p">Notre équipe de chasseurs immobiliers du Val de Marne vous partage leur expertise sur le marché.</p>
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
                        <div class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_5.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Seine et Marne 77</h3>
                        </div>
                        <div class="whereToInvest__item--bottom whereToInvest__item--bottom__align--top">
                            <p class="whereToInvest__item--p">Notre équipe de chasseur immobilier du 91 vous partage leur expertise sur le marché de l'Essonne</p>
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
                        <div class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_6.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Les Yvelines 78</h3>
                        </div>
                        <div class="whereToInvest__item--bottom whereToInvest__item--bottom__align--top">
                            <p class="whereToInvest__item--p">Notre équipe de chasseur immobilier Yvelines vous partage leur expertise sur le marché du 78</p>
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
                        <div class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_7.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Essonne 91</h3>
                        </div>
                        <div class="whereToInvest__item--bottom whereToInvest__item--bottom__align--top">
                            <p class="whereToInvest__item--p">Notre équipe de chasseur immobilier du 91 vous partage leur expertise sur le marché de l'Essonne</p>
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
                        <div class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_8.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Val D'Oise 95</h3>
                        </div>
                        <div class="whereToInvest__item--bottom whereToInvest__item--bottom__align--top">
                            <p class="whereToInvest__item--p">Notre équipe de chasseur immobilier du Val d'Oise vous partage leur expertise sur le marché</p>
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
                    <h3 class="homePageFAQ__h3 active">Où investir dans l'immobilier en région parisienne ?</h3>
                    <p class="homePageFAQ__p active">Investir dans l'immobilier en région parisienne est une décision pleine d'opportunités excitantes ! Les arrondissements centraux de Paris offrent un charme inégalé, tandis que les banlieues proches comme Neuilly-sur-Seine et Boulogne-Billancourt combinent proximité avec la capitale et qualité de vie. Si vous préférez un accès pratique aux transports en commun, jetez un coup d'œil à Issy-les-Moulineaux et Levallois-Perret. Ces endroits vibrants sont prêts à accueillir votre investissement immobilier !</p>
                </div>
                <div class="homePageFAQ__item">
                    <div class="homePageFAQ__item--icon__btn"></div>
                    <h3 class="homePageFAQ__h3">Où investir dans l'immobilier à moins de 1 h 30 de Paris ?</h3>
                    <p class="homePageFAQ__p">Vous voulez être à proximité de Paris sans sacrifier la tranquillité ? Explorez des villes comme Versailles, Saint-Germain-en-Laye, Rueil-Malmaison, Colombes et Antony, qui offrent une distance de trajet inférieure à 1 h 30 de la capitale. Ces lieux enchanteurs vous permettent de profiter d'un cadre de vie calme et résidentiel tout en restant connecté à l'énergie de Paris.</p>
                </div>
                <div class="homePageFAQ__item">
                    <div class="homePageFAQ__item--icon__btn"></div>
                    <h3 class="homePageFAQ__h3">Quelles sont les différentes villes du 92 ?</h3>
                    <p class="homePageFAQ__p">Le département des Hauts-de-Seine, également connu sous le numéro 92, regorge de villes attrayantes pour vos investissements immobiliers. Parmi elles, Nanterre, Boulogne-Billancourt, Colombes, Asnières-sur-Seine, Rueil-Malmaison et Courbevoie sont des incontournables. Chacune offre son propre charme, des commodités modernes, et constitue un choix judicieux pour un investissement immobilier prospère dans la région.</p>
                </div>
                <div class="homePageFAQ__item">
                    <div class="homePageFAQ__item--icon__btn"></div>
                    <h3 class="homePageFAQ__h3">Où vit-on le mieux dans les Hauts-de-Seine ?</h3>
                    <p class="homePageFAQ__p">Les Hauts-de-Seine sont une pépinière de lieux de vie agréables. Pour une qualité de vie supérieure, ne cherchez pas plus loin que Le Pin, Courbevoie, Boulogne-Billancourt, Levallois-Perret et Asnières-sur-Seine. Ces villes dynamiques équilibrent harmonieusement la proximité de Paris avec un environnement résidentiel plaisant. Préparez-vous à vivre une vie épanouissante dans ces destinations prisées des Hauts-de-Seine !</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Widget Section -->
    @include('redesign/page_parts/blog-widget')

</main>
@endsection