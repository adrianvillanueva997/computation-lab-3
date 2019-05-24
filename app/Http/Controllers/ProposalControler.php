<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use App\User;

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
        $id_user=$propuesta->id_user;
        $user=User::find($id_user);
        return view('paginapropuestaindividual')->with(compact('propuesta', 'user'));;
    }
}
