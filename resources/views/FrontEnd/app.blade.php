<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="author" content="Innovation Scope" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') | Ocean Tec</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('FrontEnd/css/styles.css') }}?v=0.0001" rel="stylesheet">
        @yield('stylesheets')
    </head>

    <body>
        <div class="preloader"></div>
        <div id="main-wrapper">
            <div class="header header-light dark-text">
                <div class="container">
                    <nav id="navigation" class="navigation navigation-landscape">
                        <div class="nav-header">
                            <a class="nav-brand" href="{{ route('home')}}">
                                <img src="{{ asset('FrontEnd/img/logo.png') }}" class="logo edited" alt="OceanTec" />
                            </a>
                            <div class="nav-toggle"></div>
                        </div>
                        <div class="nav-menus-wrapper" style="transition-property: none;">
                            <ul class="nav-menu">
                                <li @if(Route::current()->getName() == 'home') active @endif><a href="{{ Route('home') }}">الرئيسية</a></li>
                                @foreach($menuCategories as $menuCategory)
                                <li class="lvl1 @if($menuCategories->Count() > 0)  @endif">
                                    <a href="{{ Route('products', $menuCategory->slug) }}">{{ $menuCategory->title }} </a>
                                </li>
                                @endforeach
                            </ul>

                            <ul class="nav-menu nav-menu-social align-to-right">
                                @if(Auth::User() && Auth::User()->role == 'Admin' )
                                <li><a href="{{ route('dashboard') }}" target="_blank">لوحة التحكم</a></li>
                                @endif
                                @if(Auth::user())
                                <li><a href="{{ Route('edit-account') }}">حسابي</a></li>
                                @else
                                <li><a href="{{ route('login') }}" data-target="#login">تسجيل الدخول</a></li>
                                @endif
                        </div>
                    </nav>
                </div>
            </div>
            <div class="clearfix"></div>
            @yield('content')
        </div>
        @yield('productShow')
      
        <script src="{{ asset('FrontEnd/js/jquery.min.js') }}"></script>
        <script src="{{ asset('FrontEnd/js/popper.min.js') }}"></script>
        <script src="{{ asset('FrontEnd/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('FrontEnd/js/ion.rangeSlider.min.js') }}"></script>
        <script src="{{ asset('FrontEnd/js/slick.js') }}"></script>
        <script src="{{ asset('FrontEnd/js/slider-bg.js') }}"></script>
        <script src="{{ asset('FrontEnd/js/lightbox.js') }}"></script>
        <script src="{{ asset('FrontEnd/js/smoothproducts.js') }}"></script>
        <script src="{{ asset('FrontEnd/js/snackbar.min.js') }}"></script>
        <script src="{{ asset('FrontEnd/js/jQuery.style.switcher.js') }}"></script>
        <script src="{{ asset('FrontEnd/js/custom.js') }}"></script>

       
        @yield('javascripts')
    </body>
</html>