<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comenziProduse extends Model
{
  protected $table = 'comenziProduse';
  protected $primaryKey = 'idC';
  public $timestamps = false;

  public function comenzi(){
      return $this->hasMany(comenzi::class, 'comenzi', 'idC', 'idC');
    }
}
