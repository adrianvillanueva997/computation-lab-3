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
        $proposal->name= $request->input('name');
        $proposal->description= $request->input('description');
        $proposal->tags= $request->input('tags');
        $proposal->id_user=Auth::user()->getId();
        
        $proposal->save();
        return back()->with('notification','Propuesta creada correctamente');
    }
}
