<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerTeste extends Controller
{
    //
    public function index(){

        $menu = [
            ["titulo"=>"Principal"],
            ["titulo"=>"Quem somos"],
            ["titulo"=>"Valores"]
        ];

        return view('teste', compact('menu'));
    }
}
