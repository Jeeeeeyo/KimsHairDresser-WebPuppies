 

<nav class="navbar navbar-light navbar-expand-md navigation-clean">
    <div class="container"><a class="navbar-brand" href="{{ route('welcome') }}" style="font-family: Cabin, sans-serif;">UR HD</a>
        <button data-toggle="collapse" class="navbar-toggler"
            data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">

            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
 
                @Auth
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Dashboard</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Forms</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Services</a></li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown"
                        aria-expanded="false" href="#"> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} </a>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation"
                            href="#">Profile</a>
                        <a class="dropdown-item" role="presentation" href="#">Second Item</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            <a class="dropdown-item" href="{{ route('user.logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            @csrf
                        </form>
 
                    </div>

                </li>

                @endAuth
            </ul>
        </div>
    </div>
</div>
</nav> 