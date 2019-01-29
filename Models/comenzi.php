<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comenzi extends Model
{
  protected $table = 'comenzi';
  protected $primaryKey = 'idC';
  public $timestamps = false;

  public function produse(){
    return $this->belongsToMany(produse::class, 'comenziProduse', 'idC', 'idP');
  }
}
