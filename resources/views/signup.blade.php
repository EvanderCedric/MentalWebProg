<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Sign Up</title>
</head>
<body>
<div class="container pt-4 bg-white">
    
   <!-- Back Button -->
    <div class="d-flex justify-content-start text-center" style="margin-top: 10px; margin-left: 10px;">
        <a href="{{ url('/home') }}" class="btn btn-secondary">Back to Home</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Signup</h1>
            <hr>
            <form action="{{ route('signup') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" value="{{ old('dob') }}" required>
                    @error('dob')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div> 
                <div class="form-group mb-3">
                    <label>Gender</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" {{ old('gender') == 'Male' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female" {{ old('gender') == 'Female' ? 'checked' : '' }} required>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                    @error('gender')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
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
                <div class="form-group mb-3">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" required>
                    @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="acceptToS" name="acceptToS" required>
                    <label class="form-check-label" for="acceptToS">I accept the Terms of Service</label>
                    @error('acceptToS')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
            <p class="mt-3">Already have an account? <a href="{{ route('login') }}">Log in here</a>.</p>
        </div>
    </div>
</div>
</body>
</html>
