<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

class AdminPanelController extends Controller
{
    public function index()
    {
        $usuarios = User::all();
        return view('admin.admin_panel.index')->with(compact('usuarios'));
    }

    public function user_panel()
    {
        return view('admin.admin_panel.panel_usuarios');
    }

}
