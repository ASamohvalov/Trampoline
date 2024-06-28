@extends('layouts.layout')

@section('title')
    <title>{{ Auth::user()->name }}</title>
    <link rel="stylesheet" href="{{ asset('assets/style/user.css') }}">
@endsection

@section('content')
    @include('components.header')

    <style>
        .user_info-div {
            margin-left: auto;
            margin-right: auto;
            width: 700px;
            background-color: #605f4b;
            border: 1px solid rgb(61, 61, 61);
            border-radius: 10px;
        }

        .order-li {
            border: 1px solid rgb(75, 75, 75);
            border-radius: 10px;
            margin-bottom: 15px;
        }

        li {
            color: #f9f4ea;
        }
    </style>

    <main>
        <div class="container">
            <div class="user_div-main-content bg-card" style="height: auto">
                <div class="user_info-div">
                    <ul>
                        <li class="fs-1">{{ Auth::user()->name }} {{ Auth::user()->surname }}
                            {{ Auth::user()->patronymic }}
                        </li>
                        <li class="fs-5">{{ Auth::user()->login }}</li>
                        <li class="fs-5">{{ Auth::user()->email }}</li>
                        <li class="fs-5">{{ Auth::user()->phone }}</li>
                    </ul>
                </div>
                <div class="user_main-div_applications">
                    <div class="text-center fs-2 mt-5 mb-3">Заказы</div>
                    <ul>
                        @foreach ($orders as $order)
                            <li class="order-li">
                                <div class="row">
                                    <div class="col-1">
                                        <img src="{{ asset($order->product->image) }}" alt="product-img"
                                            style="height: 70px" class="mx-4">
                                    </div>
                                    <div class="col-10">
                                        <ul>
                                            <li>{{ $order->product->name }}</li>
                                            <li>{{ $order->price }}</li>
                                            <li>статус - {{ $order->status }}</li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('deleteOrder', $order->id) }}">
                                            <img src="{{ asset('assets/images/view/trash-basket.png') }}"
                                                alt="trash-basket" class="mx-3 mt-3" style="height: 40px">
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

                @if (count($orders) != 0)
                    <div class="user_review">
                        <div class="text-center fs-2 mt-5 mb-3">Напишите отзыв</div>
                        <form action="{{ route('review') }}" method="post">
                            @csrf

                            <textarea type="text" class="form-control mb-3" name="review"></textarea>
                            <button type="submit" class="btn btn-light">Отправить</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </main>
@endsection
