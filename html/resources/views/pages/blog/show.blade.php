@extends('layouts/app')

@section('content')
<main>

    <?php setlocale(LC_TIME, "fr_FR"); ?>
    <?php setlocale(LC_NUMERIC, 'C'); ?>

    <!-- Section Breadcrumbs -->
    @include('parts/breadcrumbs')

    <!-- Section Blog - Index -->
    <section class="blog__index">
        <div class="container">
            <div class="blog__index--inner">
                <div class="blog__index--content">
                    <div class="blog__show--content">
                        <img    loading="lazy" 
                                src="{{ asset($data['blogs']->image)}}" 
                                alt="{{ $data['blogs']->alt }}">
                        <div class="blog__show--content__block">
                            <h1>{{ $data['blogs']->title }}</h1>
                            <div class="blog__index--article__details maw-unset pb-90 quote-blog">
                                <a href="{{ url('actualites-agence-chasseur-appartement-paris-92-idf/' .  $data['blogs']->category()->get()[0]->slug_name . '/blog-single.html?blog=' . $data['blogs']->slug ) }}"
                                    title="{{ $data['blogs']->title}}">
                                    <i class="fal fa-calendar"></i>
                                    {{ strftime('%A %e %B %Y', strtotime($data['blogs']->date))}}
                                </a>
                                <a href="{{ url('actualites-agence-chasseur-appartement-paris-92-idf/' .  $data['blogs']->category()->get()[0]->slug_name . '/blog-single.html?blog=' . $data['blogs']->slug ) }}"
                                    title="{{ $data['blogs']->title}}">
                                    <i class="fas fa-pen"></i>
                                    {{ $data['blogs']->author }}
                                </a>
                                <a href="{{ url('actualites-agence-chasseur-appartement-paris-92-idf/' .  $data['blogs']->category()->get()[0]->slug_name . '/blog-single.html?blog=' . $data['blogs']->slug ) }}"
                                    title="{{ $data['blogs']->title}}">
                                    <i class="fas fa-hashtag"></i>
                                    @if (count($data['blogs']->category()->get()) > 1)
                                        {{ $data['blogs']->category()->get()[0]->name }}
                                        @for ($i = 1; $i < count($data['blogs']->category()->get()); $i++)
                                            {{ ', ' . $data['blogs']->category()->get()[$i]->name }}
                                        @endfor
                                    @else
                                        {{ $data['blogs']->category()->get()[0]->name }}
                                    @endif
                                </a>
                            </div>
                            <h2>{!! $data['blogs']->h2_title !!}</h2>
                            <p>{!! $data['blogs']->content !!}</p>
                        </div>
                        <img    loading="lazy" 
                                src="{{ asset($data['blogs']->img_content)}}" 
                                alt="{{ $data['blogs']->alt_content }}">
                        <div class="blog__show--content__block">
                            @for ($i = 2; $i < 15; $i++)
                                <h3>{!! $data['blogs']->{'h3_title_' . $i} !!}</h3>
                                <p>{!! $data['blogs']->{'content_' . $i} !!}</p>
                            @endfor
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                @include('parts/blog-sidebar')
            </div>
        </div>
    </section>

</main>
@endsection