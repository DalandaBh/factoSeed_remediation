<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saveur extends Model
{
    protected $table = 'saveurs';

    public function plats(){
        return $this->hasMany('App\Plat');
    }
}
