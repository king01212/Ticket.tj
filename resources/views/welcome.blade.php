<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Odlot.pl</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <div class="container-fluid" >
            <header>
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        @if (Auth::check())
                        <a class="navbar-brand" href="{{url('home')}}">
                            <img src="{{ asset('img/haslo.png') }}" alt="logo" >
                        </a>
                        @else
                            <a class="navbar-brand" href="{{url('/')}}">
                                <img src="{{ asset('img/haslo.png') }}" alt="logo" >
                            </a>
                        @endif
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->

                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @if (Route::has('login'))
                                    @auth
                                        <li class="nav-item">
                                            <a href="{{ url('home') }}" style="text-decoration: none; margin-right: 50px; font-size: 25px">зайти на сайт</a>
                                        </li>
                                    @else
                                        <li class="nav-item" style="margin-top: 15px;">
                                            <a href="{{ url('o-nas') }}" style="text-decoration: none; margin-right: 50px; font-size: 25px">О нас</a>
                                        </li>
                                        <li class="nav-item" style="margin-top: 15px;">
                                            <a href="{{ url('kontakt') }}" style="text-decoration: none; margin-right: 50px; font-size: 25px">Контакты</a>
                                        </li>
                                        <li class="nav-item mr-3">
                                            <a class="btn btn-primary btn-lg" href="{{ route('login') }}">Войти</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="btn btn-primary btn-lg" href="{{ route('register') }}">Регистрация</a>
                                            </li>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <main>
                <article>
                    <div class="container mt-4">
                        <div class="row">
                           <div id="firstContent">
                               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                   <ol class="carousel-indicators">
                                       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                   </ol>
                                   <div class="carousel-inner">
                                       <div class="carousel-item active">
                                           <img src="{{url('/img/slider1.jpg')}}" class="d-block w-100" alt="image1" style="border-radius: 10px;">
                                           <div class="carousel-caption d-none d-md-block">
                                               <h2>Купить билет на самолет</h2>
                                               <p>и воспользуйтесь преимуществами лучших авиакомпаний</p>
                                           </div>

                                       </div>
                                       <div class="carousel-item">
                                           <img src="{{url('/img/slider2.jpg')}}" class="d-block w-100" alt="image2" style="border-radius: 10px;">
                                           <div class="carousel-caption d-none d-md-block">
                                               <h2>Выберите класс полета</h2>
                                               <p>и отдых во время путешествия</p>
                                           </div>

                                       </div>
                                       <div class="carousel-item">
                                           <img src="{{url('/img/slider3.jpg')}}" class="d-block w-100" alt="image3" style="border-radius: 10px;">
                                           <div class="carousel-caption d-none d-md-block">
                                               <h2>Оформите дополнительную страховку</h2>
                                               <p>берегите себя и других!</p>
                                           </div>

                                       </div>
                                   </div>
                                   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                       <span class="sr-only"></span>
                                   </a>
                                   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                       <span class="sr-only"></span>
                                   </a>
                               </div>
                           </div>
                        </div>
                        <div class="row" style="text-align: center; margin-top: 120px;" >
                            <section>
                                <header> <h2>Добро пожаловать на наш первый официальный сайт ODLOT.PL</h2></header>
                                <p>Этот сайт создан для тех, кто любит путешествовать по Польше и миру.
                                Что отличает нас от других, так это то, что с нами вы всегда можете рассчитывать на выгодные предложения и акции.
                                Кроме того, у нас вы можете приобрести туристическую страховку и даже забронировать автомобиль в одной из наших прокатных компаний!</p>
                            </section>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <img class="card-img-top" src="{{url('/img/adult.jpg')}}" alt="image4">
                                    <div class="card-body">
                                        <h4 class="card-title">Уход</h4>
                                        <p class="card-text">Безопасность путешествия – наш приоритет, поэтому мы ввели страховой пакет</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <img class="card-img-top" src="{{url('/img/happy.jpg')}}" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">Радость</h4>
                                        <p class="card-text">Хорошие рекомендации и оценки клиентов мотивируют нас в развитии проектов и являются истинным результатом нашей работы.</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <img class="card-img-top" src="{{url('/img/person.jpg')}}" alt="">
                                    <div class="card-body">
                                        <h4 class="card-title">Удача</h4>
                                        <p class="card-text">Мы уже удовлетворили более 100 000 клиентов. Ты можешь быть следующим!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <footer>
                                <div class="row my-5 justify-content-center py-5">
                                    <div class="col-11">
                                        <div class="row ">
                                            <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                                                <img src="{{ asset('img/logo.JPG') }}" alt="" width="450" height="220" class="d-inline-block align-top">
                                            </div>
                                            <div class="col-xl-2 col-md-12 col-sm-12 col-12">
                                                <h6 class="mb-3 mb-lg-4 bold-text "><b>MENU</b></h6>
                                                <ul class="list-unstyled">
                                                    <li><a href="{{ url('o-nas') }}" style="text-decoration: none; color: #000000;">О нас</a></li>
                                                    <li><a href="{{ url('o-nas') }}" style="text-decoration: none; color: #000000">Контакты</a></li>
                                                    <li><a href="{{ url('login') }}" style="text-decoration: none; color: #000000">Войти</a></li>
                                                    <li><a href="{{ url('register') }}" style="text-decoration: none; color: #000000">Регистрация</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                                                <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>Адрес</b></h6>
                                                <p class="mb-1">Дружба Народов 35</p>
                                                <p>Дружба Народов</p>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                                                <p class="social text-muted mb-0 pb-0 bold-text"> <span class="mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span> </p><small class="rights"><span>&#174;</span>All Rights Reserved.</small>
                                            </div>

                                            <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                                                <h6 class="text-muted bold-text"><b>Filip Kuranda</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> filipkurandadev@gmail.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>
            </main>
        </div>
    </body>
</html>

