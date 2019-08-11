<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\llenar ;
class llenardatos extends Controller
{
    public function guardar(Request $request){
	$comentario=new llenar();
	$comentario->nombre=$request->nombre;
	$comentario->correo=$request->correo;
	$comentario->telefono=$request->telefono;
	$comentario->descripcion=$request->descripcion;
	$comentario->save();
	return view('welcome');
}

}
