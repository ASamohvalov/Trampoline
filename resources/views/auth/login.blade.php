@extends('layouts.layout')

@section('title')
    <title>Авторизация</title>
    <link rel="stylesheet" href="{{ asset('assets/style/auth.css') }}">
@endsection


@section('content')
    @include('components.header')

    <style>
        .main-div-form {
            margin-left: auto;
            margin-right: auto;
            background-color: #9c9e80;
            height: auto;
            width: 500px;
            border-radius: 10px;
            border: 1px solid #969696;
            box-shadow: 0 0 5px rgb(124, 124, 124);
            margin-top: 40px;
            color: #f9f4ea;
        }

        .login_pop-up_window {
            margin-left: auto;
            margin-right: auto;
            width: 500px;
            background-color: #5d9976;
            position: relative;
            top: 20px;
        }

        .color-success-msg {
            background-color: #b68036;
            color: #f9f4ea;
        }
    </style>

    <main style="margin-top: 200px;">
        @if (session('success'))
            <div class="alert alert-dismissible fade show login_pop-up_window color-success-msg" role="alert">
                {{ session('success') }}
                <button type="button" class="btn close login_close-btn">
                    <span aria-hidden="true" class="fs-2 login_close-span">&times;</span>
                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-dismissible fade show login_pop-up_window" role="alert"
                style="background-color: #c47457; color: #f9f4ea">
                {{ $errors->first('error') }}
                <button type="button" class="btn close login_close-btn">
                    <span aria-hidden="true" class="fs-2 login_close-span">&times;</span>
                </button>
            </div>
        @endif

        <div class="main-div-form">
            <div class="text-center fs-3">Авторизация</div>
            <form action="{{ route('authorization') }}" method="post" class="p-4">
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
