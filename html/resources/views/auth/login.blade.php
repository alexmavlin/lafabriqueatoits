@extends('layouts.admin.app')

@section('content')


    <!-- wrapper  -->
    <div id="wrapper">
        <!-- content -->
        <div class="dashboard-content" style="padding: 70px 0!important;">
            <div class="container dasboard-container" style="margin: unset!important;">
                <!-- dasboard-wrapper-->
                <div class="dasboard-wrapper fl-wrap no-pag">
                    <div class="row ">
                        <div class="col-md-5 col-md-offset-6 ">
                            <div class="dasboard-widget-title dbt-mm fl-wrap">
                                <h5><i class="fas fa-key"></i>Connexion</h5>
                            </div>
                            <form action="{{ route('login') }}" method="post" autocomplete="off">
                                @csrf
                                <div class="dasboard-widget-box fl-wrap">
                                    
                                    @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                    @error('password')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="custom-form">

                                        <!-- Email -->
                                        <div class="pass-input-wrap fl-wrap">
                                            <label>
                                                Email
                                                <span class="dec-icon">
                                                    <i class="far fa-user"></i>
                                                </span>
                                            </label>
                                            <input id="email" type="email" class="text-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        </div>

                                        <!-- Password -->
                                        <div class="pass-input-wrap fl-wrap">
                                            <label>
                                                Mot de passe
                                                <span class="dec-icon">
                                                    <i class="far fa-lock-alt"></i>
                                                </span>
                                            </label>
                                            <input id="password" type="password" class="pass-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>
                                        </div>
                                        <button type="submit" class="btn color-bg  float-btn">Se Connecter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- dasboard-wrapper end -->
            </div>
        </div>
        <!-- content end -->
        <div class="dashbard-bg gray-bg"></div>
    </div>
    <!-- wrapper end -->
</div>
<!-- Main end -->
@endsection
