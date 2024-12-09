<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        // Apply admin-only restrictions to relevant methods
        $this->middleware('can:is-admin')->only(['index', 'destroy']);
    }
    

    public function index()
    {
        // Show users only to admins
        $users = User::all(); 
        return view('admin.users.index', compact('users'));
    }

    public function edit()
    {
        // Regular user profile edit
        return view('user.profile', ['user' => auth()->user()]);
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        // Validate inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => ['nullable', 'string', 'min:6', 'confirmed'],
        ]);
        

        $user->name = $request->name;

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->id == auth()->id()) {
            return redirect()->route('admin.users.index')->with('error', 'You cannot delete your own account');
        }
        

        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
    }

    public function changePassword(Request $request)
    {
        $user = auth()->user();

        if ($request->isMethod('post')) {
            $request->validate([
                'current_password' => 'required',
                'password' => 'required|string|min:6|confirmed',
            ]);

            if (!Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'Current password is incorrect']);
            }

            $user->password = bcrypt($request->password);
            $user->save();

            return redirect()->route('profile.edit')->with('success', 'Password updated successfully!');
        }

        // Display change password form
        return view('user.change-password');
    }
}
