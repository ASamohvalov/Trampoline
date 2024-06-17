@extends('layouts.layout')

@section('title')
    <title>Каталог</title>
    <link rel="stylesheet" href="{{ asset('assets/style/catalog.css') }}">
@endsection

@section('content')
    @include('components.header')

    <main>
        <div class="container">
            <div class="catalog_main-container_div">
                <div class="catalog_products">
                    @foreach ($products as $product)
                        <a href="product.html" class="catalog_product">
                            <img src="" alt="" class="catalog_product_img">
                            <div class="mx-3 mb-4 text-dark">
                                <div class="catalog_product_name fs-5">{{ $product->name }}</div>
                                <div class="catalog_product_name">{{ $product->category }}</div>
                                <div class="catalog_product_name">{{ $product->price }} руб/час</div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
