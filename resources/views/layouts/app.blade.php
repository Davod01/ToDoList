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
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}" />
    <!--  stylesheet -->

    @yield('meta')
    <!-- javascript file -->
    <script src="{{asset('js/jquery-3.2.1.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- javascript file -->

</head>
<body>
    <!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="#">Todo App</a>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">sign in</a>
        </li>
    </ul>
  </div>
</nav>

<!-- end navbar -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
