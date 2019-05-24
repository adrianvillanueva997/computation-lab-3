<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;

class ProposalControler extends Controller
{
    public function store(Request $request){
        
    }

    public function proposals(){
        $propuestas = Proposal::all();
        return view('proposals')->with(compact('propuestas'));
    }

    
    public function propuestaprueba(){
        return view('paginapropuestaindividual');
    }
}
