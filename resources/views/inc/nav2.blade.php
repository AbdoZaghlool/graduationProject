

<nav id="main-nav-company" style="height: 73px">
        <h1><a href="index.html">ETC</a></h1>
        <ul style="margin-left: 10rem">
            <li><a href="/ispi/public/centers/profile">View Profile</a></li>
            <li><a href="">Contact Us</a></li>
            <li><a href="">Report Problem</a></li>

        </ul>
             <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (auth()->guard('institute')->guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>

                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ auth()->guard('institute')->user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('institute.logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        <a href=""><i class="far fa-question-circle"></i> Reply Recieved Questions</a>
</nav>
