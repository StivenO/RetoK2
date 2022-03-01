<?php

namespace App\Http\Controllers;

use App\Models\Diabetes;
use Illuminate\Http\Request;

class DiabetesController extends Controller
{

  public function ver()
  {
    $datos=Diabetes::all();
    return view('diabetes.tables', compact('datos'));
  }
  public function formulario()
  {
    return view('diabetes.formulario');
  }

  public function create(Request $request)
  {

    $data['nombre'] = $request->get('nombre');
    $data['apellido'] = $request->get('apellido');
    $data['cedula'] = $request->get('cedula');
    $data['eps'] = $request->get('eps');
    $data['neurovegetativos'] = $request->get('neurovegetativos');
    $data['trastornos'] = $request->get('trastornos');
    $data['deshidratación'] = $request->get('deshidratación');
    $data['sepsis'] = $request->get('sepsis');
    $data['patologias'] = $request->get('patologias');
    $data['nivel'] = $request->get('nivel');
    Diabetes::create($data);
    return redirect('/diabetes/ver');
  }
}
