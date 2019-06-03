@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Potrdite vaš elektronski naslov') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Na vaš e-poštni naslov je bila poslana nova povezava za potrditev.') }}
                        </div>
                    @endif

                    {{ __('Preden nadaljujete, preverite povezavo za preverjanje e-pošte.') }}
                    {{ __('Če e-pošte niste prejeli') }}, <a href="{{ route('verification.resend') }}">{{ __('kliknite tukaj in zahtevajte novo') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
