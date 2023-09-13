@extends('layouts.admin.app')

@section('content')

<!-- content -->
<div class="dashboard-content">

    <!-- Success message -->
    <div class="row">
        <div class="col-md-12">
            <div class="notification success-notif  fl-wrap">
                <p>Le programme a été créee avec succès</p>
                <a class="notification-close" href="#"><i class="fal fa-times"></i></a>
            </div>
        </div>
    </div>
    <!-- // Success message -->

    <div class="container dasboard-container">
        <div class="dashboard-title fl-wrap">
            <div class="dashboard-title-item" style="padding: 0 0 20px 0"><span>List des programmes</span></div>
        </div>

        <div class="dasboard-wrapper fl-wrap">
            <!-- dashboard-listings-wrap-->
            <div class="dashboard-listings-wrap fl-wrap">
                <div class="row fixed-row">
                    <!-- dashboard-listings-item-->

                    @foreach ($data['habitations'] as $habitation)

                        <div class="col-md-4">
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img fl-wrap">
                                        <a  href=""
                                            class="geodir-category-img_item">
                                            @if (count($habitation->images))
                                                <img src="{{ asset($habitation->images[0]->src) }}"
                                                     alt="{{$habitation->images[0]->alt}}"
                                                     class="img_thumb">
                                            @endif
                                            <div class="overlay"></div>
                                        </a>
                                        <ul class="list-single-opt_header_cat">
                                            <li class="cat-opt color-bg2">{{ $habitation->type }}</li>
                                            @if ($habitation->devices)
                                                <li class="cat-opt color-bg2">{{ $habitation->devices }}</li>
                                            @endif
                                            @if ($habitation->delivery_date)
                                                <li class="cat-opt color-bg2">{{ $habitation->trimester . ' ' . $habitation->delivery_date }}</li>
                                            @endif
                                        </ul>
                                    </div>

                                    <div class="geodir-category-content fl-wrap">
                                        <h3 class="title-sin_item"><a
                                                    href="">
                                                <i class="fas fa-map-marker-alt"></i> <?php echo $habitation['h1_title'] ?>
                                            </a></h3>
                                            @if (isset($habitation->min_price))
                                                <div class="geodir-category-content_price">
                                                    à partir de {{ $habitation->min_price }} € TTC
                                                </div>
                                            @endif
                                        <div class="geodir-category-content-details">
                                            <ul>
                                                @foreach ($habitation->lots as $lot)
                                                    <li>
                                                        <i class="fas fa-door-open"></i><span>{{ $lot->parts }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>


                                        <div class="geodir-category-footer fl-wrap">
                                            <form method="POST"
                                                  action="{{ route('admin.programme.delete', $habitation->id) }}">
                                                  @csrf
                                                  @method('DELETE')
                                                <button style="color: red;font-size: 17px;border: none;background: none;padding: 0;cursor: pointer;outline: inherit;"
                                                        type="submit" name="delete" class="tolt ftr-btn"
                                                        data-microtip-position="left" data-tooltip="Delete"><i
                                                            class="fal fa-trash" ></i></button>
                                                <input type="hidden" name="id"
                                                       value="">
                                            </form>
                                            <a data-tooltip="EDIT" data-microtip-position="left"
                                               class="tolt ftr-btn"
                                               href="{{ route('admin.programme.edit', $habitation->id) }}"><i
                                                        class="fa fa-edit" style="color: green;font-size: 20px;"></i></a>
                                        </div>
                                </article>
                            </div>
                            <!-- listing-item end-->
                        </div>
                    @endforeach


                </div>
            </div>
            <!-- dashboard-listings-wrap end-->
        </div>
    </div>
</div>
    
@endsection