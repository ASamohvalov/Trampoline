<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-border">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/about" class="nav-link">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a href="/catalog" class="nav-link">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a href="/conditions" class="nav-link">Условия аренды</a>
                    </li>
                    <li class="nav-item">
                        <a href="/findus" class="nav-link">Где нас найти?</a>
                    </li>
                </ul>
                <a href="#" class="navbar-brand header-logo">Trampoline</a>
                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Sign in</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Sign up</a>
                        </li>
                    @endguest

                    @auth
                        <li class="nav-item">
                            <a href="{{ Auth::user()->isAdmin() ? '/admin' : '/user' }}" class="nav-link">
                                {{ \Illuminate\Support\Facades\Auth::user()->login }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/logout" class="nav-link">logout</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</header>
