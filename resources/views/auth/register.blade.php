@extends('layouts.header.header')

@section('title')
    <title>Регистрация</title>
    <link rel="stylesheet" href="{{ asset('assets/style/auth.css') }}">
@endsection

@section('content')
    <main>
        <div class="main-div-form">
            <div class="text-center fs-3">Регистрация</div>
            <form action="{{ route('registration') }}" method="post" class="p-4">
                @csrf

                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="имя" id="name"
                            onchange="activateButton()" oninput="validateName(event)">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="фамилия" id="surname"
                            onchange="activateButton()" oninput="validateName(event)">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="отчество" id="patronymic"
                            oninput="validateName(event)">
                    </div>
                    <div class="col">
                        <input type="text" id="phone" class="form-control" placeholder="телефон"
                            oninput="this.value = this.value.replace(/[^0-9+ -]/g, '')" onchange="activateButton()">
                    </div>
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Почта</label>
                    <input type="email" class="form-control" id="email" onchange="activateButton()">
                </div>
                <div class="mb-2">
                    <label for="login" class="form-label">Логин</label>
                    <input type="text" class="form-control" id="login" onchange="activateButton()">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="password" onchange="activateButton()">
                </div>
                <div class="mb-2">
                    <label for="password_repeat" class="form-label">Повторите пароль</label>
                    <input type="password" class="form-control" id="password_repeat" onchange="activateButton()">
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" id="checkbox" onchange="activateButton()">
                    <label class="form-check-label" for="checkbox">
                        Согласие на обработку данных
                    </label>
                </div>
                <div class="text-center mt-4 mb-2">
                    <button type="submit" class="btn btn-light disabled" id="submit-btn">Отправить</button>
                </div>
            </form>
        </div>
    </main>

    <script src="{{ asset('assets/script/auth/register.js') }}"></script>
@endsection
