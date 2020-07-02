<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plz extends Model
{
   
    public function dealer()
    {
        return $this->hasOne(Autodealer::class);
    }

    #public function phone()
    #{
    #    return $this->hasOne('App\Autodealer', 'plz_id', 'id');
    #}
}
