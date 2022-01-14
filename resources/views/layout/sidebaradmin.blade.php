<header class="header bg-secondary" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' style="color: white" id="header-toggle"></i></div>
    <h1 class=" text-light">
        @if(Route::is('dashboard_admin')) Dashboard @endif
        @if(Route::is('profile_admin')) Profile @endif
        @if(Route::is('pendaftaran_admin')) Pendaftaran @endif
    </h1>
    <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
</header>
<div class="l-navbar bg-dark" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="/dashboard" class="nav_logo">
                <img src="{{ asset('Styles/IMG/logo kpg.png') }}" style="width: 25; height: 25px;" alt="">
                <span class="nav_logo-name">SMK KPG</span>
            </a>
            <div class="nav_list">
                <a href="/dashboard" class="nav_link @if(Route::is('dashboard_admin')) active @endif">
                    <i class='bx bx-grid-alt nav_icon'></i>
                    <span class="nav_name">Dashboard</span>
                </a>
                <a href="/profile" class="nav_link @if(Route::is('profile_admin')) active @endif">
                    <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">Profil</span>
                </a>
                <a href="/pendaftaran" class="nav_link @if(Route::is('pendaftaran_admin')) active @endif">
                    <i class='bx bxs-file-plus nav_icon'></i>
                    <span class="nav_name">Pendaftaran</span>
                </a>
            </div>
        </div>
        <a href="{{ route('logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i>
        <span class="nav_name">SignOut</span> </a>
    </nav>
</div>
