<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!-- Scripts -->

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                
                                @if (Route::has('departments.create'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('departments.create') }}">{{ __('Departments') }}</a>
                                    </li>
                                @endif

                                
                                @if (Route::has('cities.create'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('cities.create') }}">{{ __('Cities') }}</a>
                                    </li>
                                @endif


                                @if (Route::has('clients.create'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('clients.create') }}">{{ __('Clients') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('employees.create'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('employees.create') }}">{{ __('Employees') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('providers.create'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('providers.create') }}">{{ __('Providers') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('categories.create'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('categories.create') }}">{{ __('Categories') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('products.create'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('products.create') }}">{{ __('Products') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('products.create'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('bills.create') }}">{{ __('Bill') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('products.create'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('invoiceDetails.create') }}">{{ __('InvoiceDetails') }}</a>
                                    </li>
                                @endif


                                @if (Route::has('login'))
                                    <li class="nav-item"  style="padding-left: 60px;">
                                        <a class="nav-link" href="{{ route('login') }}">{{__('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register-user'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register-user') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif

                            @else
                                <li class="nav-item dropdown"...>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>
