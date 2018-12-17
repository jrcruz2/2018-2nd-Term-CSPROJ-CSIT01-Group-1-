@extends('layouts.app')

@section('content')
<div class="padding">
<div class="w3-card-4 w3-display-middle w3-black" style="width:50%">
    <div class="padding">
        <br>
        <div class="w3-center">
            <i class="fas fa-chalkboard-teacher fa-7x"></i>
        </div>
        <br>
        <header>
            <div class="w3-center">
                <h3 class="w3-xxlarge w3-lobster"> Registrar Login </h3>
            </div>
        </header>

        <br>

        <form method="POST" action="{{ route('registrar.login.submit') }}">
            @csrf

            @if(Session::has('message'))
                <div class="w3-panel w3-green w3-card-4" style="padding: 15px;">{{ Session::get('message') }} </div>
            @endif

            <div class="form-group row w3-large">
                <label for="email" class="col-sm-4 col-form-label text-md-right">
                    {{ __('E-Mail Address') }}
                </label>
                
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group row w3-large">
                <label for="password" class="col-md-4 col-form-label text-md-right">
                    {{ __('Password') }}
                </label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
@endsection