<section class="blogWidget">
    <div class="container">
        <div class="blogWidget__inner">
            <h2 class="global__h2">Nos actualités</h2>
            <div class="blogWidget__items--wrapper">
                @foreach ($data['blogs'] as $blog)
                    <div class="blogWidget__item">
                        <img    src="{{ asset('images/content/blog/' . $blog->image) }}" 
                                alt="{{ $blog->alt }}"
                                width="520"
                                height="417"
                                loading="lazy" 
                                class="blogWidget__item--img">
                        <span class="blogWidget__item--date">{{ date('F j, Y', strtotime($blog->date)) }}</span>
                        <h3 class="blogWidget__item--h3">{{ $blog->title }}</h3>
                        <p class="blogWidget__item--p">{!! strlen($blog->description_cards) > 210 ? substr($blog->description_cards, 0, 210) . '...' : $blog->description_cards !!}</p>
                        <a href="{{ url('actualites-agence-chasseur-appartement-paris-92-idf/' .  $blog->category()->get()[0]->slug_name . '/blog-single.html?blog=' . $blog->slug ) }}" class="blogWidget__item--link">lire l’article</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>