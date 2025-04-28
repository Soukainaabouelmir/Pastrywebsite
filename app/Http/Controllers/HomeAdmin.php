<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\User;

class HomeAdmin extends Controller
{
    public function index()
    {
       
        return view('Admin.homeadmin',[
           
        ]);
    }
   
   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role; // Correcting role handling
        $user->password = Hash::make($request->password); // Hashing the password

        $user->save();

        return redirect()->back()->with('success', 'Un nouveau compte a été ajoutée');
    }

    
}
