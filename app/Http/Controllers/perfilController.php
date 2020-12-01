<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Models\Pedido;
use App\Models\Precio;
use Illuminate\Http\Request;

class perfilController extends Controller
{
    public function perfil(){
        $vehiculo= Vehiculo::where('id_usuario','1')->get();
        return view('perfil',compact('vehiculo'));
    }

    public function formulario(Request $request){
        $request = $_REQUEST['id'];
        $pedido = new Pedido();
        $vehiculo= Vehiculo::where('id_usuario',$request)->get();
        return view('perfil',compact('vehiculo','pedido','request'));
    }

    public function pedido(Request $request){
        
        $id = $_REQUEST['id'];
        
        $vehiculo= Vehiculo::where('id_usuario',$id)->get();
        
        foreach($vehiculo as $v){

       $id_servicio = $_REQUEST[$v->id];
       if($id_servicio!=0){
       $precio = Precio::where('id_servicio',$id_servicio)->where('id_categoria',$v->id_categoria)->get();
       foreach($precio as $p){
       $monto=$p->precio;
       }
       $pedido = new Pedido();
       $pedido->id_usuario=$id;
       $pedido->id_vehiculo=$v->id;
       $pedido->id_servicio=$id_servicio;
       $pedido->monto=$monto;
       $pedido->save();
    }

    }
        return redirect('perfil');
    }
}
