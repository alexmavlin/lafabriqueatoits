<header class="main-header">
    <!--  logo  -->
    <div class="logo-holder"><a href="{{ route('admin.index')}}"><img src="{{ asset('img/logo.webp') }}" width="auto" alt="Logo La Fabrique à Toits, chasseur immobilier"></a></div>
    <!-- logo end  -->
    <!-- nav-button-wrap-->
    <div class="nav-button-wrap color-bg nvminit">
        <div class="nav-button">
            <span></span><span></span><span></span>
        </div>
    </div>
    <!-- nav-button-wrap end-->
    <!--  login btn -->
    <div class="show-reg-form dasbdord-submenu-open"><img src="{{ asset('img/avatar/7.webp') }}" alt=""></div>
    <!--  login btn  end -->
    <!--  dashboard-submenu-->
    <div class="dashboard-submenu">
        <div class="dashboard-submenu-title fl-wrap">Bienvenue</div>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="color-bg db_log-out"><i class="far fa-power-off"></i> Se Déconnecter</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
    <!--  dashboard-submenu  end -->
</header>