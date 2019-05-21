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
        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        

        $proposal = new Proposal();
        $proposal->name= $request->input('name');
        $proposal->description= $request->input('description');
        $proposal->tags= $request->input('tags');
        $proposal->id_user=Auth::user()->getId();

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        $proposal->image_path=$imageName;
        $proposal->save();
        return back()->with('notification','Propuesta creada correctamente');
    }
    
    public function update_propuesta ($id, Request $request){
        $proposal = Proposal::find($id);
        $proposal->name= $request->input('name');
        $proposal->description= $request->input('description');
        $proposal->tags= $request->input('tags');
        $proposal->save();
        return back()->with('notification','Propuesta creada correctamente');
    }
    public function delete_propuesta ($id){
        $proposal = Proposal::find($id);
        $proposal->delete();
        return back();
    }
}
