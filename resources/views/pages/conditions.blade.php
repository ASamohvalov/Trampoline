@extends('layouts.layout')

@section('title')
    <title>Условия аренды</title>
    <link rel="stylesheet" href="{{ asset('assets/style/conditions.css') }}">
@endsection

@section('content')
    @include('components.header')

    <main>
        <div class="container" style="margin-top: 70px;">
            <div class="conditions_main-content conditions_content-top" style="margin-right: 30px;">
                <span class="fs-3 fw-bold">Условия доставки</span>
                <div class="fs-5 mt-3">
                    Мы осуществляем доставку нашего оборудования по Москве и области по следующим условиям: доставка по
                    Москве в пределах МКАД 2000 руб., далее +50 руб. за каждый километр. (Оплачивается доставка только в
                    одну сторону)
                    Доставка в другие районы оговаривается отдельно.
                </div>
            </div>
            <div class="conditions_main-content conditions_content-top">
                <span class="fs-3 fw-bold">Условия оплаты</span>
                <div class="fs-5 mt-3">
                    Наличными или безналичным переводом на расчетный счет компании. При наличном способе оплаты
                    осуществляется минимальная предоплата до приезда на монтаж (предоплата равна стоимости доставки),
                    далее после доставки и монтажа батута Вы оплачиваете оставшуюся сумму.
                    Предоплату можно перевести на карту Сбербанка, ВТБ, Альфа или привезти к нам в офис.
                    При безналичной форме оплаты 100% предоплата и надбавка в размере 7% к стоимости аренды.
                </div>
            </div>
            <div class="conditions_main-content conditions_content-bottom" style="margin-right: 30px;">
                <span class="fs-3 fw-bold">Состояние батутов</span>
                <div class="fs-5 mt-3">
                    Мы тщательно следим за сохранностью нашего оборудования. Все батуты в идеальном состоянии, т.е.
                    прошли мало циклов эксплуатации. А большинство и вовсе только с завода - мы постоянно следим за
                    обновлениями и стараемся радовать заказчиков новинками.
                </div>
            </div>
            <div class="conditions_main-content conditions_content-bottom">
                <span class="fs-3 fw-bold">Дезинфекция батутов и оборудования</span>
                <div class="fs-5 mt-3">
                    Перед выездом на площадку наше оборудование проходит антивирусную обработку, специальными
                    средствами, убивающими все микробы и вирусы. Такую же услугу мы можем провести и перед эксплуатацией
                    аттракционов на площадке.
                </div>
            </div>
        </div>
    </main>
@endsection
