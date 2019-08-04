@extends('layouts.login')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="aw-simple-panel">
        <img alt="AlgaWorks" src="images/logo-gray.png"/>

        <div class="aw-simple-panel__message">
            Informe os dados para registro.
        </div>

        <div class="aw-simple-panel__box">
            <div class="form-group  has-feedback">
                <input id="name" type="text" class="form-control  input-lg @error('name') is-invalid @enderror" name="name" placeholder="{{ __('Name') }}">
                <span class="glyphicon  glyphicon-user  form-control-feedback" aria-hidden="true"></span>
            </div>
            <div class="form-group  has-feedback">
                <input id="email" type="email" class="form-control  input-lg @error('email') is-invalid @enderror" name="email"
                       placeholder="{{ __('Email') }}" value="{{ old('email') }}" required autocomplete="email">
                <span class="glyphicon  glyphicon-envelope  form-control-feedback" aria-hidden="true"></span>
            </div>
            <div class="form-group  has-feedback">
                <input id="password" type="password" class="form-control  input-lg @error('password') is-invalid @enderror" name="password"
                       placeholder="{{ __('Password') }}" required autocomplete="new-password">
                <span class="glyphicon  glyphicon-eye-close  form-control-feedback" aria-hidden="true"></span>
            </div>
            <div class="form-group  has-feedback">
                <input id="password-confirm" type="password" class="form-control input-lg" name="password_confirmation"
                       placeholder="{{ __('Password Confirm') }}" required autocomplete="new-password">
                <span class="glyphicon  glyphicon-eye-close  form-control-feedback" aria-hidden="true"></span>
            </div>

            <div class="form-group">
                <button type="submit" class="btn  btn-primary  btn-lg  aw-btn-full-width">{{ __('Register') }}</button>
            </div>
        </div>
    </div>

</form>
@endsection
