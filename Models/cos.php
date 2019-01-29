<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cos extends Model
{
  protected $table = 'cosDeCumparaturi';
  protected $primaryKey = 'idP';
  public $timestamps = false;

  public function produse(){
    return $this->belongsTo(produse::class, 'idP', 'idP');
  }

}
