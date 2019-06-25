
        <nav id="main-nav">
            <h1>

                <a >ETC</a>

            </h1>
            <ul  >
             <!--     <li><a href="/ispi/public/">home</a></li>
              <li><a href="/ispi/public/centers">centers</a></li>    -->
                <li><a href="/ispi/public/course">courses</a></li>
                <li><a href="/ispi/public/diploma">diplama</a></li>
                <li><a href="/ispi/public/certification">certification</a></li>
                
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/home">home</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
    </nav>
