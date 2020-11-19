<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class notificacionesController extends Controller
{
    function notificaciones(){
        return view('notificaciones');
    }
}
