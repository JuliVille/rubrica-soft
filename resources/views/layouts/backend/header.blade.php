<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left">
                <button class="search-trigger"><i class="fa fa-search"></i></button>
                <div class="form-inline">
                    <form class="search-form">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                        <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                    </form>
                </div>
                <a href="{{ url('/') }}" target="__blank">@lang('Inicio')</a>
            </div>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{ Auth::user()->avatar }}" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="{{ Auth::user()->link() }}"><i class="fa fa-user"></i>
                        @lang(' Mi perfil')</a>

                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                        <i class="nav-icon fa fa-power-off red"></i>
                        @lang(' Cerrar sesión')
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>

        </div>
    </div>

</header><!-- /header -->
