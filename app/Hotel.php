<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'nombre' ,
    ];

    protected $hidden = [
        'id',
    ];

    public function galerias(){
        return $this->morphMany('App\Galeria','galeriable','galeriable_type','galeriable_id');
    }
}
