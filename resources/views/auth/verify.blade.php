@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Zweryfikuj swój adres E-mail.') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link weryfikacyjny został wysłany na Twój adres mailowy.') }}
                        </div>
                    @endif

                    {{ __('Przed kontynuowaniem sprawdź, czy w e-mailu nie ma linku weryfikacyjnego') }}
                    {{ __('Jeśli nie otrzymałeś e-maila') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Wyślij ponownie') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
