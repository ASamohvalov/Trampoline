@extends('layouts.layout')

@section('title')
    <title>{{ $product->name }}</title>
    <link rel="stylesheet" href="{{ asset('assets/style/product.css') }}">
@endsection

@section('content')
    @include('components.header')

    <style>
        body {
            color: #f9f4ea;
        }
    </style>

    <main>
        <div class="container" style="margin-top: 70px;">
            <div class="product_main-container_div" style="background-color: #9c9e80;">
                <div class="row">
                    <div class="product_image col">
                        <div class="product_image_img" style="background-color: rgb(255, 255, 255); margin-bottom: 20px;">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" style="background-color: #f9f4ea; border-radius: 10px;" src="{{ $product->image }}" alt="Первый слайд">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="" alt="Второй слайд">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="" alt="Третий слайд">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <span class="product_image_price fs-2">{{ $product->price }} руб/час</span>
                    </div>
                    <div class="product_description col">
                        <div class="product_description_name fs-1 text-center">{{ $product->name }}</div>
                        <div class="product_description_category fs-4 text-center" style="color: #f9f4ea">Категория
                            - {{ $product->category->name }}</div>
                        <div class="product_description_description fs-5">
                            <p>
                                <strong>Описание:</strong><br>
                                {{ $product->description }}
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-4">
                            Размер батута /д-ш-в/: {{ $product->size }} метра <br>
                            Потребляемая мощность: {{ $product->power_consumption }} <br>
                            вместимость: {{ $product->capacity }} <br>
                            время монтажа: {{ $product->installation_time }}
                        </div>
                        <div class="col product_to-basket mt-5 text-center">
                            <a href="" class="btn btn-light btn-lg product_to-basket_btn" style="background-color: #f9f4ea">В корзину</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
