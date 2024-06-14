@extends('layouts.header.header')

@section('title')
    <title>Авторизация</title>
    <link rel="stylesheet" href="{{ asset('assets/style/auth.css') }}">
@endsection

@section('content')
    <main>
        <div class="alert alert-dismissible fade show login_pop-up_window" role="alert">
            <div class="row">
                <div class="col-11">
                    Пользователь успешно зарегестрирован
                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-sm close login_close-btn">
                        <span aria-hidden="true" class="login_close-span">
                            <img src="" alt="">
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="main-div-form" style="margin-top: 150px;">
            <div class="text-center fs-3">Авторизация</div>
            <form action="" method="post" class="p-4">
                @csrf

                <div class="mb-3">
                    <label for="login" class="form-label">Логин</label>
                    <input type="text" class="form-control" id="login">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="text-center mt-5 mb-1">
                    <button type="submit" class="btn btn-light" style="width: 120px;">Войти</button>
                </div>
            </form>
        </div>
    </main>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        document.querySelector('.close').addEventListener('click', function() {
            this.parentNode.classList.remove('show');
        });
    </script>
@endsection
