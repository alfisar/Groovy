<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index($menu)
    {
        return view('menu',[
            'menu' => $menu
        ]);
    }
}
