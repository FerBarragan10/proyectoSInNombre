<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;

class usuariosController extends Controller
{
    public function getAll(){
        $Usuario = usuarios::all();
        return $Usuario;
    }

    public function insert(request $request){
        $Usuario=usuarios::create($request->all());
        return $Usuario;
    }
    public function get($id){
       $Usuario=usuarios::where('id',$id)->first();
       return $Usuario; 
    }
    public function put($id,request $request){
       $Usuario=$this->get($id);
       $Usuario->fill($request->all());
       $Usuario->save();
       return $Usuario;
    }
    public function delete($id){
        $Usuario=$this->get($id);
        $Usuario->delete();
        return $Usuario;
     }
}
