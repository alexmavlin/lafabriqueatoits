<div class="blog__index--sidebar">
    <div class="blog__index--sidebar__block">
        <h3 class="blog__index--sidebar__heading">Articles Recommandés</h3>
        <div class="blog__index--sidebar__content">
            @foreach ($data['selected_blogs'] as $blog)
                <a  href="{{ url('actualites-agence-chasseur-appartement-paris-92-idf/' .  $blog->category()->get()[0]->slug_name . '/blog-single.html?blog=' . $blog->slug ) }}"
                    title="$blog->title"
                    class="blog__index--sidebar__content--blog__box">
                    <img loading="lazy" src="{{ asset($blog->image) }}" alt="{{ $blog->alt }}">
                    <div>
                        <h4>{{ $blog->title }}</h4>
                        <p>
                            <i class="fal fa-calendar"></i>
                            {{ strftime('%A %e %B %Y', strtotime($blog->date))}}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div class="blog__index--sidebar__block">
        <h3 class="blog__index--sidebar__heading">Articles par Catégorie</h3>
        <div class="blog__index--sidebar__content">
            @foreach ($data['categories'] as $category)
            <div class="blog__index--sidebar--catrow">
                <a href="#" title="{{ $category->name }}">{{ $category->name }}</a>
                <span>{{ count($category->blogs) }}</span>
            </div>
            @endforeach
        </div>
    </div>
    <form action="{{route('main.mail.send')}}" class="blog__index--form" method="post">
        @csrf
        <h3 class="blog__index--form__heading">Rappelez moi !</h3>

        <div class="blog__index--form__content">

            <!-- Nom et Prénom* -->
            <div class="blog__index--form__group">
                <label for="">Nom et Prénom*</label>
                <div class="blog__index--form__input--block">
                    <i class="fas fa-user"></i>
                    <input type="text" name="name">
                </div>
            </div>

            <!-- Téléphone* -->
            <div class="blog__index--form__group">
                <label for="">Téléphone*</label>
                <div class="blog__index--form__input--block">
                    <i class="fas fa-phone"></i>
                    <input type="text" name="phone">
                </div>
            </div>

            <!-- Raison de l'Appel*  -->
            <div class="blog__index--form__group">
                <label for="">Raison de l'Appel* </label>
                <div class="blog__index--form__input--block">
                    <i class="fas fa-question-circle"></i>
                    <input type="text" name="raison">
                </div>
            </div>

            <button type="submit" class="blog__index--form__btn btn-primary">Envoyer</button>
        </div>
    </form>
</div>