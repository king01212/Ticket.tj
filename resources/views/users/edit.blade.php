@extends('layouts.app')

@section('content')

    @if(Auth::check())
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Edytuj profil:</h3>
            </div>
            <form method="post" action="/profil">
                @csrf
                <div class="card-body">
                    Login: <div class="col mb-3"><input type="text" name="name" placeholder="{{Auth::user()->name}}"/></div>
                    E-mail: <div class="col mb-3"><input type="email" name="email" placeholder="{{Auth::user()->email}} "/></div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary" >Edytuj dane</button>
                    </div>

                    <div class="col mt-4">
                        <button type="submit" class="btn btn-dark" name="delete" value="delete" >Usuń konto</button>
                    </div>
                </div>


            </form>
            @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    @else
        <div class="container">
            <div class="card-header">
                Zaloguj się aby skorzystać z tej funkcji
            </div>
        </div>
    @endif


@endsection
