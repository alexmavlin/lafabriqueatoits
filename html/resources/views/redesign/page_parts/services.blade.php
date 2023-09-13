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
                    <p>Confiez-nous la recherche de votre futur chez-vous grâce à notre équipe de chasseurs immobiliers dédiée. Trouver votre havre de paix n'a jamais été aussi facile!</p>
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
                    <p>Faites fructifier votre argent en toute tranquillité en optant pour l'immobilier locatif avec nos conseils avisés. Profitez d'un placement sûr et rentable!</p>
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
                    <p>Découvrez les programmes immobiliers neufs les plus attractifs et laissez-nous vous guider vers un avenir radieux dans un logement flambant neuf!</p>
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
                    <p>Vous rêvez d'une résidence principale tout en investissant dans l'immobilier? Notre équipe de chasseurs immobiliers se charge de tout pour concrétiser vos projets simultanément!</p>
                    <a href="{{ route('vendreAcheterBienImmobilierParisIleDeFrance') }}" title="Programme immobilier Neuf Ile de France">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</section>