<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Proposal;
use App\User;

class AdminPanelController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        $propuestas = Proposal::all();
        return view('admin.admin_panel.index')->with(compact('usuarios', 'propuestas'));
    }

    public function user_panel()
    {
        return view('admin.admin_panel.panel_usuarios');
    }


}
