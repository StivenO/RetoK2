<?php

namespace App\Http\Controllers;

use App\Models\Hemoglobinas;
use App\Models\Sexo;
use Illuminate\Http\Request;

class HemogrobinaController extends Controller
{

  public function ver()
  {
    $datos=Hemoglobinas::all();
    return view('hemogrobina.tables', compact('datos'));
  }
  public function formulario()
  {
    $sexo = Sexo::all();
    return view('hemogrobina.formulario', compact('sexo'));
  }

  public function create(Request $request)
  { 
        $data['nombre'] = $request->get('nombre');
        $data['apellido'] = $request->get('apellido');
        $data['correo'] = $request->get('correo');
        $data['fecha_nacimiento'] = $request->get('Fnacimiento');
        $data['sexo_id'] = $request->get('sexo_id');
        $data['nivel'] = $request->get('nivel');


        Hemoglobinas::create($data);
        
        return redirect('/hemogrobina/ver');
  }

}
