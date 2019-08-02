<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cancha;

class canchaController extends Controller
{
    
    public function getAll(){
        $Cancha = cancha::all();
        return $Cancha;
    }

    public function insert(request $request){
        $Cancha=cancha::create($request->all());
        return $Cancha;
    }
    public function get($id){
       $Cancha=cancha::find($id);
       return $Cancha; 
    }
    public function put($id,request $request){
       $Cancha=$this->get($id);
       $Cancha->fill($request->all())->save();
       return $Cancha;
    }
    public function delete($id){
        $Cancha=$this->get($id);
        $Cancha->delete();
        return $Cancha;
     }

}
