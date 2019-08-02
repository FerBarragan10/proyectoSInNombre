<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class alquiler extends Model
{
    
    public $timestamps = false;
    protected $table='alquilers';
    protected $fillable=['cancha','turno','estado','usuario'];

    protected function setKeysForSaveQuery(Builder $query)
  {
      $query
          ->where('cancha', '=', $this->getAttribute('cancha'))
          ->where('turno', '=', $this->getAttribute('turno'));
      return $query;
  }
}

