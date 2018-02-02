<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Encuestas;

class EncuestasController extends Controller
{
    //
	//Mostrar todos datos de la bbdd
	public function index()
	{
		$arrayEncuestas = Encuestas::all();
		return view('encuestas.index', array('arrayEncuestas'=>$arrayEncuestas));
	}
 	//view create
    public function create()
	{
		return view('encuestas.create');
	}
	//ver uno solo
	public function show($id)
	{
		$arrayEncuestas = Encuestas::find($id);
		return view('encuestas.show', array('id'=>$id, 'titulo'=>$arrayEncuestas));
	}
	//Guardar datos en la bbdd
	public function store(Request $request) {
        $encu = new Encuestas();
        if( $request->has("titulo")) {
        	$encu->idUsuario = 1;
            $encu->titulo = $request->input('titulo');
            $encu->save();
            return view('encuestas.bien');
        } else {
            return "Rellena todas las casillas <br> <a href='/encuestas'>Seguir</a>";
        }
    }

}
