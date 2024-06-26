@extends('layouts.layout')

@section('title')
    <title>О нас</title>
    <link rel="stylesheet" href="{{ asset('assets/style/about.css') }}">
@endsection

@section('content')
    @include('components.header')

    {{-- по какой-то причине стили работают только так --}}
    <style>
        .rewiew-card_style {
            background-color: #83ACAF;
            display: inline-block;
        }

        main {
            margin-top: 100px;
        }

        #text-carousel {
            max-width: 800px;
            margin: 0 auto;
        }

        #text-carousel .carousel-item {
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        #text-carousel h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        #text-carousel p {
            font-size: 18px;
        }
    </style>

    <main>
        <div class="container">
            <div class="about_main-container_div">
                <div class="about_description">
                    <p class="fs-3 text-center">
                        ВАШИ ДЕТИ БУДУТ В ВОСТОРГЕ! успевайте забронировать батут
                    </p>
                </div>
                <div class="about_advantages">
                    <p class="fs-5 mx-2">
                        Trampoline - это аренда аттракционов для корпоративных, уличных и семейных праздников. <br>
                        Аренда аттракционов - самый распространенный способ привнести в Ваш праздник оригинальность,
                        интерактивность и веселье. Арендованные у нас аттракционы могут выступать в качестве декораций,
                        оформления места праздника, не говоря уже об их непосредственном использовании. Аренда надувных
                        батутов,
                        горок, каруселей делает услуги аренды и проката аттракционов применимой для любого праздника!
                    </p>
                </div>

                <div class="card-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach ($reviews as $index => $review)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}"
                                    class="{{ $index == 0 ? 'active' : '' }}"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner bg-dark">
                            @foreach ($reviews as $index => $review)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="text-white">{{ $review->user->name }}</h4>
                                                <p class="text-white">{{ $review->review }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>


            {{-- <div class="about_reviews">
                    <div class="rewiew-cards">
                        <div class="card text-white mb-3 rewiew-card rewiew-card_style" style="background-color: #9c9e80;">
                            <div class="card-header color-card">20.12.2020</div>
                            <div class="card-body">
                                <h5 class="card-title color-card">Анастасия</h5>
                                <p class="card-text color-card">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                        <div class="card text-white mb-3 rewiew-card rewiew-card_style" style="background-color: #9c9e80;">
                            <div class="card-header color-card">20.12.2020</div>
                            <div class="card-body">
                                <h5 class="card-title color-card">Анастасия</h5>
                                <p class="card-text color-card">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                        <div class="card text-white mb-3 rewiew-card rewiew-card_style" style="background-color: #9c9e80;">
                            <div class="card-header color-card">20.12.2020</div>
                            <div class="card-body">
                                <h5 class="card-title color-card">Анастасия</h5>
                                <p class="card-text color-card">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                        <div class="card text-white mb-3 rewiew-card rewiew-card_style" style="background-color: #9c9e80;">
                            <div class="card-header color-card">20.12.2020</div>
                            <div class="card-body">
                                <h5 class="card-title color-card">Анастасия</h5>
                                <p class="card-text color-card">Some quick example text to build on the card title and make up the bulk
                                    of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
        </div>
        </div>
    </main>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
@endsection
