@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
<div class="container mt-5">
        <!-- Back Button -->
         <div class="d-flex justify-content-start text-center">
            <a href="{{ url('/') }}" class="btn btn-secondary">Back to Home</a>
        </div>

        <div class="text-center fw-bold">
            <h4>{{ __('Login') }}</h4>
        </div>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <div class="input-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                            name="password" required autocomplete="current-password">
                    <button type="button" class="btn btn-outline-secondary" id="holdTogglePassword">
                        <i class="bi bi-eye"></i>
                    </button>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" 
                        {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </div>

            <div class="text-center mt-3">
                <p class="mb-1">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                @endif
            </div>
        </form>

</div>
       
<script>
    document.getElementById('holdTogglePassword').addEventListener('mousedown', function () {
        const passwordField = document.getElementById('password');
        passwordField.type = 'text';
    });

    document.getElementById('holdTogglePassword').addEventListener('mouseup', function () {
        const passwordField = document.getElementById('password');
        passwordField.type = 'password';
    });

    document.getElementById('holdTogglePassword').addEventListener('mouseleave', function () {
        const passwordField = document.getElementById('password');
        passwordField.type = 'password';
    });
</script>
@endsection
