<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('assets/img/c3ico.png')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("titulo")</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.1/dist/sweetalert2.min.css"> --}}
    <link id="pagestyle" href="{{ asset('assets/css/datatables.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/tabler-ui.css') }}" rel="stylesheet">
    <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/tickets') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="{{ asset('assets/img/C3logo.png') }}" class="navbar-brand-image">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/tickets')}}">Tareas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#filtroModal">Reporte</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nombre . ' - ' . Auth::user()->clave}}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar Sesión
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <div class="modal fade" id="filtroModal" tabindex="-1" role="dialog" aria-labelledby="filtroModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="filtroModalLabel">Rangos de Fecha</h5>

                    </div>
                    <div class="modal-body">
                        <form action = "{{ route('reporte') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Fecha Inicio</label>
                                    <input type="date" class="form-control" id="fecha_ini" name="fecha_ini" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Fecha Fin</label>
                                    <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Reporte PDF</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
     <!-- Scripts -->
     <script src="{{ asset('js/jquery.js') }}"></script>
     <script src="{{ asset('js/app.js') }}" defer></script>
     {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.1/dist/sweetalert2.all.min.js"></script> --}}

     <script src="{{ asset('js/datatables.js') }}"></script>
     <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
     <script src="{{ asset('js/sweetalert.js') }}"></script>
    @stack('scripts')
</body>
</html>
