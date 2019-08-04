@extends('layouts.login')

@section('content')
<form>

    <div class="aw-simple-panel">
        <img alt="Eletroinfo" src="/images/logo-gray.png"/>

        <div class="aw-simple-panel__message">
            Informe o seu e-mail abaixo para receber as instruções de como criar uma nova senha.
        </div>

        <div class="aw-simple-panel__box">
            <div class="form-group  has-feedback">
                <input id="email" type="email" class="form-control  input-lg@error('email') is-invalid @enderror"
                       name="email" placeholder="Seu e-mail" required autocomplete="email" autofocus>
                <span class="glyphicon  glyphicon-envelope  form-control-feedback" aria-hidden="true"></span>
            </div>

            <div class="form-group">
                <button type="submit" class="btn  btn-primary  btn-lg  aw-btn-full-width">{{ __('Send Password Reset Link') }}</button>
            </div>
        </div>
    </div>

</form>
@endsection
