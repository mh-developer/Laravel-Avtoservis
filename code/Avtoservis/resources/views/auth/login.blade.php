@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="jumbotron text-center login_form shadow-lg p-3 my-5 bg-white">
                    <h2>{{ __('Prijava') }}</h2>
                    <div class="lead"></div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group login_input">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="E-Mail naslov" autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group login_input">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Geslo" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Zapomni se me') }}
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-padding">
                                {{ __('Prijava') }}
                            </button>
                        </div>
                        {{-- <div class="form-group mb-0">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Pozabljeno geslo?') }}
                                </a>
                            @endif
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
