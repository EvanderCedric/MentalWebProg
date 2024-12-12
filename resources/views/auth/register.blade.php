@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
<div class="container mt-5">
        <!-- Back Button -->
        <div class="d-flex justify-content-start text-center">
            <a href="{{ url('/') }}" class="btn btn-secondary">Back to Home</a>
        </div>


    <div class="text-center fw-bold">
        <h4>{{ __('Register') }}</h4>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                    name="email" value="{{ old('email') }}" required autocomplete="email">
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
                        name="password" required autocomplete="new-password">
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


        <div class="mb-3">
            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
            <div class="input-group">
                <input id="password-confirm" type="password" class="form-control" 
                        name="password_confirmation" required autocomplete="new-password">
                <button type="button" class="btn btn-outline-secondary" id="holdToggleConfirmPassword">
                    <i class="bi bi-eye"></i>
                </button>
            </div>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-success">
                {{ __('Register') }}
            </button>
        </div>

        <div class="text-center mt-3">
            <p class="mb-0">Already have an account? <a href="{{ route('login') }}">Login here</a></p>
        </div>
    </form>

</div>
  


<script>
    function setupHoldToShow(buttonId, inputId) {
        const button = document.getElementById(buttonId);
        const input = document.getElementById(inputId);

        button.addEventListener('mousedown', () => {
            input.type = 'text';
        });

        button.addEventListener('mouseup', () => {
            input.type = 'password';
        });

        button.addEventListener('mouseleave', () => {
            input.type = 'password';
        });
    }

    setupHoldToShow('holdTogglePassword', 'password');
    setupHoldToShow('holdToggleConfirmPassword', 'password-confirm');
</script>
@endsection
