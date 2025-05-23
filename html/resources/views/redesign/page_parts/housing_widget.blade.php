<section class="housingWidget">
    <div class="container">
        <div class="housingWidget__inner">
            <h2 class="global__h2">Immobilier Neuf en Île de France</h2>
            <p class="global__description">Bienvenue dans le futur de l'immobilier en Île-de-France! Découvrez les nouveaux programmes immobiliers neufs offrant un cadre de vie moderne et confortable. Profitez d'espaces verts, d'infrastructures de qualité et d'un accès privilégié aux transports en commun. Investissez dans des projets innovants et prometteurs pour un avenir radieux!</p>
            <div class="housingWidget__items--wrapper">
                @foreach ($data['habitations'] as $habitation)
                    
                    <a  class="housingWidget__item"
                        title="{{ $habitation->h1_title }}"
                        href="{{ url('immobilier-neuf-ile-de-france/' .  $habitation->department->dpt_slug . '/programme-immobilier-appartement-neuf.php?programme=' . $habitation->slug . '&ville=' . $habitation->city ) }}">
                        <div class="housingWidget__item--top">
                            <img    src="{{ asset('uploads/images/habitations') . '/' . $habitation->images[0]->src }}" 
                                    alt="{{ $habitation->images[0]->alt }}" 
                                    title="{{ $habitation->images[0]->alt }}" 
                                    loading="lazy"
                                    width="520"
                                    height="400"
                                    class="housingWidget__item--img">
                            <div class="housingWidget__item--params">
                                <div class="housingWidget__item--param">{{ $habitation['type'] }}</div>
                                <div class="housingWidget__item--param">{{ $habitation['devices'] }}</div>
                                <div class="housingWidget__item--param">{{ $habitation['trimester'] }}</div>
                            </div>
                        </div>
                        <div class="housingWidget__item--bottom">
                            <div class="housingWidget__item--bottom__icon--holder">
                                <svg class="housingWidget__item--bottom__svg" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                                    <path d="M6.99865 7.82739C6.58945 7.82739 6.18944 7.70604 5.8492 7.4787C5.50896 7.25136 5.24377 6.92823 5.08718 6.55018C4.93058 6.17212 4.88961 5.75612 4.96944 5.35478C5.04927 4.95344 5.24632 4.58479 5.53567 4.29544C5.82502 4.00609 6.19368 3.80904 6.59502 3.72921C6.99636 3.64938 7.41236 3.69035 7.79041 3.84694C8.16847 4.00354 8.4916 4.26872 8.71894 4.60896C8.94628 4.9492 9.06762 5.34922 9.06762 5.75842C9.06696 6.30694 8.84877 6.83281 8.46091 7.22067C8.07304 7.60854 7.54718 7.82673 6.99865 7.82739ZM6.99865 4.51704C6.75313 4.51704 6.51312 4.58985 6.30898 4.72625C6.10484 4.86266 5.94573 5.05653 5.85177 5.28336C5.75781 5.5102 5.73323 5.7598 5.78113 6.0006C5.82903 6.24141 5.94726 6.4626 6.12087 6.63621C6.29448 6.80982 6.51567 6.92805 6.75647 6.97595C6.99728 7.02385 7.24688 6.99926 7.47371 6.9053C7.70054 6.81135 7.89442 6.65224 8.03082 6.44809C8.16723 6.24395 8.24003 6.00394 8.24003 5.75842C8.23971 5.42929 8.10881 5.11373 7.87608 4.88099C7.64335 4.64826 7.32779 4.51737 6.99865 4.51704Z" fill="#FAFAFA"/>
                                    <path d="M7.00095 12.7932L3.51019 8.67641C3.46168 8.61459 3.41368 8.55239 3.36619 8.48979C2.76991 7.70432 2.44778 6.74492 2.44922 5.75876C2.44922 4.55156 2.92878 3.39381 3.78239 2.5402C4.63601 1.68659 5.79376 1.20703 7.00095 1.20703C8.20814 1.20703 9.36589 1.68659 10.2195 2.5402C11.0731 3.39381 11.5527 4.55156 11.5527 5.75876C11.5541 6.74447 11.2321 7.70344 10.6361 8.48855L10.6357 8.48979C10.6357 8.48979 10.5116 8.65282 10.4929 8.67476L7.00095 12.7932ZM4.0266 7.99117C4.02743 7.99117 4.12343 8.11862 4.14536 8.14593L7.00095 11.5138L9.86026 8.14138C9.87846 8.11862 9.97529 7.99034 9.97571 7.98993C10.4628 7.34818 10.726 6.56442 10.7251 5.75876C10.7251 4.77105 10.3327 3.8238 9.63431 3.12539C8.9359 2.42698 7.98865 2.03462 7.00095 2.03462C6.01324 2.03462 5.066 2.42698 4.36758 3.12539C3.66917 3.8238 3.27681 4.77105 3.27681 5.75876C3.27594 6.56492 3.53906 7.34913 4.0266 7.99117Z" fill="#FAFAFA"/>
                                </svg>
                            </div>
                            <h3 class="housingWidget__item--h3">{{ $habitation['address'] }}</h3>
                            <p class="housingWidget__item--p">{{ strlen($habitation['description']) > 200 ? Str::substr($habitation['description'], 0, 200) . '...' : $habitation['description'] }}</p>
                            <div class="housingWidget__item--flats">
                                @foreach ($habitation->lots as $lot)
                                    <div class="housingWidget__item--flat">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect width="24" height="24" rx="4" fill="#DAB56B"/>
                                            <path d="M19.5636 18.9636H17.6727V6.01818C17.6727 5.74814 17.5655 5.48916 17.3745 5.29822C17.1836 5.10727 16.9246 5 16.6545 5H7.34545C7.07542 5 6.81644 5.10727 6.62549 5.29822C6.43455 5.48916 6.32727 5.74814 6.32727 6.01818V18.9636H4.43636C4.32063 18.9636 4.20964 19.0096 4.12781 19.0914C4.04597 19.1733 4 19.2843 4 19.4C4 19.5157 4.04597 19.6267 4.12781 19.7086C4.20964 19.7904 4.32063 19.8364 4.43636 19.8364H19.5636C19.6794 19.8364 19.7904 19.7904 19.8722 19.7086C19.954 19.6267 20 19.5157 20 19.4C20 19.2843 19.954 19.1733 19.8722 19.0914C19.7904 19.0096 19.6794 18.9636 19.5636 18.9636ZM16.8 6.01818V18.9636H15.3455V6.01818C15.3449 5.96949 15.341 5.92089 15.3338 5.87273H16.6545C16.6931 5.87273 16.7301 5.88805 16.7574 5.91533C16.7847 5.94261 16.8 5.9796 16.8 6.01818ZM7.2 6.01818C7.2 5.9796 7.21532 5.94261 7.2426 5.91533C7.26988 5.88805 7.30688 5.87273 7.34545 5.87273H14.3273C14.3658 5.87273 14.4028 5.88805 14.4301 5.91533C14.4574 5.94261 14.4727 5.9796 14.4727 6.01818V18.9636H7.2V6.01818ZM13.1636 12.7091C13.1636 12.8817 13.1125 13.0504 13.0166 13.194C12.9207 13.3375 12.7844 13.4493 12.6249 13.5154C12.4654 13.5814 12.2899 13.5987 12.1206 13.565C11.9514 13.5314 11.7959 13.4483 11.6738 13.3262C11.5517 13.2041 11.4686 13.0486 11.435 12.8794C11.4013 12.7101 11.4186 12.5346 11.4846 12.3751C11.5507 12.2156 11.6625 12.0793 11.806 11.9834C11.9496 11.8875 12.1183 11.8364 12.2909 11.8364C12.5224 11.8364 12.7444 11.9283 12.908 12.092C13.0717 12.2556 13.1636 12.4776 13.1636 12.7091Z" fill="white"/>
                                        </svg>
                                        <p class="housingWidget__item--flat__param">T{{ $lot['parts'] }}</p>
                                    </div>
                                @endforeach
                            </div>
                            <p class="housingWidget__item--price"><span>Prix</span>€{{ number_format($habitation->lots->min('price')) }}</p>
                        </div>
                    </a>

                @endforeach
            </div>
        </div>
    </div>
</section>