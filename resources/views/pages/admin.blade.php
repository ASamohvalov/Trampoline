@extends('layouts.layout')

@section('title')
    <title>admin</title>
    <link rel="stylesheet" href="{{ asset('assets/style/admin.css') }}">
@endsection

@section('content')
    @include('components.header')

    <main>
        <div class="admin_main-div">
            <div class="admin_main-div_header">
                <div class="row pt-1" style="padding-left: 140px; padding-right: 140px;">
                    <div class="col text-center">
                        <button class="btn text-dark" id="category-btn">Category</button>
                    </div>
                    <div class="col text-center">
                        <button class="btn text-light" id="product-btn">Product</button>
                    </div>
                </div>
            </div>

            <div id="category">
                @include('components.admin.category')
            </div>

            <div id="product" style="display: none">
                @include('components.admin.product')
            </div>

        </div>
    </main>

    <script src="{{ asset('assets/script/admin/category.js') }}"></script>
    <script src="{{ asset('assets/script/admin/view.js') }}"></script>
@endsection
