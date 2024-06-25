@extends('layouts.layout')

@section('title')
    <title>Оформление заявки</title>
    <link rel="stylesheet" href="{{ asset('assets/style/request.css') }}">
@endsection

@section('content')
    @include('components.header')

    <main>
        <div class="request_main-div bg-card ">
            <div class="text-center fs-3">Оформление заявки</div>
            <form action="" method="post" class="p-3">
                <div class="form-group mt-3 mb-3">
                    <label for="datepicker">Адрес доставки</label>
                    <input type="text" class="form-control" placeholder="город, улица, дом" id="address">
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="datepicker">Дата вашего рождения</label>
                    <input type="text" class="form-control" placeholder="dd.mm.yyyy" id="birthday">
                </div>
                <div class="text-center fs-5 mb-1">Паспорт</div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="серия" id="passport_series">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="номер" id="passport_id">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="дата выдачи" id="passport_issue_date">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="кем выдан" id="passport_issue_by">
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn bg-card-product mt-3 mb-4" id="sub_btn" disabled>Отправить заявку</button>
                </div>
            </form>
        </div>
    </main>

    <script src="{{ asset('assets/script/product/request.js') }}"></script>
@endsection
