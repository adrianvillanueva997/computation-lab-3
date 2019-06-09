<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use App\Category;
use App\Proposal_rating;

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
        $prueba = new Proposal_rating();
        $categories=Category::All();
        return view('welcome')->with(compact('categories'));
    }

    
}
