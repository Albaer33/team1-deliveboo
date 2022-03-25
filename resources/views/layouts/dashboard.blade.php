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
{{--     <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Delius+Swash+Caps&family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="app-wrapper">
        <nav class="navbar navbar_ms navbar-expand-md primary_color flex-md-nowrap p-0 d-flex justify-content-between">
            <div class="navbar-brand col-sm-3 col-md-2 mr-0" ><a href="http://127.0.0.1:8000">Deliveboo</a></div>
            <ul class="navbar-nav px-3 ml-auto">
                <li class="nav-item dashboard">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <div class="container-fluid">
            <div class="row height_ms">
                <nav class="col-sm-1 col-md-2 d-none d-md-block sidebar py-4 dashboard_ms">
                    <div class="sidebar-sticky">
                        
                        <ul class="nav flex-column">
                            <li class="nav-item dashboard">
                                <a class="nav-link d-flex align-items-center active btn-ms" href="{{ route('admin.home') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="#00CCBC" d="M16.869,0l-1.123,10.578L13.832,1.66L7.793,2.918l1.896,8.918L1,13.66l1.546,7.112L17.845,24l3.498-7.751L23,0.638L16.869,0z M11.5,15.5c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1s1,0.448,1,1C12.5,15.052,12.052,15.5,11.5,15.5z M15.5,17.5c-0.552,0-1-0.448-1-1c0-0.552,0.448-1,1-1s1,0.448,1,1C16.5,17.052,16.052,17.5,15.5,17.5z"/></svg>
                                    Deliveboo
                                </a>
                            </li>
                            
                            @if (!isset($user->createdRestaurants))
    
                                <li class="nav-item dashboard">
                                    <a class="nav-link d-flex align-items-center active btn-ms" href="{{ route('admin.restaurants.create') }}">
                                        <i class="fas fa-plus"></i>
                                        Aggiungi il tuo ristorante
                                    </a>
                                </li>
    
                            @else
    
                                <li class="nav-item dashboard">
                                    <a class="d-flex align-items-center nav-link active btn-ms" href="{{ route('admin.restaurants.index') }}">
                                        <i class="fas fa-utensils"></i>
                                        Dettagli ristorante
                                    </a>
                                </li>
    
                                <li class="nav-item dashboard">
                                    <a class="nav-link d-flex align-items-center active btn-ms" href="{{ route('admin.dishes.create') }}">
                                        <i class="fas fa-hamburger"></i>
                                        Aggiungi un piatto
                                    </a>
                                </li>
                                
                                <li class="nav-item dashboard">
                                    <a class="nav-link d-flex align-items-center active btn-ms" href="{{ route('admin.dishes.index') }}">
                                        <i class="far fa-eye"></i>
                                        Visualizza tutti i piatti
                                    </a>
                                </li>
    
                                <li class="nav-item dashboard">
                                    <a class="nav-link d-flex align-items-center active btn-ms" href="{{ route('admin.orders.index') }}">
                                        <i class="fas fa-money-bill"></i>
                                        Storico ordini
                                    </a>
                                </li>
                                
                            @endif
    
                        </ul>
    
                    </div>
                </nav>
    
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 py-4 overflow_ms height_ms">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>