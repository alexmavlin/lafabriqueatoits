@extends('layouts.admin.app')

@section('content')
<!-- content -->
<div class="dashboard-content">
    <!-- Success message -->
    @if (\Session::has('success'))
        <div class="row">
            <div class="col-md-12">
                <div class="notification success-notif  fl-wrap">
                    <p>{!! \Session::get('success') !!}</p>
                    <a class="notification-close" href="#"><i class="fal fa-times"></i></a>
                </div>
            </div>
        </div>
    @endif
    
    <div class="dashboard-menu-btn color-bg"><span><i class="fas fa-bars"></i></span>Dasboard Menu</div>
    <div class="container dasboard-container">
        <div class="dasboard-wrapper fl-wrap">
            <div class="dasboard-listing-box fl-wrap">
                <!-- dashboard-listings-wrap-->
                <div class="dashboard-listings-wrap fl-wrap">
                    <div class="row">
                        <!-- dashboard-listings-item-->


                        @foreach($data['blogs'] as $blog)
                            <!-- article> -->
                            <div class="col-md-4">
                                <div class="post-container fl-wrap">
                                    <article class="post-article fl-wrap">
                                        <div class="list-single-main-media fl-wrap">
                                            <img src="{{ asset($blog->image) }}" class="respimg img_thumb" alt="{{ $blog->alt }}">
                                        </div>
                                        <div class="list-single-main-item fl-wrap block_box">
                                            <h2 class="post-opt-title"><a href="#" title="">{{ $blog->h2_title_cards }}</a></h2>
                                            <p>{!! $blog->description_cards !!}</p>
                                            <span class="fw-separator fl-wrap"></span>
                                            <div class="post-opt">
                                                <ul class="no-list-style">
                                                    {{ setlocale(LC_TIME, "fr_FR", "French") }}
                                                    <li><i class="fal fa-calendar"></i> <span>{{ utf8_encode(strftime("%A %d %B %G", strtotime($blog->date))) }}</span></li>
                                                    <li><i class="fas fa-pen"></i> <span>{{ $blog->author }}</span></li>
                                                    
                                                    <li>
                                                        <i class="fas fa-hashtag"></i>
                                                        @for ($i = 0; $i < count($blog->category); $i++)
                                                            <a href="#">{{ $blog->category[$i]->name }}</a>{{ $i == (count($blog->category) - 1) ? '' : ', ' }}
                                                        @endfor
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="geodir-category-footer fl-wrap">
                                                <form method="POST" action="{{ route('amdin.blog.delete', $blog->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button style="color: red;font-size: 17px;border: none;background: none;padding: 0;font: inherit;cursor: pointer;outline: inherit;" type="submit" name="delete" class="tolt ftr-btn" data-microtip-position="left" data-tooltip="Delete"><i class="fal fa-trash"></i></button>
                                                </form>
                                                <a href="{{ route('amdin.blog.edit', $blog->id) }}" class="tolt ftr-btn" style="color: green;font-size: 20px;" data-microtip-position="left" data-tooltip="EDIT"><i class="fal fa-edit"></i></a>
                                            </div>
                                        </div>
                                    </article>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- dashboard-listings-wrap end-->
            </div>
        </div>
    </div>
</div>
<!-- content end -->
@endsection