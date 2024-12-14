@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Zakupione bilety:</h3>
                <div class="row mt-4 ml-1" >
                    <div class="col"><h5>#Id<br> полет:</h5></div>
                    <div class="col"><h5>Место отправления:</h5></div>
                    <div class="col"><h5>Место назначения:</h5></div>
                    <div class="col"><h5>Старт:</h5></div>
                    <div class="col"><h5>Время.:</h5></div>
                    <div class="col"><h5>Класс:</h5></div>
                    <div class="col"><h5>Линия:</h5></div>
                    <div class="col"><h5>Цена :</h5></div>
                </div>
            </div>

            <div class="card-body">
                @if($tickets != null)
                    @foreach($tickets as $ticket)
                    <div class="row mt-4 border-bottom">
                        @foreach($ticket as $item => $key)
                            <div class="col"><h4>{{$key}}</h4></div>
                        @endforeach
                    </div>
                    @endforeach
                @else
                Билеты еще не куплены
                @endif
            </div>
        </div>
    </div>

@endsection
