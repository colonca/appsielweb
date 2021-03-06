<?php

namespace App\Http\Controllers;

use App\Models\Team;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')
            ->with('location','inicio');
    }

    public function inicio(){
        return view('backoffice.home')
            ->with('location','inicio')
            ->with('teams',Team::all());
    }

    public function quienes_somos()
    {
        return view('quienes_somos');
    }

    public function clientes()
    {
        return view('clientes');
    }

    public function preguntas_frecuentes()
    {
        return view('preguntas_frecuentes');
    }

}
