@extends('layouts/admin/app')

@section('content')
<div class="dashboard-content">
    <div class="row ">
        <form action="{{ route('admin.programme.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="dasboard-widget-title fl-wrap" id="sec1">
                <h5><i class="fas fa-info"></i>Lien & Balises META</h5>
            </div>

            <div class="dasboard-widget-box fl-wrap" style="margin-bottom: 50px">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Link input -->
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Lien (Url de la page)</label>
                                @error('link')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="link"
                                        value="{{ old('link') ? old('link') : '' }}">
                            </div>
                        </div>

                        <!-- Breadcrumb -->
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Nom du lien (chemin de la page / Breadcrumbs)</label>
                                @error('breadcrumb')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="breadcrumb"
                                        value="{{ old('breadcrumb') ? old('breadcrumb') : '' }}">
                            </div>
                        </div>

                        <!-- meta_title -->
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

                        <!-- meta_keywords -->
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

                        <!-- meta_description -->
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Description de la Page (Meta Description) </label>
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

            <div class="dasboard-widget-title fl-wrap" id="sec1">
                <h5><i class="fas fa-info"></i>Titre Principal</h5>
            </div>
            <div class="dasboard-widget-box fl-wrap" style="margin-bottom: 50px">
                <div class="row">
                    <div class="col-md-12">

                        <!-- h1_title -->
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Titre Principal de la Page (H1) + Titre sur la product card</label>
                                @error('h1_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="h1_title"
                                        value="{{ old('h1_title') ? old('h1_title') : '' }}">
                            </div>
                        </div>

                        <!-- title -->
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Titre sur MAP</label>
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="title"
                                        value="{{ old('title') ? old('title') : '' }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dasboard-widget-title fl-wrap" id="sec1">
                <h5><i class="fas fa-info"></i>Localisation</h5>
            </div>
            <div class="dasboard-widget-box fl-wrap" style="margin-bottom: 50px">
                <div class="row">
                    <div class="col-md-12">

                        <!-- department_id -->
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Département </label>
                                @error('department_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <select class="chosen-select no-search-select" name="department_id"
                                        id="department_id" required>
                                    @foreach ($data['departments'] as $department)
                                        <option value="{{ $department->id }}"
                                                {{ old('department_id') == $department->id ? 'selected' : '' }}>
                                                {{ $department->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- address -->
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Adresse</label>
                                @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  autocomplete="off" 
                                        type="text" 
                                        class="form-control" 
                                        name="address"
                                        id="autocomplete"
                                        value="{{ old('address') ? old('address') : '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <!-- city -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Ville</label>
                                        @error('city')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input  type="text" 
                                                class="form-control" 
                                                name="city" 
                                                id="city"
                                                value="{{ old('city') ? old('city') : '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <!-- lat -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <input  type="hidden" 
                                                class="form-control" 
                                                name="lat" 
                                                id="lat" required
                                                value="{{ old('lat') ? old('lat') : '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <!-- lon -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <input  type="hidden" 
                                                class="form-control" 
                                                name="lon" 
                                                id="lon" required
                                                value="{{ old('lon') ? old('lon') : '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="dasboard-widget-title fl-wrap" id="sec1">
                <h5><i class="fas fa-info"></i>Information relatives au programme</h5>
            </div>
            <div class="dasboard-widget-box fl-wrap"  style="margin-bottom: 50px">
                <div class="row">
                    <div class="col-md-12">

                        <!-- type -->
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Type de Bien</label>
                                @error('type')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <select class="chosen-select no-search-select" name="type" id="type" required>
                                    <option {{ old('type') === 'Appartement' ? 'selected' : '' }}
                                            value="Appartement">Appartement
                                    </option>
                                    <option {{ old('type') === 'Maison' ? 'selected' : '' }}
                                            value="Maison">Maison
                                    </option>
                                </select>
                            </div>
                        </div>

                        <!-- devices -->
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Dispositifs Fiscaux</label>
                                @error('devices')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <select class="chosen-select no-search-select" name="devices" id="devices"
                                        required>
                                    <option {{ old('devices') === 'LMNP' ? 'selected' : '' }}
                                            value="LMNP">LMNP
                                    </option>
                                    <option {{ old('devices') === 'PINEL' ? 'selected' : '' }}
                                            value="PINEL">PINEL
                                    </option>
                                    <option {{ old('devices') === 'AUTRES' ? 'selected' : '' }}
                                            value="AUTRES">AUTRES
                                    </option>
                                </select>
                            </div>
                        </div>

                        <!-- delivery_date -->
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Année de livraison</label>
                                @error('delivery_date')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="date" 
                                        class="text-input" 
                                        name="delivery_date"
                                        value="{{ old('delivery_date') ? old('delivery_date') : '' }}">
                            </div>
                        </div>

                        <!-- trimester -->
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Trimestre de livraison (ex : 1ER TRI) </label>
                                @error('trimester')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="trimester"
                                        value="{{ old('trimester') ? old('trimester') : '' }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="dasboard-widget-title fl-wrap" id="sec1">
                <h5><i class="fas fa-info"></i>Description</h5>
            </div>
            <div class="dasboard-widget-box fl-wrap"  style="margin-bottom: 50px">
                <div class="row">
                    <div class="col-md-12">

                        <!-- h2_title -->
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Titre Description (H2)</label>
                                @error('h2_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input  type="text" 
                                        class="text-input" 
                                        name="h2_title"
                                        value="{{ old('h2_title') ? old('h2_title') : '' }}">
                            </div>
                        </div>

                        <!-- mini_descreption -->
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Description sur la product card</label>
                                @error('mini_descreption')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <textarea   class="text-input" 
                                            name="mini_descreption">
                                            {{ old('mini_descreption') ? old('mini_descreption') : '' }}
                                </textarea>
                            </div>
                        </div>

                        <!-- description -->
                        <div class="custom-form">
                            <div class="pass-input-wrap fl-wrap">
                                <label>Description (inclure balises < p >< /p > et autres) </label>
                                @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <textarea   class="text-input" 
                                            name="description">
                                            {{ old('description') ? old('description') : '' }}
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="dasboard-widget-title fl-wrap" id="sec1">
                <h5><i class="fas fa-info"></i>Section (Pourquoi acheter dans ce secteur)</h5>
            </div>
            <div class="dasboard-widget-box fl-wrap"  style="margin-bottom: 50px">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">

                                <!-- h3_title -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Titre Pourquoi acheter dans ce secteur (H3)</label>
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
                        <div class="row">
                            <div class="col-md-6">

                                <!-- city_info_title_1 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Titre donnée 1</label>
                                        @error('city_info_title_1')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input  type="text" 
                                                class="text-input" 
                                                name="city_info_title_1"
                                                value="{{ old('city_info_title_1') ? old('city_info_title_1') : '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <!-- city_info_1 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Valeur donnée 1 </label>
                                        @error('city_info_1')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input  type="text" 
                                                class="text-input" 
                                                name="city_info_1"
                                                value="{{ old('city_info_1') ? old('city_info_1') : '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <!-- city_info_title_2 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Titre donnée 2</label>
                                        @error('city_info_title_2')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input  type="text" 
                                                class="text-input" 
                                                name="city_info_title_2"
                                                value="{{ old('city_info_title_2') ? old('city_info_title_2') : '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <!-- city_info_2 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Valeur donnée 2</label>
                                        @error('city_info_2')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input  type="text" 
                                                class="text-input" 
                                                name="city_info_2"
                                                value="{{ old('city_info_2') ? old('city_info_2') : '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <!-- city_info_title_3 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Titre donnée 3</label>
                                        @error('city_info_title_3')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input  type="text" 
                                                class="text-input" 
                                                name="city_info_title_3"
                                                value="{{ old('city_info_title_3') ? old('city_info_title_3') : '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <!-- city_info_3 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Valeur donnée 3</label>
                                        @error('city_info_3')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input  type="text" 
                                                class="text-input" 
                                                name="city_info_3"
                                                value="{{ old('city_info_3') ? old('city_info_3') : '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <!-- city_info_title_4 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Titre donnée 4</label>
                                        @error('city_info_title_4')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input type="text" class="text-input" name="city_info_title_4"
                                               value="{{ old('city_info_title_4') ? old('city_info_title_4') : '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <!-- city_info_4 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Valeur donnée 4</label>
                                        @error('city_info_4')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input  type="text" 
                                                class="text-input" 
                                                name="city_info_4"
                                                value="{{ old('city_info_4') ? old('city_info_4') : '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="dasboard-widget-title fl-wrap" id="sec1">
                <h5><i class="fas fa-info"></i>Images du programme</h5>
            </div>

            <div class="dasboard-widget-box fl-wrap" style="margin-bottom: 50px">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">

                                <!-- image_1 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Image 1 ( 800 x 530 px )</label>
                                        @error('image_1')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input type="file" name="image_1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <!-- alt_1 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Description Image (ALT) </label>
                                        @error('alt_1')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input  type="text" 
                                                class="text-input" 
                                                name="alt_1"
                                                value="{{ old('alt_1') ? old('alt_1') : '' }}">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <!-- image_2 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Image 2 ( 800 x 530 px )</label>
                                        @error('image_2')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input type="file" name="image_2"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <!-- alt_2 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>ALT Image 2</label>
                                        @error('alt_2')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input  type="text" 
                                                class="text-input" 
                                                name="alt_2"
                                                value="{{ old('alt_2') ? old('alt_2') : '' }}">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <!-- image_3 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Image 3 ( 800 x 530 px )</label>
                                        @error('image_3')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input type="file" name="image_3">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <!-- alt_3 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>ALT Image 3</label>
                                        @error('alt_3')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input  type="text" 
                                                class="text-input" 
                                                name="alt_3"
                                                value="{{ old('alt_3') ? old('alt_3') : '' }}">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <!-- image_4 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Image 4 ( 800 x 530 px )</label>
                                        @error('image_4')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input type="file" name="image_4"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <!-- alt_4 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>ALT Image 4</label>
                                        @error('alt_4')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input  type="text" 
                                                class="text-input" 
                                                name="alt_4"
                                                value="{{ old('alt_4') ? old('alt_4') : '' }}">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <!-- image_5 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>Image 5 ( 800 x 530 px )</label>
                                        @error('image_5')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input type="file" name="image_5"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <!-- alt_5 -->
                                <div class="custom-form">
                                    <div class="pass-input-wrap fl-wrap">
                                        <label>ALT Image 5 </label>
                                        @error('alt_5')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input  type="text" 
                                                class="text-input" 
                                                name="alt_5"
                                                value="{{ old('alt_5') ? old('alt_5') : '' }}">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @for ($i = 1; $i < 5; $i++)
            <div class="dasboard-widget-title fl-wrap" id="sec1">
                <h5><i class="fas fa-info"></i>Informations relatives au Lot {{ $i }}</h5>
            </div>

            <div class="dasboard-widget-box fl-wrap" style="margin-bottom: 50px">
                <div class="row">
                        <div class="col-md-12" style="margin-top: 20px!important;">

                            <!-- name_lot_$i -->
                            <div class="custom-form">
                                <div class="pass-input-wrap fl-wrap">
                                    <label>Nom LOT {{ $i }}</label>
                                    @error("name_lot_{{$i}}")
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input  type="text" 
                                            class="text-input" 
                                            name="name_lot_{{ $i }}"
                                            value="{{ old('name_lot_' . $i) ? old('name_lot_' . $i) : '' }}"/>
                                </div>
                            </div>

                            <!-- parts_ -->
                            <div class="custom-form">
                                <div class="pass-input-wrap fl-wrap">
                                    <label>Pièces </label>
                                    @error("parts_{{$i}}")
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <select class="chosen-select no-search-select" name="parts_{{ $i }}"
                                            id="parts"
                                            required>
                                            @for ($t = 1; $t <= 10; $t++)
                                                <option value="{{ $t }}" 
                                                        {{ old('parts_' . $i) == $t ? 'selected' : '' }}>
                                                    T{{$t}}
                                                </option>
                                            @endfor
                                    </select>
                                </div>
                            </div>

                            <!-- img_lot_ -->
                            <div class="custom-form">
                                <div class="pass-input-wrap fl-wrap">
                                    <label>Image LOT {{ $i }} (800 x 530 px )</label>
                                    @error("img_lot_{{$i}}")
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input type="file" name="img_lot_{{ $i }}"/>
                                </div>
                            </div>

                            <!-- alt_img_ -->
                            <div class="custom-form">
                                <div class="pass-input-wrap fl-wrap">
                                    <label>ALT LOT <?php echo $i ?></label>
                                    @error("alt_img_{{$i}}")
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input  type="text" 
                                            class="text-input" 
                                            name="alt_img_{{ $i }}"
                                            value="{{ old('alt_img_' . $i) ? old('alt_img_' . $i) : '' }}"/>
                                </div>
                            </div>

                            <!-- price_lot_ -->
                            <div class="custom-form">
                                <div class="pass-input-wrap fl-wrap">
                                    <label>Prix LOT {{$i}}
                                        <label><span class="dec-icon"
                                                     style="left: unset!important;right: 0!important;border-left: 1px solid #e5e7f2;"><i
                                                        class="fal fa-euro-sign"></i></span></label>
                                        @error("price_lot_{{$i}}")
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input type="number" class="text-input"
                                               name="price_lot_{{ $i }}"
                                               value="{{ old('price_lot_' . $i) ? old('price_lot_' . $i) : '' }}"/>
                                </div>
                            </div>

                            <!-- descreption_lot_ -->
                            <div class="custom-form">
                                <div class="pass-input-wrap fl-wrap">
                                    <label>Description LOT {{ $i }}
                                    @error("descreption_lot_{{$i}}")
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <textarea
                                            name="descreption_lot_{{ $i }}">{{ old('descreption_lot_' . $i) ? old('descreption_lot_' . $i) : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            @endfor
            <div class="dasboard-widget-title fl-wrap" id="sec1">
                <h5><i class="fas fa-info"></i>Options d'affichage</h5>
            </div>
            <div class="dasboard-widget-box fl-wrap" style="margin-bottom: 50px">
                <div class="col-md-6">

                    <!-- is_new -->
                    <div class="custom-form">
                        <div class="pass-input-wrap fl-wrap">
                            <label>Afficher dans section A la Une</label>
                            @error("is_new")
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <input  type="checkbox" 
                                    class="text-input" 
                                    name="is_new" 
                                    value="1"
                                    {{ old('is_new') === 1 ? 'checked' : '' }}>
                        </div>
                    </div>

                    <!-- is_selected -->
                    <div class="custom-form">
                        <div class="pass-input-wrap fl-wrap">
                            <label>Afficher dans section Sélection DPT </label>
                            @error("is_selected")
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
            <button type="submit" name="submit"  class="btn  color-bg float-btn">Ajouter</button>

        </form>
    </div>
</div>
@endsection