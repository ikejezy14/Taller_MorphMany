<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospedaje extends Model
{
    protected $fillable = [
        'nombre' , 'codigo_hospedaje',
    ];

    protected $hidden = [
        'id',
    ];

    public function galerias(){
        return $this->morphMany('App\Galeria','galeriable','galeriable_type','galeriable_id');
    }
}
