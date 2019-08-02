<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    public $timestamps = false;
    protected $table='usuarios';
    protected $primarykey='id';
    protected $fillable=[ 'id', 'nombre','telefono'];
}
