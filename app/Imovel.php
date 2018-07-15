<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    public function lista(){

        return (object)[
           [ "bairro"=>"candeias",
            "cidade"=>"Jaboatao",
            "estado"=>"Pernambuco",
            "pais"=>"Brasil",
            "rua"=>"Avenida Ulisses Montarroyos"],
            ["bairro"=>"Centro",
            "cidade"=>"Ipojuca",
            "estado"=>"Pernambuco",
            "pais"=>"Brasil",
            "rua"=>"Rua vereador Antonio Bonifacio"]
        ];
    }
}
