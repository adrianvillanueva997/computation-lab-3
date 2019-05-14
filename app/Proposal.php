<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
        'name', 'description', 'tags', 'id_user'
    ];
    public function store(Request $request) {
    Post::create($request->all());
    return redirect('posts');
}
}
