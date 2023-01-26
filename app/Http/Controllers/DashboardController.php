<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index(){
        $param = Service::orderBy('id','asc')->get();
        return view('dashboard.main', compact('param'));
    }

    public function create(){
        return view('dashboard.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        
        Service::create($request->post());
        return redirect()->route('dashboard.index')->with('success','New service has been added successfully.');
    }
    
    public function edit(Service $service, $dashboard){
        $param = Service::find($dashboard);
        return view('dashboard.edit', compact('param'));
    }

    public function update(Request $request, Service $service, $dashboard){
        $request->validate([
            'name' => 'required',
        ]);
        
        $param = Service::find($dashboard);

        $param->fill($request->post())->save();
        return redirect()->route('dashboard.index')->with('success','Service has been updated successfully.');
    }
    
    public function destroy(Service $service, $dashboard){
        
        $param = Service::find($dashboard);

        $param->delete();
        return redirect()->route('dashboard.index')->with('success','Service has been deleted successfully.');
    }
    
}
