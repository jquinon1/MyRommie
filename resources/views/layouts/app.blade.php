<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

    <title>@yield('title','Default')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('My Roomie', 'MyRoomie') }}</title>-->

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/magnificPopup/dist/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/rate/jquery.rateyo.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/awesomplete/awesomplete.css')}}">



    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style>
    
        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
            background-color: #111;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        body {
            background-color: whitesmoke;
            background-size: cover;

        }

    </style>
</head>
<body>
{{-- {{dd($universidades)}} --}}
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('My Rommie', 'MyRoomie') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        {!! Form::open(['route'=>'habitaciones.index','method'=>'GET', 'class'=>'navbar-form navbar-left']) !!}
                        <div class="form-group">
                        {!! Form::text('universidad',null,['class'=>'form-control awesomplete','placeholder'=>'Cerca de..','list'=>'universidades']) !!}
                        </div>
                        {!! Form::submit('SEARCH',['class'=>'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </ul>
                    {{-- lista de universidades para asignar a awesomplete--}}
                    <datalist id="universidades">
                        @foreach($universidades as $universidad)
                        <option>{{$universidad->nombre}}</option>
                        @endforeach
                    </datalist>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->

                        <li><a href="contacto">Contactanos</a></li>
                        <li><a href="acerca">Acerca de</a></li>
                        <li><a href="../map">Mapa</a></li>

                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ route('users.create') }}">Register</a></li>
                        @else
                            <li class<li><a href="{{url('/home')}}">{{ Auth::user()->nombre }}</a></li>
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                Logout
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @include('flash::message')
        @if(count($errors) > 0)
            <div class="alert alert-danger" role="alert">
                <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }} </li><br>
                @endforeach
                </ul>
            </div>
        @endif
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('plugins/jquery/jquery.js')}}"></script>
    <script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>
    <script src="{{asset('plugins/magnificPopup/dist/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('plugins/rate/jquery.rateyo.js')}}"></script>
    <script src="{{asset('plugins/awesomplete/awesomplete.js')}}"></script>



    @yield('js')
</body>
</html>
