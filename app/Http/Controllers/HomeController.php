<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        return view('home');
        return redirect('/');
    }
    public function expocitores()
    {
        return view('expocitores');
    }
    public function cursos()
    {
        return view('cursos');
    }
    public function biblioteca()
    {
        return view('biblioteca');
    }
    public function galeria()
    {
        return view('galeria');
    }
    public function configuracion()
    {
        return view('configuracion');
    }
    public function contacto()
    {
        return view('contacto');
    }
}
