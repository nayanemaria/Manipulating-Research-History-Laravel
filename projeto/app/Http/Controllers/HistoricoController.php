<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Historico;
use Redirect;

class HistoricoController extends Controller {

  public function insert(Request $request) {
       $texto = $request->input('texto');
       $id_titulo = $request->input('id_titulo');
       $data=array('texto'=>$texto, 'id_titulo'=>$id_titulo,);
       DB::table('historicos')->insert($data);
       return Redirect::to('/');
  }

  public function select(){
       $historicos = Historico::take(3)->orderBy('id', 'DESC')->get();
       return view('my-page', compact("historicos"));
  }

}
