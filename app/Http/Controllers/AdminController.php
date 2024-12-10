<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index()
    {
        $users = User::all(); 
        $user = auth()->user();
        if ($user->is_admin) {
            return view('admin.users.index', compact('users'));
        }else{
            return redirect('/')->with('error', 'Unauthorized access.');
        }
       


    }

    public function edit($id)
    {
        $user = auth()->user();
        $user = User::findOrFail($id);

        if ($user->is_admin) {
            return view('admin.users.edit', compact('user'));
        }else{
            return redirect('/')->with('error', 'Unauthorized access.');
        }

    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        if ($user->is_admin) {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            ]);
    
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
    
            return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
        }else{
            return redirect('/')->with('error', 'Unauthorized access.');
        }


      
    }
    public function destroy($id)
    {

        $user = User::findOrFail($id);

        if ($user->is_admin) {
            if ($user->id == auth()->id()) {
                return redirect()->route('admin.users.index')->with('error', 'You cannot delete your own account');
            }
            $user->delete();
            return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
        }else{
            return redirect('/')->with('error', 'Unauthorized access.');
        }

       
    }

}
