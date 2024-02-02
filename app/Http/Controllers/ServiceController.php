<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('services\index', ['services' => $services]);
        return view('services\index');
    }
    public function create(){
        return view('services.create');

    }
    public function store(Request $request){
        $data = $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'contact'=>'required|email'
        ]);
        $newservice = Service::create($data);
        return redirect(route('services.index'));
    }
}
