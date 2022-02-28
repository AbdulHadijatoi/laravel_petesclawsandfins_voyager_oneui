<div id="mainMenuContainer" class="main-menu-container full-height w0 fixed">
    <nav id="main-menu" role="navigation">
        <a href="{{URL('/')}}" class="full-width align-in-center">
            <img class="mb-10" src="{{asset('images/logo.png')}}" alt="profile photo" width="150">
        </a>
        <h2 class="font-size-20 font-weight-400 text-white text-center">Pete's Claws & Fins</h2>
        <p class="font-size-12 font-weight-300 text-white text-center mb-20">Ecological Seafood Production</p>
        <div class="full-width justify-center">
            <a href="#"><img class="social-icon" src="{{asset('svg/twitter-square.svg')}}" alt="twitter"></a>
            <a href="#"><img class="social-icon" src="{{asset('svg/facebook-square.svg')}}" alt="twitter"></a>
            <a href="#"><img class="social-icon" src="{{asset('svg/instagram-square.svg')}}" alt="twitter"></a>
            <a href="#"><img class="social-icon" src="{{asset('svg/pinterest-square.svg')}}" alt="twitter"></a>
        </div>
        <hr>
        <ul>
            
            @yield('main-menu-items')
            
            <!-- For authenticated user only -->
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log out</a></li>
                </form>
            @endauth
        </ul>
    </nav>
    <div class="menu-button-container z-index-5">
        <button id="menu-toggle">MENU</button>
    </div>
</div>