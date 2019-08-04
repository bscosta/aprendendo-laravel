@extends('layouts.login')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="aw-simple-panel">
        <img alt="AlgaWorks" src="images/logo-gray.png"/>

        <div class="aw-simple-panel__message">
            Por favor, faça o login.
        </div>

        <div class="aw-simple-panel__box">
            <div class="form-group  has-feedback">
                <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control  input-lg @error('email') is-invalid @enderror"
                       required autocomplete="email" placeholder="Seu e-mail"/>
                <span class="glyphicon  glyphicon-envelope  form-control-feedback" aria-hidden="true" autofocus></span>
            </div>

            <div class="form-group  has-feedback">
                <input id="password" name="password" type="password" class="form-control  input-lg @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}"/>
                <span class="glyphicon  glyphicon-lock  form-control-feedback" aria-hidden="true"></span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn  btn-primary  btn-lg  aw-btn-full-width">{{ __('Login') }}</button>
            </div>

            <div class="form-group clearfix">
                <div class="checkbox  pull-left  aw-checkbox-no-margin">
                    <input type="checkbox" id="lembrar"/>
                    <label for="lembrar">Lembre de mim</label>
                </div>

                <div class="pull-right">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    @endif
                </div>
            </div>
        </div>
        @if (Route::has('register'))
            <div class="aw-simple-panel__footer">Novo por aqui? <a href="{{ route('register') }}">{{ __('Register') }}</a>.</div>
        @endif
        @error('email')
            <div class="aw-simple-panel__message is-error">{{ $message }}</div>
        @enderror

        @error('password')
            <div class="aw-simple-panel__message is-error">{{ $message }}</div>
        @enderror
    </div>
</form>
@endsection
