<header id="header-part">

    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-8">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="{{ is_active('/') }}" href="{{ url('/') }}">@lang('Inicio')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ is_active('aboutUs.*') }}"
                                        href="{{ route('aboutUs.index') }}">@lang('Nosotros')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ is_active('Courses.*') }}  {{ is_active('Categories.*') }}"
                                        href="{{ route('Courses.index') }}">@lang('Cursos')</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ is_active('contactUs.*') }}"
                                        href="{{ route('contactUs.index') }}">@lang('Contacto')</a>
                                </li>
                            </ul>
                        </div>
                    </nav> <!-- nav -->
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-4">
                    <div class="right-icon text-right">
                        <ul>
                            <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                            @auth
                                <li><a href="{{ route('home') }}"><i class="fa fa-user"></i>
                                        @lang('Cuenta')</a></li>
                            @endauth
                            @guest
                                <li><a href="#" data-toggle="modal" data-target="#globalloginModal"><i
                                            class="fa fa-signin"></i>
                                        @lang('Iniciar sesión')</a></li>
                            @endguest
                        </ul>
                    </div> <!-- right icon -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

</header>

@livewire('global-login')
