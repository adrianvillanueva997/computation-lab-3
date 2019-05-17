<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proposal;
use Auth;


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
        $id=Auth::user()->getId();
        $propuestas=Proposal::where('id_user', $id)->get();
        return view('user.user_panel.verpropuesta')-> with('propuestas', $propuestas);
    }
    public function modificar_propuesta($id){
        $propuesta = Proposal::find($id);
        #$name=$request->input('name');
        #return view('user.user_panel.modificarpropuesta')-> with('name', $name);
        return view('user.user_panel.modificarpropuesta')->with(compact('propuesta'));
    }
}