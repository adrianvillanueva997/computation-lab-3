<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proposal;
use App\User;
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
    public function formulario_update_user(){
        $id=Auth::user()->getId();
        $user=User::find($id);
        return view('user.user_panel.ajustes')->with(compact('user'));
    }
    public function update_user(Request $request){
        $id=Auth::user()->getId();
        $user=User::find($id);
        $user->name= $request->input('name');
        $user->description= $request->input('description');
        $user->email= $request->input('email');
        $user->origen= $request->input('origen');
        $user->ocupation= $request->input('ocupation');
        $user->habilities= $request->input('habilities');
        $user->age= $request->input('age');
        $user->save();
        return back()->with('notification','Propuesta creada correctamente');
    }
}