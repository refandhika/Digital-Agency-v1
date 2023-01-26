<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function store(Request $request){
        Session::flush();
        
        Auth::logout();

        return redirect()->route('login.index')->with('success','Successfully Logged Out.');
    }
}
