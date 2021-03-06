<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{route('landing-page')}}">Home</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link " href="{{route('shop.index')}}">
            Shop
        </a>
        
    </li>

    @guest
    <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('login') }}">
            Sign In
        </a>
        
    </li>
    
    <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('register') }}">
            Sign Up
        </a>
        
    </li>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
    
    
</ul>

