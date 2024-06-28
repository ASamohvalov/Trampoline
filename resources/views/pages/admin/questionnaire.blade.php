@extends('layouts.layout')

@section('title')
    <title>Заказы</title>
    <link rel="stylesheet" href="{{ asset('assets/style/orders.css') }}">
@endsection

@section('content')
    @include('components.header')

    @if (session('success'))
        <div class="alert alert-dismissible fade show login_pop-up_window color-success-msg" role="alert">
            {{ session('success') }}
            <button type="button" class="btn close login_close-btn">
                <span aria-hidden="true" class="fs-2 login_close-span">&times;</span>
            </button>
        </div>
    @endif

    <main>
        <div class="orders_main-div bg-card order_header-link-a">
            <div class="orders_header-link">
                <a href="{{ route('ordersPage') }}" class="mx-1 order_header-link-a">Вернуться обратно</a>
            </div>
            <div class="px-3">
                <div class="fs-2 mb-2 text-dark">{{ $order->user->name }} {{ $order->user->surname }}
                    {{ $order->user->patronymic }}</div>
                <div class="row">
                    <div class="col-3">
                        <img src="{{ asset($order->product->image) }}" alt="product-image"
                            style="width: 100px; border-radius: 10px;" class="bg-card-product-img">
                    </div>
                    <div class="col">
                        <div class="fs-4 order_header-link-a">{{ $order->product->name }}</div>
                        <div class="fs-4 order_header-link-a">{{ $order->price }} рублей</div>
                    </div>
                </div>

                <div class="orders_status mt-2">
                    <span class="fs-5 order_header-link-a">Статус заказа</span>
                    <form action="{{ route('changeOrderStatus', $order->id) }}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col">
                                <select class="form-select" name="status">
                                    <option @if ($order->status == 'Новый') selected @endif>Новый</option>
                                    <option @if ($order->status == 'Подтвержденный') selected @endif>Подтвержденный</option>
                                    <option @if ($order->status == 'Отмененный') selected @endif>Отмененный</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-light">Изменить</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="orders_info-block mt-3">
                    <span class="fs-4 text-dark">Информация о прокате</span>
                    <ul>
                        <li>Адрес доставки - {{ $order->address }}</li>
                        <li>Дата достваки - {{ $order->rental_date }}</li>
                        <li>Время доставки - {{ $order->start_time }}</li>
                        <li>Время окончания - {{ $order->end_time }}</li>
                        <li>Дата заказа - {{ $order->created_at }}</li>
                    </ul>
                </div>

                <div class="orders_user-block">
                    <span class="fs-4 text-dark">Как связатся с пользователем</span>
                    <ul>
                        <li>Логин пользователя - {{ $order->user->login }}</li>
                        <li>Почта пользователя - {{ $order->user->email }}</li>
                        <li>Телефон пользователя - {{ $order->user->phone }}</li>
                    </ul>
                </div>

                <div class="order_user-passport-block">
                    <span class="fs-4 text-dark">Личная информация пользователя</span>
                    <ul>
                        <li>Серия паспорта - {{ $order->passport_series }}</li>
                        <li>Номер паспорта - {{ $order->passport_id }}</li>
                        <li>Дата выдачи паспорта - {{ $order->passport_issue_date }}</li>
                        <li>Паспорт выдан - {{ $order->passport_issue_by }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        document.querySelector('.close').addEventListener('click', function() {
            this.parentNode.classList.remove('show');
        });
    </script>
@endsection
