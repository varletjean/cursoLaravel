<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    public function lista(){

        return (object)[
            "nome"=> 'Jean Varlet',
            "tel"=>"973172499"
        ];
    }
}
