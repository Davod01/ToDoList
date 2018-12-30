<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <!--  stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/pretty-checkbox.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/all.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}" />
    <!--  stylesheet -->

    @yield('meta')
    <!-- javascript file -->
    <script src="{{asset('js/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/all.js')}}"></script>
    <!-- javascript file -->

</head>
<body>

<!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="#">Todo App</a>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
                {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="" id="Logout" 
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </div>
            </li>
        </ul>
  </div>
</nav>

<!-- end navbar -->

<!-- header -->

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="float-left">
                    <h1 class="header-title">Todo List</h1>
                </div>

                <div class="float-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#TodoList-Modal">
                Create new Task
                </button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- end header -->

@yield('content')




<!-- javascript file -->
<script src="{{asset('js/custom.js')}}"></script>
<!-- javascript file -->
@yield('script')
</body>
</html>