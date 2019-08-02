<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cancha extends Model
{
    public $timestamps = false;
    protected $table='canchas';
    protected $primarykey='id';
    protected $fillable=[ 'id', 'deporte','jugadores','indoor','precio'];

}
