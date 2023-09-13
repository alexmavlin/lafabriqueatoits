<section class="main" data-scrollax-parent="true">
    <div    class="main__parallax-window"
            data-scrollax="properties: { translateY: '30%' }"
            style="background-image:url('{{ asset('img/content/bg/' . $data['main_img']) }}')">
    </div>
<div class="backdrop__filter--darken"></div>
<h1 class="main__heading {{ !Route::is('home') ? 'jost_font' : '' }}">{{ $data['main_heading']}}</h2>
<div class="container">
    <div class="main__inner">
        <form action="{{ route('main.mail.send') }}" class="main__form" method="POST">
            @csrf
            <div class="main__form--row">
                <input  name="project" 
                        placeholder="Quel est votre projet immobilier ?" 
                        type="text" 
                        aria-label="Quel est votre projet immobilier ?"
                        required 
                        value="">
                <input  name="budget" 
                        placeholder="Votre Budget" 
                        type="text" 
                        aria-label="Votre Budget"
                        required 
                        value="">
                <input  name="sector" 
                        placeholder="Le secteur" 
                        type="text" 
                        aria-label="Le secteur"
                        required 
                        value="">
            </div>
            <div class="main__form--row">
                <input  name="name" 
                        placeholder="Votre Nom et Prénom" 
                        type="text" 
                        aria-label="Votre Nom et Prénom"
                        required 
                        value="">
                <input  name="phone" 
                        placeholder="Téléphone" 
                        type="text" 
                        aria-label="Téléphone"
                        required 
                        value="">
                <input  name="email" 
                        placeholder="Courriel" 
                        type="text" 
                        aria-label="Courriel"
                        required 
                        value="">
                <button type="submit" 
                        class="main__form--btn"
                        aria-label="Envoyer">
                        Envoyer
                </button>
            </div>
        </form>
        @if (isset($data['investir']) && $data['investir'])
            <div class="main__investir">
                    <p>Où investir en Ile de France ?</p>
                    <a href="{{ route('chasseur.show', 'paris-IDF') }}" title="Chasseur immobilier en Ile de France">{{ Route::is('agenceImmobiliereDautsDeSeine92') ? 'On vous partage notre analyse ici !' : 'En Savoir +'}}</a>
            </div>
        @endif
        @if (isset($data['acceder']) && $data['acceder'])
            <div class="main__acceder">
                    <p>Accéder à tous nos programmes sélectionnés</p>
                    <a href="{{ route('immobilierNeufIleDeFrance') }}" title="Immobilier neuf en Ile de France">Immobilier Neuf en Ile de France</a>
            </div>
        @endif
    </div>
</div>
</section>