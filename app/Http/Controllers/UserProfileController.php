<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proposal;

class UserProfileController extends Controller
{
    //
    public function index($id){
        $propuestas = Proposal::where('id_user','LIKE',$id)->paginate(4);
        return view('perfilpublico')->with(compact('propuestas'));
    }
}
