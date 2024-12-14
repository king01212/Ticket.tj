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
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{ asset('img/haslo.png') }}" alt="logo" >
            </a>
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
                                <a href="{{ url('home') }}">Home</a>
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
        <div id="tresc">
            <div class="container">
                <div class="row" style="text-align: center; margin-top: 120px;" >
                    <section style="text-justify: auto">
                        <header> <h2>Кто мы?</h2></header>
                        <p>Команда Odlot.pl — это сайт, который произвел революцию на рынке покупки авиабилетов. Уже в первый день нашей работы нас посетило более 10 000 клиентов. Проект все еще развивается и тестируется все больше и больше возможностей.</p> <br> <br>
                        <h2>
                        Мнения наших клиентов:</h2>
                    </section>
                </div>

                <div class="row " style="font-size: 40px; font-family: 'Bradley Hand ITC'; margin-top: 50px;">
                    <div class="col">
                    Я бизнесмен и, как и положено деловому человеку, много путешествую. У меня всегда была проблема с удобным бронированием билетов, но теперь это осталось в прошлом.
                        <p style="font-family: Bahnschrift">- Махками Бахриддин</p>
                    </div>
                    <div class="col">
                    Это в прямом смысле слова высококлассный сервис! Помимо удобной покупки, клиент имеет мгновенный доступ к истории билетов одним щелчком мыши. Покупка билетов еще никогда не была такой простой!
                        <p style="font-family: Bahnschrift">- Шабнами Сураё</p>
                    </div>
                    <div class="col">
                    Этот проект установил высокую планку для других сайтов, работающих в этой отрасли. Использованы новейшие технологии, это безопасно и быстро!
                        <p style="font-family: Bahnschrift">- Неймар</p>
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
                                            <li><a href="{{ url('login') }}" style="text-decoration: none; color: #000000">Вход</a></li>
                                            <li><a href="{{ url('register') }}" style="text-decoration: none; color: #000000">Регистрация</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                                        <h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5"><b>Адрес</b></h6>
                                        <p class="mb-1">Улица Надбыстшицка 35</p>
                                        <p>Люблин</p>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                                        <p class="social text-muted mb-0 pb-0 bold-text"> <span class="mx-2"><i class="fa fa-facebook" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-linkedin-square" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-twitter" aria-hidden="true"></i></span> <span class="mx-2"><i class="fa fa-instagram" aria-hidden="true"></i></span> </p><small class="rights"><span>&#174;</span>All Rights Reserved.</small>
                                    </div>

                                    <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                                        <h6 class="text-muted bold-text"><b>Махками Бахриддин</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> mcmakhkamboy@gmail.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>

