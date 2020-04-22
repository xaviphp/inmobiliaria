<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Inmobiliaria;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $inmobiliarias = Inmobiliaria::all();
        $users = User::all();
        return view('home', compact('inmobiliarias','users'));
    }


    public function show(Inmobiliaria $inmobiliaria)
    {
        //
    }


}
