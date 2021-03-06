<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Proposal;
use App\Review;
use Auth;
use App\Category;
use App\Rating;

class PropuestaControlador extends Controller
{
    //
    public function insert (Request $request){
        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        
        $proposal = new Proposal();
        $id=Auth::user()->getId();
        $proposal->name= $request->input('name');
        $proposal->description= $request->input('description');
        $proposal->tags= $request->input('tags');
        $proposal->id_user= $id;
        $proposal->small_description= $request->input('small_description');
        $proposal->coste= $request->input('coste');
        $proposal->detalles_pedido= $request->input('detalles_propuesta');
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        $proposal->image_path=$imageName;
        $categoria=$request->input('categoria');
        $proposal->category_id=$categoria;
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
        $categoria = Category::find($request->input('categoria'));
        $proposal->id_categoria=$categoria->id;
        $proposal->save();
        return back()->with('notification','Propuesta creada correctamente');
    }
    public function delete_propuesta ($id){
        $proposal = Proposal::find($id);
        $proposal->delete();
        return back();
    }

    public function enviar_comentario_propuesta(Request $request,$id){
        $id_user= Auth::user()->getId();
        $review = new Review();
        $review->text_review=$request->input('comments');
        $review->id_user=$id_user;
        $review->id_proposal=$id;
        $review->title=$request->input('title');
        $review->save();
        return back()->with('notification','Comentario creado correctamente');
        
    }

    public function calificar(Request $request){
        
        $p_rating = new Rating();
        $p_rating->id_proposal = $request['id_proposal'];
        $p_rating->id_user = $request['id_user'];
        $p_rating->rating = $request['rating'];
        error_log($p_rating);
        $p_rating->save();
        return "Puntuado correctamente";
    }
}
