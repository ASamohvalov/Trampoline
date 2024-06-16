@extends('layouts.layout')

@section('title')
    <title>Где нас найти</title>
    <link rel="stylesheet" href="{{ asset('assets/style/findus.css') }}">
@endsection

@section('content')
    @include('components.header')

    <main>
        <div class="container">
            <div class="findus_title">Где нас найти?</div>
            <div class="row mt-4">
                <div class="col findus_text">
                    адрес: Россия, Москва, Автозаводская 5 <br>
                    телефон: +7-918-845-45-45 <br>
                    email: info@tramp.ru <br>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/images/view/map.png') }}" alt="map" class="findus_image-map">
                </div>
            </div>
        </div>
    </main>
@endsection
