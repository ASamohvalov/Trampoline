@extends('layouts.layout')

@section('title')
    <title>Оформление заявки</title>
    <link rel="stylesheet" href="{{ asset('assets/style/request.css') }}">
@endsection

@section('content')
    @include('components.header')

    <style>
        .request_product-card {
            padding: 10px;
            margin: 5px;
            border: 1px solid rgb(105, 105, 105);
            border-radius: 10px;
        }

        .request_product-card:hover {
            background-color: #605f4b;
        }
    </style>

    <main>
        <div class="request_main-div bg-card" style="margin-top: 120px;">
            <div class="text-center fs-3">Оформление заявки</div>
            <form action="/product/placing/{{ $product->id }}/send" method="post" class="p-3">
                @csrf

                <div class="request_product-card row">
                    <div class="col-3">
                        <img src="{{ asset($product->image) }}" alt="product-image"
                            style="width: 100px; border-radius: 10px;" class="bg-card-product-img">
                    </div>
                    <div class="col">
                        <div class="fs-4">{{ $product->name }}</div>
                        <div class="fs-4">{{ $product->price }} руб/час</div>
                    </div>
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="datepicker">Дата проката батута</label>
                    <input type="date" id="rental_date" name="rental_date" class="form-control" required>
                </div>

                <span>Время начала и конца проката</span>
                <div class="row">
                    <div class="col">
                        <input type="time" id="start_time" name="start_time" class="form-control" required>
                    </div>
                    <div class="col">
                        <input type="time" id="end_time" name="end_time" class="form-control" required>
                    </div>
                </div>
                <span id="time-error-msg" class="text-danger"></span>

                <div class="form-group mt-3 mb-3">
                    <label for="datepicker">Адрес доставки</label>
                    <input type="text" class="form-control" placeholder="город, улица, дом" id="address"
                        name="address">
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="datepicker">Дата вашего рождения</label>
                    <input type="date" id="birthday" name="birthday" class="form-control" required>
                </div>
                <div class="text-center fs-5 mb-1">Паспорт</div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="серия" id="passport_series"
                            name="passport_series">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="номер" id="passport_id" name="passport_id">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="date" id="passport_issue_date" name="passport_issue_date" class="form-control"
                            required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="кем выдан" id="passport_issue_by"
                            name="passport_issue_by">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn bg-card-product mt-3 mb-4" id="sub_btn" disabled>Отправить
                        заявку</button>
                </div>
            </form>
        </div>
    </main>

    <script src="{{ asset('assets/script/product/request.js') }}"></script>
@endsection
