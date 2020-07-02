<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autodealer extends Model
{
    /**
     * Get the plz coordinates of the car dealer.
     */
    public function coor()
    {
        return $this->belongsTo('App\plz', 'id');
    }
}
