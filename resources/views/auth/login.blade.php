@extends('layouts.layout')

@section('title')
    <title>Авторизация</title>
    <link rel="stylesheet" href="{{ asset('assets/style/auth.css') }}">
@endsection


@section('content')
    @include('components.header')

    <main>
        @if (session('success'))
            <div class="alert alert-dismissible fade show login_pop-up_window" role="alert"
                style="background-color: #5d9976;">
                {{ session('success') }}
                <button type="button" class="btn close login_close-btn">
                    <span aria-hidden="true" class="fs-2 login_close-span">&times;</span>
                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-dismissible fade show login_pop-up_window" role="alert"
                style="background-color: #99645d;">
                {{ $errors->first('error') }}
                <button type="button" class="btn close login_close-btn">
                    <span aria-hidden="true" class="fs-2 login_close-span">&times;</span>
                </button>
            </div>
        @endif

        <div class="main-div-form" style="margin-top: 150px;">
            <div class="text-center fs-3">Авторизация</div>
            <form action="" method="post" class="p-4">
                @csrf

                <div class="mb-3">
                    <label for="login" class="form-label">Логин</label>
                    <input type="text" class="form-control" id="login" onchange="activateButton()" name="login">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="password" onchange="activateButton()" name="password">
                </div>
                <div class="text-center mt-5 mb-1">
                    <button type="submit" class="btn btn-light disabled" style="width: 120px;"
                        id="submit-btn">Войти</button>
                </div>
            </form>
        </div>
    </main>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/script/auth/login.js') }}"></script>
@endsection
