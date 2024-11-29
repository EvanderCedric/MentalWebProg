<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="container pt-4 bg-white">

   <!-- Back Button -->
   <div class="d-flex justify-content-start text-center" style="margin-top: 10px; margin-left: 10px;">
        <a href="{{ url('/home') }}" class="btn btn-secondary">Back to Home</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>Login</h1>
            <hr>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <p class="mt-3">Don't have an account? <a href="{{ route('signup') }}">Sign up here</a>.</p>
        </div>
    </div>
</div>
</body>
</html>
