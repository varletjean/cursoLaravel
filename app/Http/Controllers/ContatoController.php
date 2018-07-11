<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index (){

        return "Retornei ContatoController!";
    }
    public function salvar(Request $req){

        dd($req->all());
    }
}
