<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

// In UserController


    public function edit()
    {
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

        return view('user.change-password');
    }
}
