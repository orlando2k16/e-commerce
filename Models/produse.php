<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produse extends Model
{
  protected $table = 'produse';
  protected $primaryKey = 'idP';
  public $timestamps = false;

  public function comenzi(){
    return $this->belongsToMany(comenzi::class, 'comenziProduse', 'idP', 'idC');
  }
}
