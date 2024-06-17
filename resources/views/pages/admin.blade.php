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
                <div class="row pt-1" style="padding-left: 150px; padding-right: 150px;">
                    <div class="col text-center">
                        <button class="btn text-light" id="category">Category</button>
                    </div>
                    <div class="col text-center">
                        <button class="btn text-light" id="product">Product</button>
                    </div>
                </div>
            </div>

            <form action="{{ route('putCategory') }}" method="post" class="p-3 mt-4">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Добавить категорию</label>
                    <div class="row">
                        <div class="col-9">
                            <input type="text" class="form-control" id="add_name" placeholder="Название новой категории"
                                name="name">
                        </div>
                        <div class="col">
                            <button class="btn btn-light" type="submit">Добавить</button>
                        </div>
                    </div>
                    <span class="text-success fs-6">{{ session('add_success') }}</span>
                </div>
            </form>

            <form action="{{ route('removeCategory') }}" method="post" class="p-3 mb-4">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Удалить категорию</label>
                    <div class="row">
                        <div class="col-9">
                            <input type="text" class="form-control" id="remove_name" placeholder="Название категории" name="name">
                        </div>
                        <div class="col">
                            <button class="btn btn-light" type="submit">Удалить</button>
                        </div>
                    </div>
                    @error('name')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                    <span class="text-success fs-6">{{ session('remove_success') }}</span>
                </div>
            </form>
        </div>
    </main>
@endsection
