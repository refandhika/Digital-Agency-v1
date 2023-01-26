<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class HomeController extends Controller
{
    public function index(){
        $param = Service::orderBy('id','asc')->get();
        return view('mainpage', compact('param'));
    }
    
}
