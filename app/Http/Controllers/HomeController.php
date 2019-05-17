<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;

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
        return view('welcome');
    }

    public function proposals(){
        $propuestas = Proposal::all();
        return view('proposals')->with(compact('propuestas'));
    }
}
