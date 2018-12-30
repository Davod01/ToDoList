<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!--  stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{url('bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/pretty-checkbox.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/all.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('css/custom.css')}}" />
    <!--  stylesheet -->

    @yield('meta')
    <!-- javascript file -->
    <script src="{{url('js/jquery-3.2.1.js')}}"></script>
    <script src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/all.js')}}"></script>
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
                Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Logout</a>
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
<script src="{{url('js/custom.js')}}"></script>
<!-- javascript file -->
@yield('script')
</body>
</html>