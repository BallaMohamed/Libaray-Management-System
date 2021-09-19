<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="{{asset('forntend/css/fontawesome/all.min.css')}}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @if(config('app.locale') == 'ar')
      <link rel="stylesheet" type="text/css" href="{{asset('forntend/css/bootstrap-rtl.css')}}">
    @endif
    @yield('style')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ __('forntend/forntend.lms') }}<i class="fa fa-book"></i>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto homeNav">
                        <!-- Authentication Links -->
                                <li class="nav-item px-2" >
                                   <a href="/home">{{ __('forntend/forntend.home') }}</a>
                       
                                </li>
                                <li class="nav-item px-2">
                                    <a href="/books">{{ __('forntend/forntend.books') }}</a>
                                </li>

                                <li class="nav-item px-2">
                                    <a href="/students">{{ __('forntend/forntend.students') }}</a>
                                </li>
                                <li class="nav-item px-2">
                                    <a href="/metaphors">{{ __('forntend/forntend.metaphor') }}</a>
                                </li>  
                                <li>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          {{ __('forntend/forntend.change_lang') }}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                          <a class="dropdown-item" href="{{route('frontend_change_locale' , 'ar')}}">{{ __('forntend/forntend.arabic') }}</a>
                                          <a class="dropdown-item" href="{{route('frontend_change_locale' , 'en')}}">{{ __('forntend/forntend.english') }}</a>
                                         
                                        </div>
                                      </div>
                                </li>                       
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
     <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('forntend/js/fontawesome/all.min.js') }}"></script>
    <script src="js/bootstrap.min.js"></script>
     @yield('script')
</body>
</html>
