<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusquedaPersonalEmpresaController extends Controller
{
    public function index(){
        return view('recursos-humanos.busqueda-personal.empresa');
    }
}