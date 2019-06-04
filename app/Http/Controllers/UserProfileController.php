<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proposal;
use App\User;

class UserProfileController extends Controller
{
    //
    public function index($id){
        $user = User::find($id);
        $propuestas = Proposal::where('id_user','LIKE',$id)->paginate(4);
        return view('perfilpublico')->with(compact('propuestas','user'));
    }
}
