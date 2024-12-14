@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header p-4"><h4>{{ __('Witaj '.Auth::user()->name.'! Что ты хочешь сделать сегодня?') }}</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="row">
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="card-title">Купить билет</h2>
                                        <p class="card-text">Используйте кнопку ниже или выберите вкладку «Купить билет» в меню, а затем заполните форму, чтобы найти рейс своей мечты.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{route('buyticket')}}" class="btn btn-primary btn-sm">Перейти к форме</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="card-title">История</h2>
                                        <p class="card-text">Устали искать билеты по электронной почте? Нажмите на историю, и отобразятся все купленные у нас билеты.</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="{{route('history')}}" class="btn btn-primary btn-sm">Посмотреть историю</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-4 mb-5">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h2 class="card-title">Версия</h2>
                                        <p class="card-text">Вам не нравится ваш текущий псевдоним или вы сменили адрес электронной почты? Не волнуйтесь, нажмите кнопку ниже и отредактируйте свои данные.</div>
                                    <div class="card-footer">
                                        <a href="{{route('edit')}}" class="btn btn-primary btn-sm">Редактировать профиль</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
