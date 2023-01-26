<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{   
    public function index(){
        if(Auth::check()){
            return redirect()->route('dashboard.index');
        }
        return view('login');
    }
    
    public function store(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        
        $name = $request->input('name');
        $password = $request->input('password');
        $user = User::where('name', '=', $name)->first();

        if(empty($user)){
            return redirect()->route('login.index')->with('alert','User do not exist.');
        }
        
        if(!Hash::check($password, $user->password)){
            return redirect()->route('login.index')->with('alert','Wrong Password.');
        }   

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('dashboard.index')->with('success', 'Successfully Logged In');
        }

        return redirect()->route('login.index')->with('alert','Wrong input.');
    }
}
