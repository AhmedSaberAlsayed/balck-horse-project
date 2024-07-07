<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function create(){
        return view('Auth.create');
    }

    public function store(request $request){
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "Addresses" => $request->Addresses,
            "password" => Hash::make($request->password),
        ]);
        return redirect()->route('index_users');
    }
    public function index(){
        $users=  User::all();
        return view('Auth.index',compact('users'));
    }

    public function edit($id){
        $user=User::find($id);
        return view('Auth.edit',compact('user'));
    }
    public function update(request $request){
    $updateUser= User::where('id',$request->user_id)->first();
        $updateUser->update([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);
    }

    public function delete($id){
            $deleteUser=  User::find($id);
            $deleteUser->delete();
            return redirect()->back();
    }
    public function show_login(){
        return view('Auth.login');
    }
     public function login(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)){
            // Log the user in
            Auth::login($user);
            // Redirect to the create_product route
            return redirect()->back();
        } else {
            // If authentication fails, return an appropriate response
            return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
}
}
