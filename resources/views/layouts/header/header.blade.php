<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-border">
                <div class="container-fluid">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Каталог</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Условия аренды</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Где нас найти?</a>
                        </li>
                    </ul>
                    <a href="#" class="navbar-brand header-logo">Trampoline</a>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Sign in</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Sign up</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    @yield('content')
</body>

</html>
