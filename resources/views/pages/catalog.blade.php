@extends('layouts.layout')

@section('title')
    <title>Каталог</title>
    <link rel="stylesheet" href="{{ asset('assets/style/catalog.css') }}">
@endsection

@section('content')
    @include('components.header')

    <style>
        .catalog_main-container-filter-header {
            height: 70px;
            border-bottom: 1px solid #f9f4ea;
        }

        .header-icon {
            display: inline-table;
            height: 40px;
            margin-left: 10px;
            margin-right: 80px;
        }

        .filter-input {
            display: inline-table;
            width: 300px;
            margin-top: 15px;
            margin-left: 20px;
        }
    </style>

    <main>
        <div class="container" style="margin-top: 100px;">
            <div class="catalog_main-container_div bg-card">
                <div class="catalog_main-container-filter-header">
                    <img class="header-icon" src="https://img.icons8.com/?size=50&id=3004&format=png">
                    <input type="text" class="form-control filter-input" placeholder="Название товара" id="name_filter">
                    <select class="form-select filter-input">
                        <option>Все категории</option>
                        @foreach ($categories as $category)
                            <option>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="catalog_products">
                    @foreach ($products as $product)
                        <a href="/product/{{ $product->id }}" class="catalog_product bg-card-product">
                            <img src="{{ asset($product->image) }}" class="catalog_product_img bg-card-product-img">
                            <div class="mx-3 mb-4 text-dark info-list">
                                <div class="catalog_product_name product-name fs-5">{{ $product->name }}</div>
                                <div class="catalog_product_name">{{ $product->category->name }}</div>
                                <div class="catalog_product_name">{{ $product->price }} руб/час</div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('assets/script/product/filtration.js') }}"></script>
@endsection
