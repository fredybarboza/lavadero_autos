<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class perfilController extends Controller
{
    public function perfil(){

        $vehiculo= Vehiculo::where('id_usuario','1')->get();
        return view('perfil',compact('vehiculo'));
    }
}
