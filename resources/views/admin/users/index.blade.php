@extends('layouts.app')

@section('content')
    
<!-- Back Button -->
    <div class="d-flex justify-content-start text-center" style="position: fixed; top: 110px; left: 10px; z-index: 1000;">
        <a href="{{ url('/') }}" class="btn btn-secondary">Back to Home</a>
    </div>

    <h1>User Management</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
