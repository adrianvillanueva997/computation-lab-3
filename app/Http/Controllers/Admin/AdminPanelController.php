<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;

class AdminPanelController extends Controller
{
    public function index()
    {
        return view('admin.admin_panel.index');
    }

    public function user_panel()
    {
        $usuarios = User::all();
        return view('admin.admin_panel.panel_usuarios')->with(compact('usuarios'));
    }

}
