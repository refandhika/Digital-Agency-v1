<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        
        $temp = User::where('name', '=', 'testuser')->first();
        print_r(!$temp);
        return view('register');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'repassword' => 'required',
        ]);
        
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $repassword = $request->input('repassword');
        $chkuser = User::where('name', '=', $name)->first();
        $chkemail = User::where('email', '=', $email)->first();
        $request->merge([
            'password' => Hash::make($password)
        ]);

        if(!empty($chkuser)){
            return redirect()->route('register.index')->with('alert','User already exist.');
        } 
        if(!empty($chkemail)){
            return redirect()->route('register.index')->with('alert','Email already exist.');
        } 
        if($password != $repassword){
            return redirect()->route('register.index')->with('alert','Password not match.');
        }

        User::create($request->post());
        return redirect()->route('login.index')->with('success','New user has been added successfully.');
    }
}
