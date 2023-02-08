<?php

namespace App\Http\Controllers;
use App\Models\Cotizacion;
use App\Models\Empresa;

class empresaController extends Controller
{
    
    //obtener ultima cotizacion con el nombre de la empresa
    public function obtenerUltimaCotizacion($nombre){
        $cotizacion = Cotizacion::where('empresa', $nombre)->orderBy('fecha', 'desc')->select('valor')->first();
        return $cotizacion;
    }

    //obtener todos los datos de una empresa

    public function obtenerTodoEmpresa($nombre){
        $cotizacion = Cotizacion::where('empresa', $nombre)->orderBy('fecha', 'desc')->select('fecha','valor')->get();
        return $cotizacion;
    }


    //devvuelve un array con el nombre de todas las empresas
    public function obtenerEmpresas(){
        $empresas = Empresa::all()->toArray();
        return $empresas;
    }
}
