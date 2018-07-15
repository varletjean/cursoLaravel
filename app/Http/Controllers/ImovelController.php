<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imovel;

class ImovelController extends Controller
{
    
    public function index(){

        $imovel = new Imovel;

        dd($imovel->lista());

        return "Chamei Index() do Controller Imovel";
    }
}
