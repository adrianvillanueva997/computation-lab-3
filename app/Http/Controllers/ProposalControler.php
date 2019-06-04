<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use App\User;
use App\Review;
use App\Category;

class ProposalControler extends Controller
{
    public function store(Request $request){
    }

    public function proposals(){
        $propuestas = Proposal::paginate(9);
        $categories=Category::All();
        return view('proposals')->with(compact('propuestas','categories'));
    }
    
    public function propuestaprueba($id){
        $propuesta = Proposal::find($id);
        $comments = Review::where('id_proposal',$id)->get();
        $id_user=$propuesta->id_user;
        $user=User::find($id_user);
        return view('paginapropuestaindividual')->with(compact('propuesta', 'user','comments'));;
    }

    public function buscarpropuestas(Request $request){
        $categories=Category::All();
        $textobusqueda = $request->input('searchtext');
        $propuestas = Proposal::where('name','LIKE','%'.$textobusqueda.'%')->orWhere('description','LIKE','%'.$textobusqueda.'%')->orWhere('tags','LIKE','%'.$textobusqueda.'%')->paginate(9);
        return view('proposals')->with(compact('propuestas','categories'));
    }

    public function filtrarporcategoria($id){
        $categories=Category::All();
        $propuestas = Proposal::where('category_id',$id)->paginate(9);
        return view('proposals')->with(compact('propuestas','categories'));
    }
   
}
