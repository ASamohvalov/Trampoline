@extends('layouts.layout')

@section('title')
    <title>Заказы</title>
    <link rel="stylesheet" href="{{ asset('assets/style/orders.css') }}">
@endsection

@section('content')
    @include('components.header')

    <style>
        .orders_main-overflow {
            height: 450px;
            overflow: hidden;
            overflow-y: scroll;
        }
    </style>

    <main>
        <div class="orders_main-div bg-card">
            <div class="orders_header-link">
                <a href="{{ route('adminPage') }}" class="mx-1 order_header-link-a">Вернуться обратно</a>
            </div>
            <div class="orders_main-overflow">
                <div class="orders_list-div">
                    @foreach ($orders as $order)
                        <a href="{{ route('orderPage', $order->id) }}">
                            <div class="orders_list-div_order">
                                <div class="row mt-2">
                                    <img src="{{ asset($order->product->image) }}" alt="product_image" class="col-3">
                                    <ul class="col">
                                        <li class="fs-5">{{ $order->user->name }} {{ $order->user->surname }}
                                            {{ $order->user->patronymic }}</li>
                                        <li>статус заказа: '{{ $order->status }}'</li>
                                        <li>итоговая сумма: {{ $order->price }} рублей</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
