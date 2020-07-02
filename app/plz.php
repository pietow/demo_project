<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plz extends Model
{
    
    public function phone()
    {
        return $this->hasOne('App\Autodealer', 'plz_id', 'id');
    }
}
