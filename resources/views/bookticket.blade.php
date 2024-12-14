@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><h3>Поздравляем! Билет куплен.</h3></div>
            <div class="card-body">
                <p>Не жди, нажми на кнопку ниже и проверь в своей истории, есть ли он уже!</p>
                <a href="{{route('history')}}" class="btn btn-primary btn-sm">Проверь</a>
            </div>
        </div>
    </div>

@endsection
