<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alquiler;

class alquilerController extends Controller
{
    public function getAll(){
        $Alquiler = alquiler::all();
        return $Alquiler;
    }

    public function insert(request $request){
        $Alquiler=alquiler::create($request->all());
        return $Alquiler;
    }
    public function get($cancha,$turno){
       $Alquiler=alquiler::where([['cancha',$cancha],['turno',$turno]])->first();
       return $Alquiler; 
    }
    public function put($cancha,$turno,request $request){
        $Alquiler=$this->get($cancha,$turno);
        $Alquiler->usuario=$request->usuario;
        $Alquiler->estado=$request->estado;
        $Alquiler->save();
       return $Alquiler;
    }
    

}
