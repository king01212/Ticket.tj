@extends('layouts.app')

@section('content')

    <div class="container">
        <form action='/kupiony' method='post'>
            @csrf
            <div class="row justify-content-center">
                    <div class="card">
                        <div class="card-header p-4"><h4>{{ __('Wynik wyszukiwania:') }}</h4></div><div class="row mt-4 ml-1" >
                            <div class="col"><h5>#Id<br> полет:</h5></div>
                            <div class="col"><h5>Место отправления:</h5></div>
                            <div class="col"><h5>Место назначения:</h5></div>
                            <div class="col"><h5>Старт:</h5></div>
                            <div class="col"><h5>Время.:</h5></div>
                            <div class="col"><h5>Класс :</h5></div>
                            <div class="col"><h5>Линия :</h5></div>
                            <div class="col"><h5>Цена  :</h5></div>
                            <div class="col"><h5></h5></div>
                        </div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                                <div class="row">
                                    @if($ticket === null)
                                        <div class="col-md-3 mb-4 mt-1">Билеты не найдены</div>
                                        <div class="col-12">
                                            <a href="{{route('buyticket')}}" class="btn btn-primary btn-sm">Возврат</a>
                                        </div>
                                    @else

                                        <div class="row mt-4">
                                                @foreach($ticket as $item => $key)
                                                    <div class="col"><h4>{{$key}}</h4></div>
                                                @endforeach
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-primary" name="Бронировать" value={{$ticket->id}}>Бронировать</button>
                                                    </div>

                                        </div>
                                    @endif
                                </div>

                    </div>
                </div>
        </div>
        </form>
    </div>
@endsection
