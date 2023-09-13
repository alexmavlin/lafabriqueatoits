@if (count($data['habitations']))
<section class="housing__widget">
    <h2 class="section__h2--red">Immobilier Neuf en Ile de France</h2>
    <p class="section__description">DES PROGRAMMES NEUFS SÉLECTIONNÉS POUR VOUS !</p>
    <div class="container">
        <a href="{{ route('immobilierNeufIleDeFrance') }}" class="btn-primary housing__widget--link">Découvrir notre sélection de Programmes Neufs</a>
        <div class="housing__widget--inner">
            @foreach ($data['habitations'] as $habitation)
                <div class="filter__item">
                    <article>
                        <a  title="{{ $habitation->h1_title }}" 
                            href="{{ url('immobilier-neuf-ile-de-france/' .  $habitation->department->dpt_slug . '/programme-immobilier-appartement-neuf.php?programme=' . $habitation->slug . '&ville=' . $habitation->city ) }}">
                            <img    loading="lazy" 
                                    src="{{ $habitation->images()->where('is_first', 1)->first()->src }}"
                                    alt="{{ $habitation->images()->where('is_first', 1)->first()->alt }}">
                            <div class="filter__backdrop"></div>
                            <ul>
                                <li>{{ $habitation->type }}</li>
                                @if (isset($habitation->devices))
                                    <li>{{ $habitation->devices }}</li>
                                @endif
                                @if (isset($habitation->delivery_date))
                                    <li>{{ $habitation->trimester }} {{ $habitation->delivery_date }}</li>
                                @endif
                            </ul>
                        </a>

                        <div class="filter__item--content">
                            <a  title="{{ $habitation->h1_title }}"
                                href="{{ url('immobilier-neuf-ile-de-france/' .  $habitation->department->dpt_slug . '/programme-immobilier-appartement-neuf.php?programme=' . $habitation->slug . '&ville=' . $habitation->city ) }}">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3 class="title-sin_item">{{ $habitation->h1_title }}</h3>
                            </a>
                            <div class="filter__item--price">à partir de {{ $habitation->lots->first() ? number_format($habitation->lots->first()['price'], 2, ',', '.') : '' }} € TTC</div>
                            <p>{!! $habitation->mini_descreption !!}</p>
                            <ul class="filter__item--lots">
                                @foreach($habitation->lots as $lot)
                                    <li>
                                        <i class="fas fa-door-open"></i>
                                        <span>T{{$lot->parts}}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>   
@endif