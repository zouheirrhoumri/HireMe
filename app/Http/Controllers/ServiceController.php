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
}
