{{-- Add this CSS  --}}
{{-- <link rel="stylesheet" href="{{asset ('/Styles/CSS/sidebar.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> --}}

{{-- Add this JS --}}
{{-- <script src="{{ asset('Styles/JS/sidebar.js')}}"></script> --}}

<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i></div>
    <h1 class="">
        @if(Route::is('dashboard_pendaftar')) Dashboard @endif
        @if(Route::is('profile')) Profile @endif
        @if(Route::is('messages')) Messages @endif
    </h1>
    <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="/dashboard" class="nav_logo">
                <img src="{{ asset('Styles/IMG/logo kpg.png') }}" style="width: 25; height: 25px;" alt="">
                <span class="nav_logo-name">SMK KPG</span>
            </a>
            <div class="nav_list">
                <a href="/dashboard" class="nav_link @if(Route::is('dashboard_pendaftar')) active @endif">
                    <i class='bx bx-grid-alt nav_icon'></i>
                    <span class="nav_name">Dashboard</span>
                </a>
                <a href="/profile" class="nav_link @if(Route::is('profile')) active @endif">
                    <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">Profil</span>
                </a>
                <a href="/messages" class="nav_link @if(Route::is('messages')) active @endif">
                    <i class='bx bx-message-square-detail nav_icon'></i>
                    <span class="nav_name">Pesan</span>
                </a>
            </div>
        </div>
        <a href="{{ route('logout') }}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i>
        <span class="nav_name">SignOut</span> </a>
    </nav>
</div>

