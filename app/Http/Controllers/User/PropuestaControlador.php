<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Proposal;
use Auth;

class PropuestaControlador extends Controller
{
    //
    public function insert (Request $request){
        $proposal = new Proposal();
        $id=Auth::user()->getId();
        $proposal->name= $request->input('name');
        $proposal->description= $request->input('description');
        $proposal->tags= $request->input('tags');
        $proposal->detalles_pedido= $request->input('detalles_propuesta');
        $proposal->coste= $request->input('coste');
        $proposal->small_description= $request->input('small_description');
        $proposal->id_user= $id;
        $proposal->save();
        return back()->with('notification','Propuesta creada correctamente');
    }
    public function update_propuesta ($id, Request $request){
        $proposal = Proposal::find($id);
        $proposal->name= $request->input('name');
        $proposal->description= $request->input('description');
        $proposal->tags= $request->input('tags');
        $proposal->detalles_pedido= $request->input('detalles_propuesta');
        $proposal->coste= $request->input('coste');
        $proposal->small_description= $request->input('small_description');
        $proposal->save();
        return back()->with('notification','Propuesta creada correctamente');
    }
    public function delete_propuesta ($id){
        $proposal = Proposal::find($id);
        $proposal->delete();
        return back();
    }
}
