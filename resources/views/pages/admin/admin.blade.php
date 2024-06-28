@extends('layouts.layout')

@section('title')
    <title>admin</title>
    <link rel="stylesheet" href="{{ asset('assets/style/admin.css') }}">
@endsection

@section('content')
    @include('components.header')

    <style>
        .category-list {
            height: 300px;
            background-color: #605f4b;
            padding: 10px;
            overflow: hidden;
            overflow-y: scroll;
            border-bottom-right-radius: 10px;
            border-left: 1px solid #f9f4ea;
        }

        .category-list_categ {
            width: 150px;
            margin-left: auto;
            margin-right: auto;
            background-color: #c47457;
            color: white;
            margin-bottom: 10px;
            text-align: center;
            border-radius: 5px;
        }

        ul {
            list-style: none;
        }
    </style>

    <main>
        <div class="admin_main-div" style="width:700px; margin-top: 200px; background-color: #9c9e80; color: #f9f4ea">
            <div class="admin_main-div_header" style="background-color: #605f4b; border-bottom: 1px solid #f9f4ea">
                <div class="row pt-1" style="padding-left: 140px; padding-right: 140px;">
                    <div class="col text-center">
                        <button class="btn text-dark" id="category-btn">Категории</button>
                    </div>
                    <div class="col text-center">
                        <a href="{{ route('ordersPage') }}" class="btn text-light" id="">Заказы</a>
                    </div>
                    <div class="col text-center">
                        <button class="btn text-light" id="product-btn">Продукты</button>
                    </div>
                </div>
            </div>

            <div id="category">
                <div class="row">
                    <div class="col-8">
                        @include('components.admin.category')
                    </div>
                    <div class="col">
                        <div class="category-list">
                            @foreach ($categories as $category)
                                <div class="category-list_categ">
                                    {{ $category->name }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div id="product" style="display: none;">
                @include('components.admin.product')
            </div>

        </div>
    </main>

    <script src="{{ asset('assets/script/admin/category.js') }}"></script>
    <script src="{{ asset('assets/script/admin/view.js') }}"></script>
@endsection
