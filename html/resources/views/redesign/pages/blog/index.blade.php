@extends('layouts/app')

@section('content')
<main>
    <!-- Main Section -->
    <section    class="main
                {{ isset($data['main_slider']) && $data['main_slider'] ? 'overflow-unset' : '' }}" 
                style="background-image: url('{{ asset('images/content/' . $data['main_img']) }}')">
            
        <div class="container">
            <div    class="main__inner
                    {{ isset($data['main_no_filter']) && $data['main_no_filter'] ? 'vh50 text-center' : '' }} 
                    {{ $data['main_reverse'] ? 'active' : '' }}{{ isset($data['main_full_filter']) &&  $data['main_full_filter'] ? 'full-filter' : '' }}">
                <div class="main__content">
                    @if($data['main_preheading'])
                        <p class="main__p1">{!! $data['main_preheading'] !!}</p>
                    @endif
                    @if($data['main_heading'])
                        <p class="main__p2" style="width:100%;text-align:center;">{!! $data['main_heading'] !!}</p>
                    @endif
                    @if(isset($data['main_afterheading']) && $data['main_afterheading'])
                        <p class="main__p3">{!! $data['main_afterheading'] !!}</p>
                    @endif
                </div>
            </div>
        
        </div>
        @if(isset($data['main_arrow']) && $data['main_arrow'])
            <svg width="124" height="124" viewBox="0 0 124 124" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                <path id="Vector" d="M39.5179 65.5039C39.85 65.1692 40.3001 64.9812 40.7694 64.9812C41.2387 64.9812 41.6889 65.1692 42.0209 65.5039L60.2503 83.898L60.2503 35.7873C60.2503 35.3133 60.4369 34.8587 60.769 34.5235C61.1012 34.1883 61.5516 34 62.0213 34C62.491 34 62.9415 34.1883 63.2736 34.5235C63.6057 34.8587 63.7923 35.3133 63.7923 35.7873L63.7923 83.898L82.0217 65.5039C82.3574 65.1882 82.8014 65.0163 83.2603 65.0245C83.7191 65.0326 84.1568 65.2202 84.4813 65.5477C84.8058 65.8751 84.9916 66.3169 84.9997 66.7799C85.0078 67.243 84.8375 67.6911 84.5247 68.0299L63.2728 89.4773C62.9407 89.812 62.4906 90 62.0213 90C61.552 90 61.1019 89.812 60.7698 89.4773L39.5179 68.0299C39.1863 67.6948 39 67.2405 39 66.7669C39 66.2932 39.1863 65.839 39.5179 65.5039Z" fill="#DAB56B"/>
                <rect x="0.775" y="0.775" width="122.45" height="122.45" rx="61.225" stroke="#DAB56B" stroke-width="1.55"/>
                </g>
            </svg>
        @endif
    </section>

    <!-- Section News -->
    <section class="news">
        <div class="container">
            <div class="news__inner">
                <div class="news__header">
                    <h2 class="news__h2">Actualités et tendances de l’immo</h2>
                    <p class="news__header__content">Quotidien, conseils et nouveautés par LFAT, votre partenaire immobilier à Paris et Ile de France   </p>
                </div>
                <form action="{{ route('blog.index') }}" class="news__form" method="GET">
                    <div class="news__form__row">
                        <select name="category" class="news__select" id="categories" onchange="this.form.submit()">
                            <option value="" selected disabled>Écrivez un message ici</option>
                            <option value="">Tous</option>
                            @foreach ($data['categories'] as $category)
                                <option value="{{ $category->slug_name }}" {{ request()->get('category' == $category->slug_name ? 'selected' : '') }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <svg class="news__form__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M19.4977 7.98903L12.0007 15.297L4.50372 7.98903C4.36978 7.85819 4.18997 7.78495 4.00272 7.78495C3.81548 7.78495 3.63567 7.85819 3.50172 7.98903C3.43687 8.05257 3.38534 8.12842 3.35017 8.21213C3.31499 8.29584 3.29687 8.38573 3.29688 8.47653C3.29687 8.56733 3.31499 8.65721 3.35017 8.74092C3.38534 8.82463 3.43687 8.90048 3.50172 8.96403L11.4772 16.74C11.6173 16.8765 11.8051 16.953 12.0007 16.953C12.1963 16.953 12.3842 16.8765 12.5242 16.74L20.4997 8.96553C20.565 8.90193 20.617 8.8259 20.6524 8.74191C20.6878 8.65792 20.7061 8.56769 20.7061 8.47653C20.7061 8.38537 20.6878 8.29513 20.6524 8.21114C20.617 8.12715 20.565 8.05112 20.4997 7.98753C20.3658 7.85669 20.186 7.78345 19.9987 7.78345C19.8115 7.78345 19.6317 7.85669 19.4977 7.98753V7.98903Z" fill="#0B0E3D"/>
                          </svg>
                    </div>
                    <div class="news__form__row">
                        <select class="news__select" id="timezone" name="period" onchange="this.form.submit()">
                            <option value="" selected>Tous</option>
                            <option value="7" {{ request()->get('period') == 7 ? 'selected' : ''}}>Les 7 Derniers Jours</option>
                            <option value="30" {{ request()->get('period') == 30 ? 'selected' : ''}}>Les 30 derniers jours</option>
                        </select>
                        <svg class="news__form__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M19.4977 7.98903L12.0007 15.297L4.50372 7.98903C4.36978 7.85819 4.18997 7.78495 4.00272 7.78495C3.81548 7.78495 3.63567 7.85819 3.50172 7.98903C3.43687 8.05257 3.38534 8.12842 3.35017 8.21213C3.31499 8.29584 3.29687 8.38573 3.29688 8.47653C3.29687 8.56733 3.31499 8.65721 3.35017 8.74092C3.38534 8.82463 3.43687 8.90048 3.50172 8.96403L11.4772 16.74C11.6173 16.8765 11.8051 16.953 12.0007 16.953C12.1963 16.953 12.3842 16.8765 12.5242 16.74L20.4997 8.96553C20.565 8.90193 20.617 8.8259 20.6524 8.74191C20.6878 8.65792 20.7061 8.56769 20.7061 8.47653C20.7061 8.38537 20.6878 8.29513 20.6524 8.21114C20.617 8.12715 20.565 8.05112 20.4997 7.98753C20.3658 7.85669 20.186 7.78345 19.9987 7.78345C19.8115 7.78345 19.6317 7.85669 19.4977 7.98753V7.98903Z" fill="#0B0E3D"/>
                          </svg>
                    </div>
                </form>
                <div class="news__list">

                    @foreach ($data['blogs'] as $blog)
                        <div class="news__item">
                            <img    src="{{ asset('images/content/blog/' . $blog->image) }}" 
                                    width="520"
                                    height="417"
                                    alt=""
                                    title="" 
                                    class="news__list__img">
                            <div class="news__item__content">
                                <p class="news__item__date">{{ date('F j, Y', strtotime($blog->date)) }}</p>
                                <p class="news__item__p">{{ $blog->title }}</p> 
                                <p class="news__p">{{ strlen($blog->meta_description) > 40 ? substr($blog->meta_description, 0, 40) . '...' : $blog->meta_description }}</p> 
                                <a  href="{{ url('actualites-agence-chasseur-appartement-paris-92-idf/' .  $blog->category()->get()[0]->slug_name . '/blog-single.html?blog=' . $blog->slug ) }}" 
                                    class="news__item__a">lire l’article</a>
                            </div>   
                        </div>
                    @endforeach
                </div>
                <div class="news__bottom">
                    <button class="news__button" href="#">Charger plus de Blogs</button>
                </div>               
            </div>
        </div>
    </section>

</main>
@endsection