<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }
    public function index()
    {
        return view('user.user_panel.index');
    }
    public function crear_propuesta()
    {
        return view('user.user_panel.crearpropuesta');
        
    }
    public function mensaje(){
        return view('user.user_panel.mensajes');
    }
    public function ver_propuesta(){
        return view('user.user_panel.verpropuesta');
    }
}