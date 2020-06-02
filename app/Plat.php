<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    protected $table = 'plats';

    public function saveur(){
        return $this->belongsTo('App\Saveur');
    }
}
