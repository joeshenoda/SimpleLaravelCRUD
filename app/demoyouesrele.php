<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demoyouesrele extends Model
{
   public function demoyourel(){
       return $this->belongsTo('App\demoyoue');
   }
}
