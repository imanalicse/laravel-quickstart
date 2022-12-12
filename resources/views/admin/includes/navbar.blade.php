<header class="top-header">
        <div class="header-wrapper">
            <div class="head-left">
                {{--<i class="fa fa-bars"></i>--}}
            </div>
            <div class="head-right">
                <div class="search">
                    {{--<i class="fa fa-search"></i>--}}
                </div>
                <div class="dropdown user-dropdown">
                    <img src="{{asset('src/admin/img/user.png')}}" alt="">
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        {{--<a class="dropdown-item" href="#">{{ Auth::user()->name }}</a>                        --}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Logout
                        </a>                        
                    </div>
                </div>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>

            </div>

        </div>
    </header>