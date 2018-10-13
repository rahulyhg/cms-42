<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CMS</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
       <nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
           <div class="navbar-brand">
               <a href="{{ route('home') }}" class="navbar-item">
                   <img src="{{ asset('images/exp.png') }}" alt="Logo">
                </a>
               <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="nav">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>               
            </div>
            <div class="navbar-menu" id="nav">
                <div class="navbar-start">
                    <a href="" class="navbar-item m-l-10">Learn</a>
                    <a href="" class="navbar-item">Share</a>
                    <a href="" class="navbar-item">Discuss</a>
                </div>
                <div class="navbar-end">
                    @if (Auth::guest())
                        <a href="{{route('login')}}" class="navbar-item">Login</a>
                        <a href="{{route('register')}}" class="navbar-item">Join Community</a>
                    @else
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">Hey</a>
                            <div class="navbar-dropdown is-right">
                                <a href="" class="navbar-item"><span class="icon"><i class="fas fa-user"></i></span>  Profile</a>
                                <a href="" class="navbar-item">Notification</a>
                                <a href="" class="navbar-item">Settings</a>
                                <hr class="navbar-divider">
                                <a href="" class="navbar-item">Logout</a>
                            </div>                            
                        </div>
                    @endif
                </div>                
            </div>
       </nav>
    <section class="section">
            @yield('content')
    </section>
    </div>
    <script src="{{ asset('js/all.js') }}"></script
</body>
</html>
