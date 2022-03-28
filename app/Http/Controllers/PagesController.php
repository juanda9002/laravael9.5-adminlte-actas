<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
//ruta home    
    public function home(){
        return view('admin/dashboard');        
    }

//ruta vista crear modelo equipo    
public function crearModelo(){
    return view('modelo/crearModelo');        
}

}
