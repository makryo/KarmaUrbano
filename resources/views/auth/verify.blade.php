@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verifica tu correo</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            El link de verificacion ha sido enviado a su correo
                        </div>
                    @endif

                    {{ __('Porfavor verifica su bandeja de correo') }}
                    {{ __('No ha recibido un correo') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click aqui para volver a intentar') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
