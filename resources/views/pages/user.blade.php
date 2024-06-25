@extends('layouts.layout')

@section('title')
    <title>{{ Auth::user()->name }}</title>
    <link rel="stylesheet" href="{{ asset('assets/style/user.css') }}">
@endsection

@section('content')
    @include('components.header')

    <style>
        .user_info-div {
            margin-left: auto;
            margin-right: auto;
            width: 700px;
            background-color: #605f4b;
            border: 1px solid rgb(61, 61, 61);
            border-radius: 10px;
        }
    </style>

    <main>
        <div class="container">
            <div class="user_div-main-content bg-card">
                <div class="user_info-div">
                    <ul>
                        <li class="fs-1">{{ Auth::user()->name }} {{ Auth::user()->surname }}
                            {{ Auth::user()->patronymic }}
                        </li>
                        <li class="fs-5">{{ Auth::user()->login }}</li>
                        <li class="fs-5">{{ Auth::user()->email }}</li>
                        <li class="fs-5">{{ Auth::user()->phone }}</li>
                        <li>
                            <button class="btn btn-sm bg-card-product mt-2">Изменить</button>
                        </li>
                    </ul>
                </div>
                <div class="user_main-div_applications">
                    <ul>
                        <li>
                            
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </main>
@endsection
