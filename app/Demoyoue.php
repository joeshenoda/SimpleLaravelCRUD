<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demoyoue extends Model
{
    public function  demoyou(){
        return $this->hasOne('App\demoyourele');
    }
    //
}
