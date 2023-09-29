@extends('layouts.admin.app')

@section('content')
<div class="dashboard-content">
    <div class="row ">
        <form action="{{ route('amdin.blog.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="dasboard-widget-title fl-wrap"id="sec1">
                <h5><i class="fas fa-info"></i>Lien & Balises META</h5>
            </div>
            <div class="dasboard-widget-box fl-wrap" style="margin-bottom: 50px">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Lien</label>
                                @error('url')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="url"
                                        value="{{ old('url') ? old('url') : '' }}">
                            </div>
                        </div>

                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Nom du lien (chemin de la page / Breadcrumbs)</label>
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="title"
                                        value="{{ old('title') ? old('title') : '' }}">
                            </div>
                        </div>
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Nom de la Page (Meta Titre)</label>
                                @error('meta_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="meta_title" 
                                        value="{{ old('meta_title') ? old('meta_title') : '' }}">
                            </div>
                        </div>

                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Mots clés de la page (virgule entre chaque mot clé)</label>
                                @error('meta_keywords')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="meta_keywords"
                                        value="{{ old('meta_keywords') ? old('meta_keywords') : '' }}">
                            </div>
                        </div>
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Description de la Page (Meta Description)</label>
                                @error('meta_description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="meta_description"
                                        value="{{ old('meta_description') ? old('meta_description') : '' }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="dasboard-widget-title fl-wrap"id="sec1">
                <h5><i class="fas fa-info"></i>Titre (H1, H2, H3)</h5>
            </div>
            <div class="dasboard-widget-box fl-wrap" style="margin-bottom: 50px">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Titre Principale de la Page (H1)</label>
                                @error('h1_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="h1_title"
                                        value="{{ old('h1_title') ? old('h1_title') : '' }}">
                            </div>
                        </div>
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Titre (H2)</label>
                                @error('h2_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <textarea name="h2_title">
                                    {{ old('h2_title') ? old('h2_title') : '' }}
                                </textarea>
                            </div>
                            <div class="custom-form">
                                <div class="pass-input-wrap fl-wrap">
                                    <label>Titre (H3)</label>
                                    @error('h3_title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input  type="text" 
                                            class="text-input" 
                                            name="h3_title"
                                            value="{{ old('h3_title') ? old('h3_title') : '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="dasboard-widget-title fl-wrap"id="sec1">
                <h5><i class="fas fa-info"></i>Mini Descriptif</h5>
            </div>
            <div class="dasboard-widget-box fl-wrap" style="margin-bottom: 50px">
                <div class="row">

                    <div class="col-md-12">
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Titre Description (H2)</label>
                                @error('h2_title_cards')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="h2_title_cards"
                                        value="{{ old('h2_title_cards') ? old('h2_title_cards') : '' }}">
                            </div>
                            <div class="custom-form">
                                <div class="pass-input-wrap fl-wrap">
                                    <label>Brève Description</label>
                                    @error('description_cards')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <textarea name="description_cards">
                                        {{ old('description_cards') ? old('description_cards') : '' }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="custom-form">
                                <div class="pass-input-wrap fl-wrap">
                                    <label>En savoir plus</label>
                                    @error('en_savoir_cards')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input  type="text" 
                                            class="text-input" 
                                            name="en_savoir_cards"
                                            value="{{ old('en_savoir_cards') ? old('en_savoir_cards') : '' }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="dasboard-widget-title fl-wrap"id="sec1">
                <h5><i class="fas fa-info"></i>Informations</h5>
            </div>
            <div class="dasboard-widget-box fl-wrap" style="margin-bottom: 50px">
                <div class="row">

                    <div class="col-md-12">
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Date de publication</label>
                                @error('date')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="date" 
                                        class="text-input" 
                                        name="date"
                                        value="{{ old('date') ? old('date') : '' }}">
                            </div>
                        </div>
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Auteur</label>
                                @error('author')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="author"
                                        value="{{ old('author') ? old('author') : '' }}">
                            </div>
                        </div>

                        <div class="custom-form">
                            <label>Categories</label>
                            @error('categorie')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <select class="select2 pass-input-wrap fl-wrap" 
                                    name="categorie[]"
                                    id="categorie" 
                                    multiple="multiple">
                                @foreach ($data['categories'] as $category)
                                    <option value="{{ $category->id}}"
                                            {{ old('categorie') ? in_array($category->id, old('categorie')) ? 'selected' : '' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="dasboard-widget-title fl-wrap"id="sec1">
                <h5><i class="fas fa-info"></i>Image</h5>
            </div>
            <div class="dasboard-widget-box fl-wrap" style="margin-bottom: 50px">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Image</label>
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input type="file" name="image"/>
                            </div>
                        </div>
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Image Alt</label>
                                @error('alt')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="alt"
                                        value="{{ old('alt') ? old('alt') : '' }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="dasboard-widget-title fl-wrap"id="sec1">
                <h5><i class="fas fa-info"></i>Contenu</h5>
            </div>
            <div class="dasboard-widget-box fl-wrap" style="margin-bottom: 50px">
                <div class="row">

                    <div class="col-md-12">
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Contenu (inclure balises < p >< /p > et autres)</label>
                                @error('content')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <textarea name="content">
                                    {{ old('content') ? old('content') : '' }}
                                </textarea>
                            </div>
                        </div>

                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Image contenu</label>
                                @error('img_content')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input type="file" name="img_content"/>
                            </div>
                        </div>

                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>ALT Image contenu</label>
                                @error('alt_content')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="alt_content"
                                        value="{{ old('alt_content') ? old('alt_content') : '' }}">
                            </div>
                        </div>
                        @for ($i = 2; $i <= 15; $i++)

                            <!-- H3 Title -->
                            <div class="custom-form">
                                <div class="pass-input-wrap fl-wrap">
                                    <label>Titre <?php echo $i ?> (H3)</label>
                                    @error('h3_title_{{ $i }}')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input  type="text" 
                                            class="text-input" 
                                            name="h3_title_{{ $i }}"
                                            value="{{ old('h3_title_' . $i) ? old('h3_title_' . $i) : '' }}">
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="custom-form">
                                <div class="pass-input-wrap fl-wrap">
                                    <label>Description <?php echo $i ?></label>
                                    @error('description_{{ $i }}')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input  type="text" 
                                            class="text-input" 
                                            name="description_{{ $i }}"
                                            value="{{ old('description_' . $i) ? old('description_' . $i) : '' }}">
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="custom-form">
                                <div class="pass-input-wrap fl-wrap">
                                    <label>Contenu <?php echo $i ?></label>
                                    @error('content_{{ $i }}')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <textarea name="content_{{ $i }}">
                                        {{ old('content_' . $i) ? old('content_' . $i) : '' }}
                                    </textarea>
                                </div>
                            </div>

                            <!-- Images -->
                            <div class="col-md-12">
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Image {{ $i }}</label>
                                        @error('img_content_{{ $i }}')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input type="file" name="img_content_{{ $i }}"/>
                                    </div>
                                </div>
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Image {{ $i }} Alt</label>
                                        @error('img_alt_{{ $i }}')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input  type="text" 
                                                class="text-input" 
                                                name="img_alt_{{ $i }}"
                                                value="{{ old('img_alt_' . $i) ? old('img_alt_' . $i) : '' }}">
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>

            <div class="dasboard-widget-title fl-wrap"id="sec1">
                <h5><i class="fas fa-info"></i>Options d'affichage</h5>
            </div>
            <div class="dasboard-widget-box fl-wrap" style="margin-bottom: 50px">
                <div class="row">
                    <div class="col-md-12">
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Affichage actualités</label>
                                @error('is_selected')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="checkbox" 
                                        class="text-input" 
                                        name="is_selected" 
                                        value="1" 
                                        {{ old('is_selected') === 1 ? 'checked' : '' }}>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" class="add-list color-bg"><i
                        class="fal fa-plus"></i> <span>Ajouter</span></button>

        </form>
    </div>
</div>
@endsection