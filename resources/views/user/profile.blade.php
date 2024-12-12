
@extends('layouts.app')


@section('content')
    <!-- Back Button -->
    <div class="d-flex justify-content-start text-center" style="position: fixed; top: 110px; left: 10px; z-index: 1000;">
        <a href="{{ url('/') }}" class="btn btn-secondary">Back to Home</a>
    </div>
    
<link href="{{ asset('style.css') }}" rel="stylesheet">
<div class="container mt-5">
    <h1 class="mb-4">Edit Profile</h1>
    

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" class="needs-validation" novalidate>
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" 
                   value="{{ old('name', $user->name) }}" 
                   class="form-control @error('name') is-invalid @enderror" 
                   required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">New Password (optional)</label>
            <input type="password" id="password" name="password" 
                   class="form-control @error('password') is-invalid @enderror">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm New Password</label>
            <input type="password" id="password_confirmation" 
                   name="password_confirmation" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
