<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index(Request $request){
        $buscar = trim($request->get('buscar'));
        $vehiculos = Vehiculo::select('*')
            ->where('placa', 'LIKE', '%'.$buscar.'%')
            ->orWhere('marca', 'LIKE', '%'.$buscar.'%')
            ->get();
        return view('vehiculos.index', compact('vehiculos', 'buscar'));
    }

    public function crear(){
        $personas = Persona::all();
        return view('vehiculos.crear', compact('personas'));
    }

    public function guardar(Request $request){
        $vehiculo = Vehiculo::create($request->all());
        return redirect()->route('vehicle.index')->with([
            'mensaje' => 'Se ha creado el registro de forma correcta'
        ]);
    }

    public function detalle($id){
        $vehiculo = Vehiculo::find($id);
        return view('vehiculos.detalle', compact('vehiculo'));
    }

    public function eliminar($id){
        $vehiculo = Vehiculo::find($id)->delete();
        return redirect()->route('vehicle.index')->with([
            'mensaje' => 'Se ha eliminado el registro de forma correcta'
        ]);
    }

    public function editar($id){
        $personas = Persona::all();
        $vehiculo = Vehiculo::find($id);
        return view('vehiculos.editar', compact('vehiculo', 'personas'));
    }

    public function actualizar(Request $request, $id){
        $vehiculo = Vehiculo::find($id)->update($request->all());
        return redirect()->route('vehicle.detalle', $id);
    }
}
