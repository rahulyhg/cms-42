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
            <a href="" class="navbar-item m-l-40">Learn</a>
            <a href="" class="navbar-item">Share</a>
            <a href="" class="navbar-item">Discuss</a>
        </div>
        <div class="navbar-end">
            @if (Auth::guest())
                <a href="{{route('login')}}" class="navbar-item">Login</a>
                <a href="{{route('register')}}" class="navbar-item">Join Community</a>
            @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Hey {{Auth::user()->name}}</a>
                    <div class="navbar-dropdown is-right">
                        <a href="" class="navbar-item"><i class="fas fa-user m-r-5"></i>Profile</a>
                        <a href="" class="navbar-item"><i class="fas fa-bell m-r-5"></i>Notification</a>
                        <a href="" class="navbar-item"><i class="fas fa-cog m-r-5"></i>Settings</a>
                        <hr class="navbar-divider">
                        <a href="" class="navbar-item"><i class="fas fa-sign-out-alt m-r-5"></i>Logout</a>
                    </div>                            
                </div>
            @endif
        </div>                
    </div>
</nav>