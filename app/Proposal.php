<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
        'name', 'description', 'tags', 'id_user', 'small_description', 'coste', 'detalles_pedido', 'id_user', 'category_id'
    ];
    public function store(Request $request) {
    Post::create($request->all());
    return redirect('posts');
}
}
