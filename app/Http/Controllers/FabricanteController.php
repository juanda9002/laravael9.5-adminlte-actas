<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FabricanteModel;
use Illuminate\Support\Facades\App;

class FabricanteController extends Controller
{
    
//ruta vista crear fabricante equipo    
public function index(){
    return view('fabricante/crear');         
}

public function guardar(Request $request){

   // return $request->all();
   $nuevoFabricante = new FabricanteModel; //se crea un objeto del modelo fabricante

   $nuevoFabricante->nombreFabricante=$request->nombreFabricante; //se repuera datos del formulario

   $nuevoFabricante->save();

   


   return view('fabricante/crear');         
}



}