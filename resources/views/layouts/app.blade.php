<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NSW') }}</title>

    <script src="{{asset('src/frontend/js/vendor/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('src/frontend/js/vendor/jquery-validation/jquery.validate.js')}}"></script>
    <script src="{{asset('src/frontend/js/vendor/jquery-validation/additional-methods.min.js')}}"></script>
    <script src="{{asset('src/frontend/js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('src/frontend/css/normalize.css?v='.script_version)}}">
    <link rel="stylesheet" href="{{asset('src/frontend/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('src/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('src/frontend/css/main.css?v='.script_version)}}">
    <script src="{{asset('src/frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>

</head>
<body>
    <div id="app">
        <header>
            <div class="logo">
                <a href="https://www.records.nsw.gov.au">
                    <img src="{{asset('src/frontend/img/nsw-logo.png')}}" alt="">
                </a>
            </div>
            <div class="title-bar">
                <h1>Catalogue</h1>
            </div>
            <?php /* ?>
            @if(Auth::check())

                <a href="#">Hello {{ Auth::user()->name }}</a> &nbsp;&nbsp;

                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>

            @endif

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            <?php */ ?>

        </header>
        <div class="container">
            @yield('content')
        </div>

        <div class="common-footer">
            <p class="develop-buy"> Web Development by <a href="https://www.webalive.com.au" target="_blank">WebAlive</a></p>
        </div>

    </div>
    {{-- <script src="{{ asset('js/app.js?v=1') }}" defer></script> --}}
    {{-- <script src="{{asset('src/frontend/js/vendor/jquery-1.11.3.min.js')}}"></script> --}}
    {{-- <script src="{{asset('src/frontend/js/bootstrap.min.js')}}"></script> --}}
    <script src="{{asset('src/frontend/js/custom.js?v='.script_version)}}"></script>

</body>
</html>
