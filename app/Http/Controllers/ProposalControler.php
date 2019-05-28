<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use App\User;
use App\Review;

class ProposalControler extends Controller
{
    public function store(Request $request){
    }

    public function proposals(){
        $propuestas = Proposal::all();
        return view('proposals')->with(compact('propuestas'));
    }
    
    public function propuestaprueba($id){
        $propuesta = Proposal::find($id);
        $comments = Review::where('id_proposal',$id)->get();
        $id_user=$propuesta->id_user;
        $user=User::find($id_user);
        return view('paginapropuestaindividual')->with(compact('propuesta', 'user','comments'));;
    }

    public function buscarpropuestas(Request $request){
        $textobusqueda = $request->input('searchtext');
        $propuestas = Proposal::where('name','LIKE','%'.$textobusqueda.'%')->orWhere('description','LIKE','%'.$textobusqueda.'%')->orWhere('tags','LIKE','%'.$textobusqueda.'%')->get();
        return view('proposals')->with(compact('propuestas'));
    }

   
}
