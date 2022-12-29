<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Titulo;

class TituloController extends Controller
{
    public function select(){
        $titulos = Titulo::get()->toArray();
        // dd($titulos);
        return $titulos;
   }
}
