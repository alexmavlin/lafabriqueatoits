@extends('layouts/app')

@section('content')

<main>
    <!-- Main Section -->
    @include('redesign/page_parts/main')

    <section class="investment">
        <img    srcset="images/content/investment.webp 1920w,
                        images/content/investment_600.webp 700w,
                        images/content/investment_400.webp 500w"
                src="images/content/investment.webp" 
                width="815"
                height="980"
                alt=""
                title="" 
                class="investment__img">

        <div class="investment__content">
            <h1 class="investment__h1">Investissement locatif en IDF et Paris: en route vers le succès immobilier!</h1>
            <p class="investment__p">Vous rêvez d'un investissement locatif à Paris ou en IDF? Découvrez les avantages de cette stratégieet laissez La Fabrique à Toits vous accompagner avec passion et énergie vers le succès de votre projet. 
                Explorez avec nous les possibilités de l'investissement locatif et ouvrez grand les portes d'un avenir immobilier prometteur!</p>
        </div>
    </section>

    <!-- Section investissementAdvantages -->
    <section class="investissementAdvantages">
        <div class="container">
            <div class="investissementAdvantages__header">
                <h2 class="investissementAdvantages__h2">Avantages de l'investissement locatif</h2>
                <p class="investissementAdvantages__p">Découvrez les avantages palpitants de l'investissement locatif! 
                    Investir dans l'immobilier locatif présente de nombreux atouts qui vous permettent de prospérer financièrement et de bâtir votre avenir immobilier. Voici pourquoi:</p>
            </div>
            <div class="investissementAdvantages__content">
                <h3 class="investissementAdvantages__h3">Revenus supplémentaires réguliers:</h3>
                <p class="investissementAdvantages__p">vous ouvrez la porte à une source stable de revenus passifs, augmentant votre pouvoir financier.</p>
                <h3 class="investissementAdvantages__h3">Valorisation constante:</h3>
                <p class="investissementAdvantages__p">votre patrimoine immobilier bénéficie d'une croissance durable, vous offrant des opportunités de plus-value à long terme.</p>
                <h3 class="investissementAdvantages__h3">Avantages fiscaux:</h3>
                <p class="investissementAdvantages__p">profitez d'exonérations, de réductions d'impôts et d'autres avantages pour optimiser vos gains et votre rentabilité.</p>
                <h3 class="investissementAdvantages__h3">Effet de levier financier:</h3>
                <p class="investissementAdvantages__p">vous pouvez utiliser le financement et l'endettement pour acquérir des biens immobiliers et maximiser votre potentiel de rendement.</p>
            </div>
            <div class="investissementAdvantages__caption">
                <p class="investissementAdvantages__p">Laissez La Fabrique à Toits vous guider vers un investissement locatif lucratif et vous ouvrir les portes de l'indépendance financière!</p>
            </div>
        </div>
    </section>
    <!-- // Section investissementAdvantages -->

    <!-- Section Notre -->
    <section class="notre" style="margin-bottom: 40">
        <div class="notre__svg--wrapper"> 
            <svg class="notre__logo__img" xmlns="http://www.w3.org/2000/svg" width="1283" height="1283" viewBox="0 0 1283 1283" fill="none">
                <path d="M1283 641.532C1283 647.512 1282.94 653.429 1282.75 659.345C1278.61 812.03 1221.1 951.292 1128.22 1059.38C1010.58 1196.29 836.142 1283 641.468 1283C464.738 1283 304.638 1211.52 188.779 1095.93C187.437 1094.59 187.37 1092.44 188.618 1091.01L215.986 1059.7L274.12 993.041C275.524 991.431 278.009 991.386 279.487 992.929C281.662 995.2 283.878 997.452 286.157 999.642C289.131 1002.68 292.104 1005.53 295.136 1008.32C295.3 1008.47 295.446 1008.64 295.604 1008.8C295.751 1008.94 295.917 1009.08 296.082 1009.25C298.945 1011.98 301.808 1014.66 304.734 1017.2C307.406 1019.55 310.078 1021.91 312.814 1024.26C314.977 1026.17 317.203 1028.08 319.43 1029.86C321.657 1031.77 323.947 1033.61 326.237 1035.4C329.227 1037.88 332.281 1040.23 335.398 1042.65C338.388 1044.87 341.442 1047.17 344.496 1049.39C349.204 1052.83 354.039 1056.2 358.874 1059.51C439.479 1114.16 536.752 1146.03 641.468 1146.03C746.185 1146.03 843.394 1114.16 923.999 1059.57C924.309 1059.39 924.558 1059.2 924.864 1058.9C924.881 1058.88 924.903 1058.87 924.926 1058.87C924.944 1058.87 924.961 1058.87 924.976 1058.86C952.578 1040.16 978.209 1018.72 1001.42 994.934C1090.87 904.023 1146.03 779.203 1146.03 641.532C1146.03 614.367 1143.87 587.647 1139.73 561.627C1101.43 320.957 892.953 136.971 641.468 136.971C362.818 136.971 136.908 362.882 136.908 641.532C136.908 673.617 139.893 705.039 145.607 735.437C146.139 738.271 149.621 739.324 151.66 737.286L542.912 346.033C544.323 344.622 546.612 344.622 548.023 346.034L949.118 747.192C950.529 748.603 950.529 750.891 949.118 752.302L856.51 844.911C855.099 846.322 852.811 846.322 851.4 844.911L548.023 541.534C546.612 540.122 544.323 540.122 542.912 541.534L221.307 863.139C220.629 863.817 219.71 864.198 218.751 864.198H188.63L42.3231 864.385C40.82 864.387 39.4708 863.459 38.9439 862.051C37.8454 859.117 36.7719 856.142 35.8174 853.128C12.5965 786.901 0 715.711 0 641.532C0 287.239 287.175 0 641.468 0C995.761 0 1283 287.239 1283 641.532Z" fill="url(#paint0_linear_494_19338)"/>
                <path d="M613.794 831.74C613.794 829.744 612.176 828.126 610.18 828.126H478.592C476.596 828.126 474.978 829.744 474.978 831.74V985.849C474.978 987.845 476.596 989.463 478.592 989.463H610.18C612.176 989.463 613.794 987.845 613.794 985.849V831.74Z" fill="url(#paint1_linear_494_19338)"/>
                <defs>
                  <linearGradient id="paint0_linear_494_19338" x1="-305.57" y1="-332.013" x2="1560.17" y2="1688.47" gradientUnits="userSpaceOnUse">
                    <stop offset="0.198761" stop-color="#DAB56B" stop-opacity="0"/>
                    <stop offset="0.492939" stop-color="#DAB56B"/>
                    <stop offset="0.803512" stop-color="#DAB56B" stop-opacity="0"/>
                  </linearGradient>
                  <linearGradient id="paint1_linear_494_19338" x1="-305.57" y1="-332.013" x2="1560.17" y2="1688.47" gradientUnits="userSpaceOnUse">
                    <stop offset="0.198761" stop-color="#DAB56B" stop-opacity="0"/>
                    <stop offset="0.492939" stop-color="#DAB56B"/>
                    <stop offset="0.803512" stop-color="#DAB56B" stop-opacity="0"/>
                  </linearGradient>
                </defs>
            </svg>
        </div>

        <div class="container">
            <div class="notre__inner">

                <div class="notre__header">
                    <h2 class="notre__h2">Notre service d'investissement</h2>
                    <p class="notre__p top">Chez La Fabrique à Toits, nous ne faisons pas les choses à moitié ! Nous comprenons l'importance de définir une stratégie d'investissement adaptée à vos ambitions. Notre équipe d'experts passionnés vous guide dans le choix des biens immobiliers les plus prometteurs et des quartiers en plein essor.</p>
                    <p class="notre__p top">Nous vous offrons un suivi complet de votre projet d'investissement locatif, de la recherche du bien jusqu'à sa gestion locative, en mettant à profit notre solide expérience et notre savoir-faire pointu.</p>
                </div>
                <img    srcset="images/content/notre_first.webp 1920w,
                                images/content/notre_first_600.webp 700w,
                                images/content/notre_first_400.webp 500w"
                        src="images/content/notre_first.webp" 
                        width="655"
                        height="820"
                        alt=""
                        title="" 
                        class="notre__tailor__img">

                
                <div class="notre__define">

                    <h3 class="notre__h3">Définir une stratégie d'investissement qui colle à vos objectifs</h3>
                    <p class="notre__p">Un investissement immobilier, c'est un véritable défi, mais ne vous inquiétez pas, nous sommes là pour vous guider!</p>
                    <p class="notre__p">Lors de notre premier rendez-vous, nous voulons tout savoir sur vous et vos aspirations! Nous voulons connaître vos motivations et vos projets à long terme. C'est le moment idéal pour nous raconter votre histoire et pour que nous devenions votre équipe de confiance.</p>
                    <p class="notre__p">Une fois que nous avons cerné vos objectifs, c'est parti pour trouver le bien qui fera vibrer votre cœur! Nous allons passer en revue tous les détails: quartier, superficie, rénovations possibles, ancien ou neuf, appartement ou maison? Nous voulons que tout soit parfait pour vous!</p>
                    <p class="notre__p notre__define--bottom">Après notre discussion, vous recevrez par e-mail votre Carnet De Bord personnalisé. C'est votre plan d'action, contenant votre objectif, vos critères, notre stratégie sur mesure et un itinéraire détaillé pour concrétiser l'achat de votre futur bien. Vous êtes prêt à embarquer avec nous vers la réussite immobilière!</p>
                    
                </div> 
                <div class="notre__tailor">
                    <div class="notre__tailor--content">
                        <h3 class="notre__h3">Un accompagnement sur mesure à chaque instant</h3>
                        <p class="notre__p">Nous sommes là à chaque instant, du début à la fin de votre projet immobilier !</p>
                        <p class="notre__p">Vous pouvez compter sur notre expertise et notre réseau pour booster vos démarches administratives et vérifier les devis de rénovation. Et devinez quoi? On vous accompagne même pour la mise en location de votre bien !</p>
                        <p class="notre__p">Notre agence partenaire, spécialisée en investissement locatif, s'occupe de tout: trouver les locataires parfaits et assurer votre tranquillité en cas de pépins. Votre projet immobilier, c'est aussi le nôtre. On met tout en œuvre pour qu'il soit couronné de succès et qu'on puisse célébrer ensemble !</p>
                    </div>
                    <img    srcset="images/content/notre_second.webp 1920w,
                                    images/content/notre_second_600.webp 700w,
                                    images/content/notre_second_400.webp 500w"
                            src="images/content/notre_second.webp" 
                            width="790"
                            height="820"
                            alt=""
                            title="" 
                            class="notre__define__img">
                </div>
                <div class="notre__bottom">
                    <img    srcset="images/content/notre_third.webp 1920w,
                                    images/content/notre_third_600.webp 700w,
                                    images/content/notre_third_400.webp 500w"
                            src="images/content/notre_third.webp" 
                            width="744"
                            height="820"
                            alt=""
                            title="" 
                            class="notre__complete__img">
                    <h3 class="notre__h3">Un suivi complet de votre projet d'investissement locatif</h3>
                    
                    <div class="notre__bottom--content">
                        
                        <p class="notre__p">Nous sommes vos partenaires dévoués à chaque étape de votre projet d'investissement immobilier:</p>
                        <ul class="notre__ul">
                            <li>Recherche de biens immobiliers correspondant à votre capacité d'emprunt et optimisation de votre situation financière.</li>
                            <li>Organisation des visites et possibilité de visites virtuelles pour ne manquer aucune opportunité, même si vous êtes occupé ou loin.</li>
                            <li>Négociation du meilleur prix en votre nom pour votre coup de cœur et accompagnement pour l'acceptation de votre offre d'achat.</li>
                            <li>Inspection technique minutieuse et diagnostics obligatoires pour assurer votre sécurité, avec une clause de protection en cas de problèmes cachés.</li>
                            <li>Collaboration avec votre propre notaire ou l'un de nos partenaires dédiés pour renforcer votre défense, nous sommes à vos côtés à chaque étape.</li>
                        </ul>
                        <p class="notre__p">Nous vous offrons un suivi complet et un soutien sans faille pour faire de votre projet d'investissement locatif une réussite.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Section Notre -->

    <!-- Where to Invest Section -->
    <section class="whereToInvest">
        <div class="container">
            <div class="whereToInvest__inner">
                <h2 class="global__h2">Où investir? </h2>
                <p class="global__description">Découvrez les pépites immobilières que La Fabrique à Toits vous dévoile dans la région magique d'Île-de-France! Nous visons des emplacements stratégiques tels que Paris (75), Hauts-de-Seine (92), Seine-Saint-Denis (93), Val de Marne (94), Seine et Marne (77), Les Yvelines (78), Essonne (91) et Val-d'Oise (95). Ces coins fantastiques vous promettent des investissements fructueux et pleins de surprises!</p>
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
                        <div class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_2.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Hauts-de-Seine 92</h3>
                        </div>
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
                        <div class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_3.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Seine-Saint-Denis 93</h3>
                        </div>
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
                        <div class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_4.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Val de Marne 94</h3>
                        </div>
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
                        <div class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_5.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Seine et Marne 77</h3>
                        </div>
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
                        <div class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_6.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Les Yvelines 78</h3>
                        </div>
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
                        <div class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_7.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Essonne 91</h3>
                        </div>
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
                        <div class="whereToInvest__item--top">
                            <img    src="{{ asset('images/content/where_to_invest_8.webp') }}" 
                                    alt="" 
                                    width="370"
                                    height="560"
                                    class="whereToInvest__img">
                            <h3 class="whereToInvest__h3">Val D'Oise 95</h3>
                        </div>
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

    <!-- Section About Invest -->
    <section class="aboutInvest">
        <div class="container">
            <div class="aboutInvest__row">
                <img    srcset="images/content/aboutInvest_01.webp 1920w,
                                images/content/aboutInvest_01_600.webp 500w"
                        src="images/content/aboutInvest_01.webp" 
                        width="1330"
                        height="420"
                        alt=""
                        title="" 
                        class="aboutInvest__img">
                <div class="aboutInvest__content">
                    <h2 class="aboutInvest__h2">En quoi consiste l'investissement locatif?</h2>
                    <p class="aboutInvest__p">L'investissement locatif est un véritable feu d'artifice pour vos revenus. Vous élargissez votre portefeuille financier, vous construisez votre patrimoine et vous profitez d'une valeur en constante ascension. Avec La Fabrique à Toits, on met à votre disposition notre expertise pour réaliser un investissement locatif clé en main et ultra-rentable. On vous garantit le show!</p>
                </div>
            </div>
            <div class="aboutInvest__row reverse">
                <img    srcset="images/content/aboutInvest_02.webp 1920w,
                                images/content/aboutInvest_02_600.webp 500w"
                        src="images/content/aboutInvest_02.webp" 
                        width="1330"
                        height="420"
                        alt=""
                        title="" 
                        class="aboutInvest__img">
                <div class="aboutInvest__content">
                    <h2 class="aboutInvest__h2">Dispositif Pinel et Super Pinel: boostez votre investissement!</h2>
                    <p class="aboutInvest__p">Vous voulez réduire vos impôts tout en investissant dans l'immobilier? Ne cherchez plus, le dispositif Pinel et le dispositif Super Pinel sont là pour vous aider! Voici comment en profiter:</p>
                    <ul class="aboutInvest__ul">
                        <li><b>Réductions d'impôts attrayantes:</b> avec le dispositif Pinel, vous pouvez bénéficier de réductions d'impôts jusqu'à 10, 15 ou même 17,5% selon la durée de location (6, 9 ou 12 ans). Mais ce n'est pas tout! Avec le dispositif Pinel +, vous pouvez obtenir une réduction d'impôts encore plus avantageuse, pouvant atteindre jusqu'à 21% sur 12 ans. C'est une belle opportunité pour booster votre épargne!</li>
                        <li><b>Investissement dans l'immobilier neuf:</b> ces dispositifs s'appliquent aux investissements dans l'immobilier neuf ou en état futur d'achèvement (VEFA). Cela signifie que vous pouvez choisir parmi une large gamme de projets immobiliers récents et profiter des avantages fiscaux offerts.</li>
                        <li><b>Engagez-vous dans la location:</b> pour bénéficier des réductions d'impôts, vous devrez mettre votre bien en location pour une durée déterminée. Cela vous permet non seulement de profiter des avantages fiscaux, mais également de générer des revenus supplémentaires grâce aux loyers.</li>
                    </ul>
                    <p class="aboutInvest__p">Avec ces dispositifs, vous pouvez faire d'une pierre deux coups: investir dans l'immobilier tout en bénéficiant de réductions d'impôts attractives. C'est le moment idéal pour faire fructifier votre patrimoine tout en optimisant votre fiscalité!</p>
                </div>
            </div>
            <div class="aboutInvest__row">
                <img    srcset="images/content/aboutInvest_03.webp 1920w,
                                images/content/aboutInvest_03_600.webp 500w"
                        src="images/content/aboutInvest_03.webp" 
                        width="1330"
                        height="420"
                        alt=""
                        title="" 
                        class="aboutInvest__img">
                <div class="aboutInvest__content">
                    <h2 class="aboutInvest__h2">Dispositif LMNP: maximisez votre investissement immobilier!</h2>
                    <p class="aboutInvest__p">Le dispositif LMNP (Loueur en Meublé Non Professionnel) offre des avantages stratégiques pour optimiser la rentabilité de votre investissement immobilier:</p>
                    <ul class="aboutInvest__ul">
                        <li>Avantages fiscaux: amortissez le coût de votre bien meublé pour réduire votre base d'imposition et récupérez la TVA sur son achat, générant ainsi des économies significatives. Ces avantages fiscaux optimisent votre rentabilité et augmentent vos revenus nets.</li>
                        <li>Gestion simplifiée: confiez la gestion de votre bien à un professionnel et libérez-vous des contraintes administratives. La location meublée offre une flexibilité qui vous permet d'optimiser le taux d'occupation et d'augmenter vos revenus locatifs, en adaptant la durée de location selon vos préférences et les besoins du marché.</li>
                    </ul>
                    <p class="aboutInvest__p">Le dispositif LMNP vous permet d'optimiser fiscalement votre investissement immobilier tout en simplifiant sa gestion. Renseignez-vous davantage et consultez des professionnels pour profiter pleinement de tous les avantages offerts par le LMNP.</p>
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
                    <h3 class="homePageFAQ__h3 active">Quel niveau de revenu pour investir dans l’immobilier locatif ?</h3>
                    <p class="homePageFAQ__p active">Pas besoin d'être un millionnaire pour se lancer dans l'investissement locatif ! Il n'y a pas de niveau de revenu fixe requis, mais il est important d'évaluer votre situation financière. Pensez à vos revenus actuels, à vos dépenses mensuelles, et assurez-vous d'avoir une stabilité financière. Si besoin, vous pouvez également envisager des options de financement pour faciliter votre investissement. N'hésitez pas à consulter un conseiller financier pour avoir une vision claire de votre situation et trouver la meilleure façon de vous lancer dans l'immobilier locatif.</p>
                </div>
                <div class="homePageFAQ__item">
                    <div class="homePageFAQ__item--icon__btn"></div>
                    <h3 class="homePageFAQ__h3">Comment calculer son rendement locatif ?</h3>
                    <p class="homePageFAQ__p">Pas besoin d'être un génie des maths pour ça ! Le calcul du rendement locatif, c'est simple comme bonjour. Divisez vos revenus locatifs annuels (loyers perçus) par le coût total de votre investissement (prix d'achat, frais divers), puis multipliez par 100 pour obtenir un pourcentage. Voilà, vous avez votre rendement locatif brut ! Mais n'oubliez pas de prendre en compte les charges et les impôts pour obtenir un rendement net. Si vous avez besoin d'aide, utilisez des outils en ligne ou demandez à un expert immobilier de vous guider.</p>
                </div>
                <div class="homePageFAQ__item">
                    <div class="homePageFAQ__item--icon__btn"></div>
                    <h3 class="homePageFAQ__h3">Quelles villes vont prendre de la valeur ?</h3>
                    <p class="homePageFAQ__p">Aucune boule de cristal ne peut le prédire avec certitude, mais certaines villes montrent des signes de potentiel ! Cherchez les villes en plein essor économique, avec de nouveaux projets qui fleurissent, des industries en plein boom , et un marché de l'emploi qui brille. Les zones étudiantes et les destinations touristiques peuvent aussi être de bonnes options. Faites vos recherches, consultez les études de marché, et demandez conseil à des experts locaux pour avoir une vision éclairée.</p>
                </div>
                <div class="homePageFAQ__item">
                    <div class="homePageFAQ__item--icon__btn"></div>
                    <h3 class="homePageFAQ__h3">Où investir dans l'immobilier en région parisienne ?</h3>
                    <p class="homePageFAQ__p">Ah, la magnifique région parisienne ! Mais où investir pour maximiser vos chances de succès ? Voici quelques pistes à explorer :</p>
                    <ul class="homePageFAQ__p">
                        <li><b>Paris intra-muros :</b> le cœur de la capitale reste un choix sûr et attractif. Les quartiers prisés comme le Marais, Saint-Germain-des-Prés ou le Canal Saint-Martin offrent de belles opportunités.</li>
                        <li><b>Les banlieues dynamiques :</b> des villes comme Boulogne-Billancourt, Neuilly-sur-Seine, Issy-les-Moulineaux ou Levallois-Perret sont prisées pour leur proximité avec Paris et leur développement économique.</li>
                        <li><b>Les zones en rénovation :</b> des quartiers en plein essor comme Pantin, Montreuil ou Saint-Ouen offrent un fort potentiel de valorisation grâce à des projets de réaménagement urbain.</li>
                        <li><b>Les pôles universitaires :</b> les villes étudiantes, telles que Cachan, Nanterre ou Saint-Denis, peuvent être intéressantes pour investir dans des logements étudiants.</li>
                    </ul>
                    <p class="homePageFAQ__p">N'hésitez pas à nous contacter pour obtenir des conseils sur mesure. Vous êtes notre priorité absolue !</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Widget Section -->
    @include('redesign/page_parts/blog-widget')

</main>
@endsection