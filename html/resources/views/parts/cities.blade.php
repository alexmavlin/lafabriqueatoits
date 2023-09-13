<section class="cities">
    <h2 class="cities__h2 {{ !Route::is('home') ? 'cities__h2--no_decoration' : '' }}">Où souhaitez-vous acheter ou investir dans l'immobilier ?</h2>
    <h3 class="cities__h3">L'achat d'une maison ou d'un appartement est l'un des investissements les plus importants que vous ferez dans votre vie. Notre équipe de Chasseur Immobilier vous aide avec toute son expertise afin que votre achat soit simple, clair et sécurisé !</h3>
    <div class="container">
        <div class="cities__inner">

            <!-- #1 -->
            <div class="cities__item">
                <img    srcset="{{ asset('img/content/chasseur-immobilier-Paris-min.webp') }} 1920w,
                                {{ asset('img/content/chasseur-immobilier-Paris-min_430.webp') }} 1400w"
                        src="{{ asset('img/content/chasseur-immobilier-Paris-min.webp') }}" 
                        loading="lazy"
                        alt="Chasseur immobilier à Paris"
                        title="Chasseur immobilier à Paris">
                <a class="cities__item--link" href="{{ route('chasseur.show', 'paris')}}" title="chasseur appartement Paris">Paris 75</a>
                <p>Notre équipe de <a href="{{ route('chasseur.show', 'paris')}}" title="chasseur d'appartement Paris">chasseur immobilier Paris</a> vous partage leur expertise sur le marché Parisien</p>
                <a href="{{ route('chasseur.show', 'paris')}}" title="chasseur appartement Paris">EN SAVOIR +</a>
            </div>

            <!-- #2 -->
            <div class="cities__item">
                <img    srcset="{{ asset('img/content/chasseur-immobilier-92-Hauts-de-Seine-min.webp') }} 1920w,
                                {{ asset('img/content/chasseur-immobilier-92-Hauts-de-Seine-min_430.webp') }} 1400w"
                        src="{{ asset('img/content/chasseur-immobilier-92-Hauts-de-Seine-min.webp') }}" 
                        loading="lazy"
                        alt="Chasseur immobilier dans les Hauts-de-Seine"
                        title="Chasseur immobilier dans les Hauts-de-Seine">
                <a class="cities__item--link" href="{{ route('chasseur.show', '92-hauts-de-seine')}}" title="chasseur d'appartement hauts de seine">Hauts-de-Seine 92</a>                    
                <p>Notre équipe de <a href="{{ route('chasseur.show', '92-hauts-de-seine')}}" title="chasseur immobilier 92">chasseur d'appartement 92</a> vous partage leur expertise sur les Hauts-de-Seine</p>
                <a href="{{ route('chasseur.show', '92-hauts-de-seine')}}" title="chasseur d'appartement 92">EN SAVOIR +</a>
            </div>

            <!-- #3 -->
            <div class="cities__item">
                <img    srcset="{{ asset('img/content/chasseur-immobilier-93-Seine-Saint-Denis-min.webp') }} 1920w,
                                {{ asset('img/content/chasseur-immobilier-93-Seine-Saint-Denis-min_430.webp') }} 1400w"
                        src="{{ asset('img/content/chasseur-immobilier-93-Seine-Saint-Denis-min.webp') }}" 
                        loading="lazy"
                        alt="Chasseur immobilier en Seine-Saint-Denis"
                        title="Chasseur immobilier en Seine-Saint-Denis">
                <a class="cities__item--link" href="{{ route('chasseur.show', '93-seine-saint-denis')}}" title="chasseur d'appartement 93">Seine-Saint-Denis 93</a>
                <p>Notre équipe de <a href="{{ route('chasseur.show', '93-seine-saint-denis')}}" title="chasseur immobilier seine saint denis">chasseur immobilier 93</a> vous partage leur expertise sur le marché.</p>
                <a href="{{ route('chasseur.show', '93-seine-saint-denis')}}" title="chasseur immobilier 93">EN SAVOIR +</a>
            </div>

            <!-- #4 -->
            <div class="cities__item">
                <img    srcset="{{ asset('img/content/chasseur-immobilier-94-Val-de-Marne-min.webp') }} 1920w,
                                {{ asset('img/content/chasseur-immobilier-94-Val-de-Marne-min_430.webp') }} 1400w"
                        src="{{ asset('img/content/chasseur-immobilier-94-Val-de-Marne-min.webp') }}" 
                        loading="lazy"
                        alt="Chasseur immobilier dans le Val-de-Marne"
                        title="Chasseur immobilier dans le Val-de-Marne">
                <a class="cities__item--link" href="{{ route('chasseur.show', '94-val-de-marne')}}" title="chasseur immobilier 94">Val de Marne 94</a>
                <p>Notre équipe de chasseur immobilier du Val de Marne vous partage leur expertise sur le marché.</p>
                <a href="{{ route('chasseur.show', '94-val-de-marne')}}" title="chasseur immobilier val de marne">EN SAVOIR +</a>
            </div>

            <!-- #5 -->
            <div class="cities__item">
                <img    srcset="{{ asset('img/content/chasseur-immobilier-77-Seine-et-Marne-min.webp') }} 1920w,
                                {{ asset('img/content/chasseur-immobilier-77-Seine-et-Marne-min_430.webp') }} 1400w"
                        src="{{ asset('img/content/chasseur-immobilier-77-Seine-et-Marne-min.webp') }}" 
                        loading="lazy"
                        alt="Chasseur immobilier en Seine-et-Marne"
                        title="Chasseur immobilier en Seine-et-Marne">
                <a class="cities__item--link" href="{{ route('chasseur.show', '77-seine-et-marne')}}" title="chasseur d'appartement seine et marne">Seine et Marne 77</a>
                <p>Notre équipe de chasseur immobilier du 91 vous partage leur expertise sur le marché de l'Essonne</p>
                <a href="{{ route('chasseur.show', '77-seine-et-marne')}}" title="chasseur immobilier 77">EN SAVOIR +</a>
            </div>

            <!-- #6 -->
            <div class="cities__item">
                <img    srcset="{{ asset('img/content/chasseur-immobilier-78-Yvelines-min.webp') }} 1920w,
                                {{ asset('img/content/chasseur-immobilier-78-Yvelines-min_430.webp') }} 1400w"
                        src="{{ asset('img/content/chasseur-immobilier-78-Yvelines-min.webp') }}" 
                        loading="lazy"
                        alt="Chasseur immobilier dans les Yvelines"
                        title="Chasseur immobilier dans les Yvelines">
                <a class="cities__item--link" href="{{ route('chasseur.show', '78-yvelines')}}" title="chasseur d'appart yvelines">Les Yvelines 78</a>
                <p>Notre équipe de <a href="{{ route('chasseur.show', '78-yvelines')}}" title="chasseur immobilier 78">chasseur immobilier Yvelines</a> vous partage leur expertise sur le marché du 78</p>
                <a href="{{ route('chasseur.show', '78-yvelines')}}" title="chasseur immobilier yvelines">EN SAVOIR +</a>
            </div>

            <!-- #7 -->
            <div class="cities__item">
                <img    srcset="{{ asset('img/content/chasseur-immobilier-91-Essonne-min.webp') }} 1920w,
                                {{ asset('img/content/chasseur-immobilier-91-Essonne-min_430.webp') }} 1400w"
                        src="{{ asset('img/content/chasseur-immobilier-91-Essonne-min.webp') }}" 
                        loading="lazy"
                        alt="Chasseur immobilier dans l'Essonne"
                        title="Chasseur immobilier dans l'Essonne">
                <a class="cities__item--link" href="{{ route('chasseur.show', '91-essonne')}}" title="chasseur immobilier essonne">Essonne 91</a>
                <p>Notre équipe de chasseur immobilier du 91 vous partage leur expertise sur le marché de l'Essonne</p>
                <a href="{{ route('chasseur.show', '91-essonne')}}" title="chasseur immobilier essonne">EN SAVOIR +</a>
            </div>

            <!-- #8 -->
            <div class="cities__item">
                <img    srcset="{{ asset('img/content/chasseur-immobilier-95-Val-d-Oise-min.webp') }} 1920w,
                                {{ asset('img/content/chasseur-immobilier-95-Val-d-Oise-min_430.webp') }} 1400w"
                        src="{{ asset('img/content/chasseur-immobilier-95-Val-d-Oise-min.webp') }}" 
                        loading="lazy"
                        alt="Chasseur immobilier dans le Val-d'Oise"
                        title="Chasseur immobilier dans le Val-d'Oise">
                <a class="cities__item--link" href="{{ route('chasseur.show', '95-val-d-oise')}}" title="chasseur immobilier 95">Val D'Oise 95</a>
                <p>Notre équipe de chasseur immobilier du Val d'Oise vous partage leur expertise sur le marché</p>
                <a href="{{ route('chasseur.show', '95-val-d-oise')}}" title="chasseur immobilier val d'oise">EN SAVOIR +</a>
            </div>
        </div>
    </div>
</section>