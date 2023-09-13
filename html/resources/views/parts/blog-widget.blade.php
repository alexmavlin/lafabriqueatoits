<section class="blog__widget">
    @if (!Route::is('home'))
        <h2 class="section__h2--red section__h2--chasseur">Toutes les actualités de nos chasseurs immobiliers</h2>
    @else
        <h2 class="section__h2--red">Toutes les actualités de nos chasseurs immobiliers</h2>
    @endif
    <p class="section__description">Focus sur l'immobilier Parisien et Francilien !</p>
    <div class="container">
        <div class="blog__widget--inner">
            @foreach($data['blogs'] as $blog)
                <div class="blog__widget--item">
                    <img    loading="lazy"    
                            src="{{ asset($blog->image) }}" 
                            alt="{{ $blog->alt }}" 
                            class="blog__widget--img">
                    <a  href="{{ url('actualites-agence-chasseur-appartement-paris-92-idf/' .  $blog->category()->get()[0]->slug_name . '/blog-single.html?blog=' . $blog->slug ) }}" 
                        class="blog__widget--heading"
                        title="{!! $blog->description_cards !!}">
                        {{ $blog->h2_title_cards}}
                    </a>
                    <p class="blog__widget--description">{!! $blog->description_cards !!}</p>
                    <a  href="{{ url('actualites-agence-chasseur-appartement-paris-92-idf/' .  $blog->category()->get()[0]->slug_name . '/blog-single.html?blog=' . $blog->slug ) }}" 
                        class="blog__widget--link"
                        title="{!! $blog->description_cards !!}">
                        Découvrir
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>