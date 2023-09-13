@extends('layouts/app')

@section('content')
<main>
    <?php setlocale(LC_TIME, "fr_FR"); ?>
    <?php setlocale(LC_NUMERIC, 'C'); ?>
    <!-- Main Section -->
    @include('parts/main2')

    <!-- Section Breadcrumbs -->
    @include('parts/breadcrumbs-home')

    <!-- Section Blog - Index -->
    <section class="blog__index">
        <div class="container">
            <div class="blog__index--inner">
                <div class="blog__index--content">
                    @foreach ($data['blogs'] as $blog)
                        <article class="blog__index--article">
                            <img    loading="lazy" 
                                    src="{{ asset($blog->image) }}" 
                                    alt="{{ $blog->alt }}" 
                                    class="blog__index--article__img">
                            <div class="blog__index--article__content">
                                <h2>
                                    <a  href="{{ url('actualites-agence-chasseur-appartement-paris-92-idf/' .  $blog->category()->get()[0]->slug_name . '/blog-single.html?blog=' . $blog->slug ) }}" 
                                        title="{{ $blog->title }}">
                                        {{ $blog->title }}
                                    </a>
                                </h2>
                                <p>{!! $blog->description_cards !!}</p>
                                <div class="blog__index--article__footer">
                                    <div class="blog__index--article__details">
                                        <a href="{{ url('actualites-agence-chasseur-appartement-paris-92-idf/' .  $blog->category()->get()[0]->slug_name . '/blog-single.html?blog=' . $blog->slug ) }}"
                                            title="{{ $blog->title}}">
                                            <i class="fal fa-calendar"></i>
                                            {{ strftime('%A %e %B %Y', strtotime($blog->date))}}
                                        </a>
                                        <a href="{{ url('actualites-agence-chasseur-appartement-paris-92-idf/' .  $blog->category()->get()[0]->slug_name . '/blog-single.html?blog=' . $blog->slug ) }}"
                                            title="{{ $blog->title}}">
                                            <i class="fas fa-pen"></i>
                                            {{ $blog->author }}
                                        </a>
                                        <a href="{{ url('actualites-agence-chasseur-appartement-paris-92-idf/' .  $blog->category()->get()[0]->slug_name . '/blog-single.html?blog=' . $blog->slug ) }}"
                                            title="{{ $blog->title}}">
                                            <i class="fas fa-hashtag"></i>
                                            @if (count($blog->category()->get()) > 1)
                                                {{ $blog->category()->get()[0]->name }}
                                                @for ($i = 1; $i < count($blog->category()->get()); $i++)
                                                    {{ ', ' . $blog->category()->get()[$i]->name }}
                                                @endfor
                                            @else
                                                {{ $blog->category()->get()[0]->name }}
                                            @endif
                                        </a>
                                    </div>
                                    <a  href="{{ url('actualites-agence-chasseur-appartement-paris-92-idf/' .  $blog->category()->get()[0]->slug_name . '/blog-single.html?blog=' . $blog->slug ) }}"
                                        title="{{ $blog->title }}"
                                        class="blog__index--article__btn">
                                        En Savoir +
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                @include('parts/blog-sidebar')
            </div>
        </div>
    </section>
</main>
@endsection